<?php

class MulOperation implements Operation{
    public function execute($a, $b){
        return $a * $b;
    }
};