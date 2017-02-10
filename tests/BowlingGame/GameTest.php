<?php
namespace Tests\BowlingGame;

use PHPUnit_Framework_TestCase;

/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 07.02.2017
 * Time: 16:26
 */
class GameTest extends PHPUnit_Framework_TestCase
{
    public function testGame()
    {
        $game = new Game;
        $game->roll = $game->getRoll();
        $this->assertNotNull($game->getRoll());
        $game->resalt = $game->getScore();
        $this->assertNotNull($game->getScore());
        $this->assertEquals($game->getScore(), array_sum($game->getRoll()));
        $this->assertContains(10, $game->getRoll());
        $this->assertEquals(count($game->getRoll()), 20);
        $game->streker = $game->getStreker();
    }
}