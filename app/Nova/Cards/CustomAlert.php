<?php

namespace App\Nova\Cards;


use App\Models\Alert;
use InteractionDesignFoundation\HtmlCard\HtmlCard;
use function Laravel\Prompts\text;

class CustomAlert extends HtmlCard
{
    public function __construct()
    {
        /*    $this->width('full')
            ->view('alertCard.alert', [
                'name' => 'Contingencia',
                'title' => 'Alerta de contingencia',
                'subtitle' => 'Se están presentando rechazos generalizados por un error de tipoContingencia, éste es un error del lado del Ministerio de Hacienda y se está resolviendo del lado de ellos',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>',

            ]); */
    }

    public function buildCard($name, $title, $subtitle, $image, $size, $link)
    {
        $this->width($size)
            ->view('alertCard.alert', [
                'name' => $name,
                'title' => $title,
                'subtitle' => $subtitle,
                'image' => $image,
                'link'=> $link
            ]);
    }
}
