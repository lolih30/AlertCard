<?php

namespace App\Nova;

require_once app_path('classes/buildCard.php');

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Alert extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Alert>
     */
    public static $model = \App\Models\Alert::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->rules('required'),
            Text::make('Title')->rules('required'),
            Textarea::make('Subtitle')->rules('required')->maxlength(250),
            Image::make('Image'),
            Select::make('Size')->options([
                '1/3' => '1/3',
                '2/3' => '2/3',
                'full' => 'full',
            ]),
            Text::make('Link'),
            DateTime::make('Publish at')->hideFromIndex()->rules('after_or_equal:today'),
            DateTime::make('Publish until')->hideFromIndex()->rules('after_or_equal:publish_at'),
            Boolean::make('Is Published')->canSee(function ($request) {
                return true;
            }),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return loadAlert();
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
