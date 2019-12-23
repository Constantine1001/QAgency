<?php

namespace App\Service;

use App\Model\Circle;
use App\Model\Triangle;

class GeometryCalculator
{
    public function calculateSumOfSurfaces(Circle $circle, Triangle $triangle)
    {
        return $circle->getSurface() + $triangle->getSurface();
    }

    public function calculateSumOfCircumferences(Circle $circle, Triangle $triangle)
    {
        return $circle->getCircumference() + $triangle->getCircumference();
    }
}