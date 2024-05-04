<?php

use App\Models\Alert;
use App\Nova\Cards\CustomAlert;

function loadAlert()
{
    $alertsPublisheds = Alert::where('is_published', true)->get();
    $cards = [];
    foreach ($alertsPublisheds as $alert) {
        $cardAlert = new CustomAlert;
        $cardAlert->buildCards($alert->name, $alert->title, $alert->subtitle, $alert->image, $alert->size, $alert->link);
        array_push($cards, $cardAlert);
    }
    return $cards;
}
