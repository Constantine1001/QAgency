<?php

namespace App\Model;

/**
 * Class Circle
 * @package App\Model
 */
class Circle
{
    /**
     * @var string
     */
    private $type = "circle";

    /**
     * @var int $radius
     */
    private $radius; // with PHP 7.4 we can switch to typed properties

    /**
     * @var float $surface
     */
    private $surface;

    /**
     * @var float $circumference
     */
    private $circumference;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getCircumference()
    {
        return $this->circumference;
    }

    /**
     * @param mixed $circumference
     */
    public function setCircumference($circumference): void
    {
        $this->circumference = $circumference;
    }

    /**
     * @return mixed
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param mixed $surface
     */
    public function setSurface($surface): void
    {
        $this->surface = $surface;
    }

    public function calculateSurface()
    {
        $this->surface = round(pow($this->getRadius(), 2) * M_PI, 2);
    }

    public function calculateCircumference()
    {
        $this->circumference = round(2 * $this->getRadius() * M_PI,2);
    }
}