<?php
$c = 10;

function KeKelvin()
{
    global $c;
    global $k;
    $k = $c + 273.15;
}

function KeFahrenheit()
{
    global $c;
    global $f;
    $f = ($c * 9 / 5) + 32;
}

function KeReamur()
{
    global $c;
    global $r;
    $r = 4 / 5 * $c;
}

KeKelvin();
echo "<p>Celcius ke Kelvin: $k";

KeFahrenheit();
echo "<p>Celcius ke Fahrenheit: $f";

KeReamur();
echo "<p>Celcius ke Reamur: $r";
?>