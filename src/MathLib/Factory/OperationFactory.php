<?php
namespace MathLib\Factory;

use MathLib\Operation\AddOperation,
    MathLib\Operation\MulOperation
;

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
            throw new \LogicException ("Le type demandé n'existe pas".PHP_EOL);
        }
        return $operation;
    }
};
