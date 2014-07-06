<?php

class AddOperation implements Operation{
    public function execute($a, $b){
        return $a + $b;
    }
};