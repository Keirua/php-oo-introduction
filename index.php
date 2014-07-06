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

        if ($operation == null){
            throw new LogicException ("Le type demandé n'existe pas".PHP_EOL);
        }
        return $operation;
    }
};

$factory = new OperationFactory();
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