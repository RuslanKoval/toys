<?php

namespace toysBoys;

class Radio extends Cars{

    protected $battery;
    protected $maxSpeed;
    protected $distance;

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getBattery()
    {
        return $this->battery;
    }

    /**
     * @param mixed $battery
     */
    public function setBattery($battery)
    {
        $this->battery = $battery;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function __toString()
    {
        $data = parent::__toString();
        $data .= '<li> Batery: ' . $this->getBattery() . "</li>\n";
        $data .= '<li> Max speed: ' . $this->getMaxSpeed() . "</li>\n";
        $data .= '<li> Distance: ' . $this->getDistance() . "</li>\n";

        return $data;
    }
}