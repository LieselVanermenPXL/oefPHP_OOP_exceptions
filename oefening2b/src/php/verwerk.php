<?php
require_once '../Util/Date.php';

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$date = Date::make($day, $month, $year);
$date->printMonth();

print("</br>" . 'Changed month: ');

$dateChange = $date->changeMonth(5);
$dateChange->printMonth();