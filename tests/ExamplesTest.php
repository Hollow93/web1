<?php

namespace Tests;

use PHPUnit_Framework_TestCase;
use Tests\Example as MyExample;

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
        $this->assertEquals(1568, $this->getExample()->sum(1567,1));
        $this->assertEquals(5, $this->getExample()->sum(5,0));
    }

    public function testArrayAsMethodParameter()
    {
        $this->assertEquals([1,2,3], $this->getExample()->getSameArray([1,2,3]));
    }

    public function testAddToArray()
    {
        $array = [];
        $array[] = 'first';
        $array[] = 'second';

        $this->assertEquals(['first', 'second'], $array);
    }


    /**
     * @return MyExample
     */
    public function getExample()
    {
        return new MyExample();
    }

}