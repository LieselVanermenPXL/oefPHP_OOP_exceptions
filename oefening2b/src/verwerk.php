<?php
use Util\Date;
use Util\DateException;
require_once 'Util/DateException.php';
require_once 'Util/Date.php';

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
try {
    $date = Date::make($day, $month, $year);
    $date->printMonth();

    print("</br>" . 'Changed month: ');
    $dateChange = $date->changeMonth(5);
    $dateChange->printMonth();
}
catch (DateException $dateException) {
    print($dateException->getMessage() . "<br/>");
}
?>
</body>
</html>
