<?php

$continents = include './continents.php';

$name = [];

foreach ($continents as $continent => $animals) {
    foreach ($animals as $animal) {
        if(strpos ($animal, ' ')) {
            $name[] = $animal;
        }
    }
}

$first = [];
$second = [];

foreach ($name as $animal) {
    $x = explode(' ', $animal);
    $first[] = $x[0];
    $second[] = $x[1];
}

shuffle($first);
shuffle($second);

$fantastic = [];
while (count($first)) {
    $fantastic[] = array_pop($first) . ' ' . array_pop($second);
}

foreach ($fantastic as $animal) {
    echo $animal.PHP_EOL;
}
