<?php
date_default_timezone_set("Europe/Madrid");

$monthNames = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

if (!isset($_REQUEST["mes"])) $_REQUEST["mes"] = date("n");
if (!isset($_REQUEST["anio"])) $_REQUEST["anio"] = date("Y");

$cMonth = $_REQUEST["mes"];
$cYear = $_REQUEST["anio"];

$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth - 1;
$next_month = $cMonth + 1;

if ($prev_month == 0) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13) {
    $next_month = 1;
    $next_year = $cYear + 1;
}

$today = date("j");
$currentMonth = date("n");
$currentYear = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario</title>
    <style>
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        .calendar-header {
            grid-column: span 7;
            background-color: #999;
            color: white;
            padding: 10px;
        }
        .calendar-nav {
            grid-column: span 7;
            display: flex;
            justify-content: space-between;
            background-color: #999;
            color: white;
            padding: 10px;
        }
        .calendar-day {
            background-color: #f0f0f0;
            padding: 10px;
        }
        .calendar-empty {
            background-color: #fff;
        }
        .calendar-today {
            background-color: #ff0;
        }
        .calendar-sunday {
            background-color: #f99;
        }
    </style>
</head>
<body>
    <div class="calendar">
        <div class="calendar-nav">
            <a href="<?php echo $_SERVER["PHP_SELF"] . "?mes=" . $prev_month . "&anio=" . $prev_year; ?>" style="color:#FFFFFF">Anterior</a>
            <a href="<?php echo $_SERVER["PHP_SELF"] . "?mes=" . $next_month . "&anio=" . $next_year; ?>" style="color:#FFFFFF">Siguiente</a>
        </div>
        <div class="calendar-header"><?php echo $monthNames[$cMonth - 1] . ' ' . $cYear; ?></div>
        <div class="calendar-day"><strong>L</strong></div>
        <div class="calendar-day"><strong>M</strong></div>
        <div class="calendar-day"><strong>X</strong></div>
        <div class="calendar-day"><strong>J</strong></div>
        <div class="calendar-day"><strong>V</strong></div>
        <div class="calendar-day"><strong>S</strong></div>
        <div class="calendar-day"><strong>D</strong></div>
        <?php
        $timestamp = mktime(0, 0, 0, $cMonth, 1, $cYear);
        $maxday = date("t", $timestamp);
        $thismonth = getdate($timestamp);
        $startday = $thismonth['wday'] - 1;
        if ($startday < 0) $startday = 6;

        for ($i = 0; $i < ($maxday + $startday); $i++) {
            if ($i < $startday) {
                echo "<div class='calendar-empty'></div>";
            } else {
                $day = $i - $startday + 1;
                $class = "calendar-day";
                if ($day == $today && $cMonth == $currentMonth && $cYear == $currentYear) {
                    $class = "calendar-day calendar-today";
                } elseif (($i % 7) == 6) {
                    $class = "calendar-day calendar-sunday";
                }
                echo "<div class='$class'>$day</div>";
            }
        }
        ?>
    </div>
</body>
</html>
