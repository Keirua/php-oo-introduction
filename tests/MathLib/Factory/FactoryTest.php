<?php

class FactoryTest extends PHPUnit_Framework_TestCase
{
    public function testGetAddition()
    {
        // Initialisation
        $factory = new MathLib\Factory\OperationFactory;

        // Realisation
        $operation = $factory->getOperation("add");

        // Verification
        $this->assertNotNull($operation);
        $this->assertInstanceOf('MathLib\\Operation\\AddOperation', $operation);
    }

    public function testGetMultiplication()
    {
        // Initialisation
        $factory = new MathLib\Factory\OperationFactory;

        // Realisation
        $operation = $factory->getOperation("mul");

        // Verification
        $this->assertNotNull($operation);
        $this->assertInstanceOf('MathLib\\Operation\\MulOperation', $operation);
    }

    public function testGetUnknown()
    {
        $this->setExpectedException('LogicException');

        // Initialisation
        $factory = new MathLib\Factory\OperationFactory;

        // Realisation
        $operation = $factory->getOperation("plop");

        // Verification
    }
}