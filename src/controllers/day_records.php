<?php
session_start();
requireValidSession();

loadModel('WorkingHours');

$date = (new DateTime())->getTimestamp();
$today = date('d \d\e F \d\e Y', $date);

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

loadTemplateView('day_records', [
    'today' => $today,
    'records' => $records
]);