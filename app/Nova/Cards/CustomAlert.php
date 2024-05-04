<?php

namespace App\Nova\Cards;


use App\Models\Alert;
use InteractionDesignFoundation\HtmlCard\HtmlCard;
use function Laravel\Prompts\text;

class CustomAlert extends HtmlCard
{
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
