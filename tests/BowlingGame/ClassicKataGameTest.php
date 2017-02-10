<?php

namespace Tests\BowlingGame;


class ClassicKataGameTest extends \PHPUnit_Framework_TestCase
{
    public function testGutterGame()
    {
        $game = $this->createGame();

        $this->rollMany($game, 20, 0);

        $this->assertEquals(0, $game->getScore());
    }

    public function testBadGame()
    {
        $game = $this->createGame();
        $this->rollMany($game, 20, 1);

        $this->assertEquals(20, $game->getScore());
    }

    public function testBadGamer()
    {
        $game = $this->createGame();
        $this->rollMany($game, 20, 2);

        $this->assertEquals(40, $game->getScore());
    }

    public function testBearGame()
    {
        $game = $this->createGame();
        $game->roll(10);
        $this->rollMany($game, 18, 2);
        $this->assertEquals(50, $game->getScore());
    }

    public function testOhyennoGame()
    {
        $game = $this->createGame();
        $this->rollMany($game, 12, 10);
        $this->assertEquals(300, $game->getScore());
    }

    public function testSpareGame()
    {
        $game = $this->createGame();
        $game->roll(5);
        $game->roll(5);
        $this->rollMany($game, 18, 1);
        $this->assertEquals(29, $game->getScore());
    }

    public function testWTFGame()
    {
        $game = $this->createGame();
        $game->roll(3);
        $game->roll(5);
        $game->roll(7);
        $game->roll(3);
        $game->roll(10);
        $game->roll(10);
        $game->roll(10);
        $game->roll(0);
        $game->roll(0);
        $game->roll(0);
        $game->roll(4);
        $game->roll(6);
        $game->roll(3);
        $game->roll(2);
        $game->roll(2);
        $game->roll(9);
        $game->roll(1);
        $game->roll(10);
        $this->assertEquals(125, $game->getScore());
    }

    /**
     * @return ClassicKataGame
     */
    public function createGame()
    {
        $game = new ClassicKataGame();
        return $game;
    }

    /**
     * @param ClassicKataGame $game
     * @param $rollCount
     * @param $pins
     */
    public function rollMany($game, $rollCount, $pins)
    {
        for ($i = 1; $i <= $rollCount; $i++) {
            $game->roll($pins);
        }
    }
}