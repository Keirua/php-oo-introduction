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

$addOperation = new AddOperation ();
echo $addOperation->execute (2,3).PHP_EOL;

$mulOperation = new MulOperation ();
echo $mulOperation->execute (2,3).PHP_EOL;