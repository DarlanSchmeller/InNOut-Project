<?php
session_start();
requireValidSession();


$date = (new DateTime())->getTimestamp();
$today = date('d \d\e F \d\e Y', $date);


loadTemplateView('day_records', [
    'today' => $today,
]);