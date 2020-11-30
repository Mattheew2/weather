<?php
require("class.php");

$weather = new OpenWeather;
$current_weather = $weather->getMaxTemperature();

?>

<html>
<body>
    <h1>Aktualna temperatura to: <?php echo $current_weather; ?></h1>
</body>



</html>