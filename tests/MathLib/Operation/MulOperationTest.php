<?php

class MulOperationTest extends PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        // Initialisation
        $mulOperation = new MathLib\Operation\MulOperation;

        // Realisation
        $result = $mulOperation->execute(3, 4);

        // Verification
        $this->assertEquals(12, $result);
    }
}