<?php

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year'  => '2015'
];

$toyota = [
    'model' => 'Corolla',
    'speed' => 110,
    'doors' => 4,
    'year'  => '2012'
];

$opel = [
    'model' => 'Astra',
    'speed' => 100,
    'doors' => 5,
    'year'  => '2007'
];

$cars = [
    'BMW'       => $bmw,
    'Toyota'    => $toyota,
    'Opel'      => $opel
];

foreach ($cars as $car => $attr) {
    echo "Машина: $car<br />";
    echo "Модель: " . $attr['model'] . ", Скорость: " . $attr['speed'] .
         ", Дверей: " . $attr['doors'] . ", Год: " . $attr['year'] . "<br /><br />";
}
