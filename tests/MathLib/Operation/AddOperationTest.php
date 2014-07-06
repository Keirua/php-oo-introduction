<?php

class AddOperationTest extends PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        // Initialisation
        $addOperation = new MathLib\Operation\AddOperation;

        // Realisation
        $result = $addOperation->execute(3, 4);

        // Verification
        $this->assertEquals(7, $result);
    }
}