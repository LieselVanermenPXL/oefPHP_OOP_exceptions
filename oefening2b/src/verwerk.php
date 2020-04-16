<?php
$day = (int)$_POST['day'];
$month = (int)$_POST['month'];
$year = (int)$_POST['year'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk date</title>
</head>
<body>

<?php
require_once '../Util/Date.php';
try {
    $date = Date::make($day, $month, $year);
}
catch (DateException $dateException) {
    print($dateException->getMessage() . "<br/>");
}
$date->printMonth();

print("</br>" . 'Changed month: ');

$dateChange = $date->changeMonth(5);
$dateChange->printMonth();
?>

</body>
</html>
