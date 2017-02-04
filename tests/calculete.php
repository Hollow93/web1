<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 04.02.2017
 * Time: 14:01
 */

namespace Tests;

use PHPUnit_Framework_TestCase;


class Calculete extends PHPUnit_Framework_TestCase
{
    public function test2()
    {

        $object = new Tester;
        $this->assertNotNull($object);
    }

    public function testOne()
    {

        $object = new Tester;
        $object->one = '13';
        $this->assertEquals(13, $object->one);
    }

    public function testSumm()
    {
        $object = new Tester;
        $object->one = '13';
        $object->two = '24';
        $this->assertEquals(13, $object->one);
        $this->assertEquals(24, $object->two);
        $object->three = $object->two + $object->one;
        $this->assertEquals(37, $object->three);
    }

    public function testSum()
    {
        $object = new Tester;

        $object->three = $object->two + $object->one;
        $this->assertEquals(37, $object->three);

    }

    public function testSumm()
    {
        $object = new Tester;
        $object->one = $this->getSumme($object->one);
        $object->two = $this->getSumme($object->two);
        $this->assertEquals(13, $object->one);
        $this->assertEquals(24, $object->two);
        $object->three = $object->two + $object->one;
        $this->assertEquals(37, $object->three);
    }

    public function getSumme(){

        $object->one = 13
        $object->two = 24

    }

}
