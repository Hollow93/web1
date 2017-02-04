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
        $object = new Example();
        $this->assertNotNull($object);
    }
}