<?php
namespace MathLib\Operation;
class MulOperation implements Operation{
    public function execute($a, $b){
        return $a * $b;
    }
};