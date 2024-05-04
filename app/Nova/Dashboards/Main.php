<?php

namespace App\Nova\Dashboards;


use Laravel\Nova\Cards\Help;
use App\Nova\Cards\Alert;
use App\Nova\Cards\CustomAlert;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
       /*  $alert =  new CustomAlert();
        $alert->title = 'Hola';
        $alert->width = 'full';

        $alert->canSee(function ($request) {
            return true;
        });
 */
        return [
         new Help,

        ];



    }
}
