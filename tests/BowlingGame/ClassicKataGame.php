<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 08.02.2017
 * Time: 16:44
 */

namespace Tests\BowlingGame;


class ClassicKataGame
{
    /**
     * @var array
     */
    private $roll;

    /**
     * ClassicKataGame constructor.
     */
    public function __construct()
    {
    }

    public function roll($int)
    {
        $this->roll[] = $int;
    }

    public function getScore()
    {
        $result = 0;

        $firstInFrameIndex = 0;
        for($frame = 1; $frame <= 10; $frame++)
        {
            if($this->isStrike($firstInFrameIndex)) {
                $result = $result + $this->getFirstInFramePins($firstInFrameIndex);
                $result = $result + $this->getNextFirstPins($firstInFrameIndex);
                $result = $result + $this->getNextSecondPins($firstInFrameIndex);
                $firstInFrameIndex++;
            } elseif($this->isSpare($firstInFrameIndex)) {
                $result = $result + $this->getFirstInFramePins($firstInFrameIndex);
                $result = $result + $this->getNextFirstPins($firstInFrameIndex);
                $result = $result + $this->getNextSecondPins($firstInFrameIndex);
                $firstInFrameIndex += 2;
            } else {
                $result = $result + $this->getFirstInFramePins($firstInFrameIndex);
                $result = $result + $this->getNextFirstPins($firstInFrameIndex);
                $firstInFrameIndex += 2;
            }

        }

        return $result;
    }

    /**
     * @param $firstInFrameIndex
     * @return bool
     */
    public function isStrike($firstInFrameIndex)
    {
        return $this->getFirstInFramePins($firstInFrameIndex) == 10;
    }

    /**
     * @param $firstInFrameIndex
     * @return mixed
     */
    public function getNextFirstPins($firstInFrameIndex)
    {
        return $this->roll[$firstInFrameIndex + 1];
    }

    /**
     * @param $firstInFrameIndex
     * @return mixed
     */
    public function getNextSecondPins($firstInFrameIndex)
    {
        return $this->roll[$firstInFrameIndex + 2];
    }

    /**
     * @param $firstInFrameIndex
     * @return mixed
     */
    public function getFirstInFramePins($firstInFrameIndex)
    {
        return $this->roll[$firstInFrameIndex];
    }

    /**
     * @param $firstInFrameIndex
     * @return bool
     */
    public function isSpare($firstInFrameIndex)
    {
        return $this->getFirstInFramePins($firstInFrameIndex) + $this->getNextFirstPins($firstInFrameIndex) == 10;
    }
}