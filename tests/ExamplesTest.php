<?php

namespace Tests;

use PHPUnit_Framework_TestCase;

/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 03.02.2017
 * Time: 16:09
 */
class ExamplesTest extends PHPUnit_Framework_TestCase
{
    public function testCreateObjectExample()
    {
        $this->assertNotNull($this->getExample());
    }

    public function testReadFromPublicProperty()
    {
        $this->assertEquals('data', $this->getExample()->property);
    }

    public function testWriteToPublicProperty()
    {
        $object = $this->getExample();
        $object->property = 'new data';

        $this->assertEquals('new data', $object->property);
    }

    public function testCallMethodThatReturnPropertyValue()
    {
        $this->assertEquals('data', $this->getExample()->getProperty());
    }

    public function testAssertEqualsExample()
    {
        $this->assertEquals(1,1);
    }

    public function testCallAnotherObjectFromExampleObject()
    {
        $this->assertEquals(4, $this->getExample()->sum(2,2));
        $this->assertEquals(6, $this->getExample()->sum(1,5));
    }

    /**
     * @return Example
     */
    public function getExample()
    {
        return new Example();
    }

}