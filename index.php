<?php

require __DIR__.'/vendor/autoload.php';

$factory = new MathLib\Factory\OperationFactory();

try {
    $addOperation = $factory->getOperation ('add');
    echo $addOperation->execute (2,3).PHP_EOL;

    $mulOperation = $factory->getOperation ('mul');
    echo $mulOperation->execute (2,3).PHP_EOL;

    $mulOperation = $factory->getOperation ('plop');
    echo $mulOperation->execute (2,3).PHP_EOL;
}catch (Exception $e) {
    echo $e->getMessage();
}