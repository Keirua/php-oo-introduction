<?php

abstract class Operation {
    public function execute($a, $b){
        echo "code from abstract class".PHP_EOL;
    }
};

class MulOperation extends Operation{
    public function execute($a, $b){
        parent::execute($a, $b);
        return $a * $b;
    }
};

class AddOperation extends Operation{
    public function execute($a, $b){
        parent::execute($a, $b);
        return $a + $b;
    }
};

$addOperation = new AddOperation ();
echo $addOperation->execute (2,3).PHP_EOL;

$mulOperation = new MulOperation ();
echo $mulOperation->execute (2,3).PHP_EOL;