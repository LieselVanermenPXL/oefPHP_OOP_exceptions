<?php
require_once '../Util/Date.php';

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$date = new Date($day, $month, $year);
$date->printMonth();

