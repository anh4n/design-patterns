<?php

namespace Devices;

/**
 * Class Light
 * @package Devices
 */
class Light
{
    /**
     * @var string
     */
    protected $location;
    /**
     * @var int
     */
    protected $level;

    /**
     * @param string $location
     */
    public function __construct($location)
    {
        $this->location = $location;
    }

    /**
     *
     */
    public function on()
    {
        $this->level = 200;
        echo "Light is on\n";
    }

    /**
     *
     */
    public function off()
    {
        $this->level = 0;
        echo "Light is off\n";
    }

    /**
     * @param int $level
     */
    public function dim($level)
    {
        $this->level = $level;

        if ($level == 0) {
            $this->off();
        } else {
            echo "Light is dimmed to $level %\n";
        }
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

}
