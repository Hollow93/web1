<?php
namespace Tests\BowlingGame;

/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 07.02.2017
 * Time: 16:48
 */
class Game
{
    public function getScore()
    {
        // if $this->getRoll()[1] = 10 and
        // then
        return array_sum($this->getRoll());
    }

    public function getRoll()
    {
        return [10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
    }

    public function getStreker()
    {

    }
}