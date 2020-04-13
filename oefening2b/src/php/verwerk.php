<?php
if (!ctype_digit($_GET['day']) || !ctype_digit($_GET['month']) || !ctype_digit($_GET['year'])) {
    header("Location: invoer.html");
}
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
$date = Date::make($day, $month, $year);
$date->printMonth();

print("</br>" . 'Changed month: ');

$dateChange = $date->changeMonth(5);
$dateChange->printMonth();
?>

</body>
</html>
