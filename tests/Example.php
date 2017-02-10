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
        $calculate = new Calculate();
        $calculate->one = $one;
        $calculate->two = $two;

        return $calculate->sum();
    }

    public function getSameArray($array)
    {
        return $array;
    }
}