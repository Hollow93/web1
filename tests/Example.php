<?php
namespace Tests;

class Example
{
    public $property = 'data';

    public function getProperty()
    {
        return $this->property;
    }

    public function sum($one, $two)
    {
        $calculate = new Tester();
        $calculate->one = $one;
        $calculate->two = $two;

        return $calculate->sum();
    }
}