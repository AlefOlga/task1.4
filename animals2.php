<?php

$continents = include './continents.php';

$name = [];

foreach ($continents as $continent => $animals) {
    foreach ($animals as $animal) {
        if(strpos ($animal, ' ')) {
            $name[] = [
                'continent'=>$continent,
                'animal'=>$animal,
            ];
        }
    }
}

$first = [];
$second = [];

foreach ($name as $animal) {
    $x = explode(' ', $animal['animal']);
    $first[] = [
        'continent'=>$animal['continent'],
        'animal'=>$x[0],
    ];
    $second[] = $x[1];
}

shuffle($second);

$fantastic = [];
while (count($first)) {
    $fA = array_shift($first);
    $fantastic[$fA['continent']][] = $fA['animal'] . ' ' . array_shift($second);
}

foreach ($fantastic as $continent => $animals) {
    echo PHP_EOL.'<h2>'.$continent.'</h2>' . PHP_EOL;
    echo implode(',<br>'.PHP_EOL, $animals);
}
