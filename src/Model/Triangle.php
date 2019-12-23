<?php

namespace App\Model;

/**
 * Class Triangle
 * @package App\Model
 */
class Triangle
{
    /**
     * @var string
     */
    private $type = "triangle";

    /**
     * @var int $a
     */
    private $a;

    /**
     * @var int $b
     */
    private $b;

    /**
     * @var int $c
     */
    private $c;

    /**
     * @var float|int $surface
     */
    private $surface;

    /**
     * @var float|int $circumference
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
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param int $a
     */
    public function setA($a): void
    {
        $this->a = $a;
    }

    /**
     * @return int
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param int $b
     */
    public function setB($b): void
    {
        $this->b = $b;
    }

    /**
     * @return int
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param int $c
     */
    public function setC($c): void
    {
        $this->c = $c;
    }

    /**
     * @return float|int
     */
    public function getCircumference()
    {
        return $this->circumference;
    }

    /**
     * @param float|int $circumference
     */
    public function setCircumference($circumference): void
    {
        $this->circumference = $circumference;
    }

    /**
     * @return float|int
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param float|int $surface
     */
    public function setSurface($surface): void
    {
        $this->surface = $surface;
    }

    public function calculateSurface()
    {
        $this->surface = round(($this->a + $this->b + $this->c) / 2, 2);
    }

    public function calculateCircumference()
    {
        $this->circumference = round($this->a + $this->b + $this->c, 2);
    }
}