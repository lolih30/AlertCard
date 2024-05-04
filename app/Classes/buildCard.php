<?php

use App\Models\Alert;
use App\Nova\Cards\CustomAlert;

function loadAlert()
{
    $alerts = Alert::where('is_published', true)->get();
    $cards = [];
    foreach ($alerts as $alert) {
        $cardAlert = new CustomAlert;
        $cardAlert->buildCard($alert->name, $alert->title, $alert->subtitle, $alert->image, $alert->size, $alert->link);
        array_push($cards, $cardAlert);
    }
    return $cards;
}
