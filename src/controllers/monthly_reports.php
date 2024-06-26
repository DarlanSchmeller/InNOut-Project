<?php
session_start();
requireValidSession();

$currentDate = new DateTime();

$user = $_SESSION['user'];
$registries = WorkingHours::getMonthlyReport($user->id, new DateTime());

$report = [];
$workDay = 0;
$sumOfWorkedTime = 0;
$lastDay = getLastDayOfMonth($currentDate)->format('d');

for($day = 1; $day <= $lastDay; $day++) {
    $date = $currentDate->format('Y-m') . '-' . sprintf('%02d', $day);
    $registry = $registries[$date];
    
    if(isPastWorkday($date)) $workDay++;

    if($registry) {
        $sumOfWorkedTime += $registry->worked_time;
        array_push($report, $registry);
    } else {
        array_push($report, new WorkingHours([
            'work_date' => $date,
            'worked_time' => 0
        ]));
    }
}

$expectedTime = $workDay * DAILY_TIME; // DAILY_TIME is the value of a day's work (8 hours)
$balance = getTimeStringFromSeconds(abs($sumOfWorkedTime - $expectedTime));
// Multiplied by the amount of days, meaning it will see how many hours are expected
$sign = ($sumOfWorkedTime >= $expectedTime) ? '+' : '-';


loadTemplateView('monthly_report', [
     'report' => $report,
     'sumOfWorkedTime' => $sumOfWorkedTime,
     'balance' => "{$sign}{$balance}"
]);