<?php

interface Operation {
    public function execute($a, $b);
};

class MulOperation implements Operation{
    public function execute($a, $b){
        return $a * $b;
    }
};

class AddOperation implements Operation{
    public function execute($a, $b){
        return $a + $b;
    }
};

class OperationFactory{
    public function getOperation($operationName){
        $operation = null;
        if ($operationName === 'add'){
            $operation = new AddOperation();
        }
        elseif ($operationName === 'mul'){
            $operation = new MulOperation();
        }
        return $operation;
    }
};

$factory = new OperationFactory();
$addOperation = $factory->getOperation ('add');
echo $addOperation->execute (2,3).PHP_EOL;

$mulOperation = $factory->getOperation ('mul');
echo $mulOperation->execute (2,3).PHP_EOL;

$mulOperation = $factory->getOperation ('plop');
echo $mulOperation->execute (2,3).PHP_EOL;