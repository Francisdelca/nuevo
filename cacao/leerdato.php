<?php
$file = fopen("sensor.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
$datos = array();
while($linea = fgets($file))
{
    $datos[] = $linea;
}
echo "<div>Temperatura </br>";
echo "<h1>".$datos[0]."°</h1> <br /></div>";

echo "<div>Humedad </br>";
echo "<h1>".$datos[1]."°</h1> <br /></div>";

echo "<div>Ph </br>";
echo "<h1>".$datos[2]."°</h1> <br /></div>";
fclose($file);
?>