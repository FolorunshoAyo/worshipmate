<?php
// utility_functions.php

function validateDate($date, $format = 'Y-m-d') {
    $dateTime = DateTime::createFromFormat($format, $date);
    return $dateTime && $dateTime->format($format) === $date;
}

function getDaysDifference($date1, $date2)
{
    $dateObj1 = new DateTime($date1);
    $dateObj2 = new DateTime($date2);

    $interval = $dateObj1->diff($dateObj2);

    return $interval->days;
}

function isDayTime(){
    $currentTime = time();

    $currentHour = date("H", $currentTime);

    $dayTimeStart = 6;
    $dayTimeEnd = 18;

    return (($currentHour >= $dayTimeStart) && ($currentHour < $dayTimeEnd));
}
?>