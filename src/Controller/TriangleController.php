<?php

namespace App\Controller;

use App\Model\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class TriangleController
 *
 * Example using triangle controller for calculating both surface and circumference for triangle,
 * serializing object and returning it in response as properly formatted json
 *
 * @package App\Controller
 */
class TriangleController extends AbstractController
{

    /**
     * @var Triangle $triangle
     */
    protected $triangle;

    /**
     * TriangleController constructor.
     * @param Triangle $triangle
     */
    public function __construct(Triangle $triangle)
    {
        $this->triangle = $triangle;
    }

    /**
     * @Route("/triangle/{a}/{b}/{c}", methods={"GET"}, requirements={"a"="\d+","b"="\d+","c"="\d+"})
     * @param SerializerInterface $serializer
     * @param int $a
     * @param int $b
     * @param int $c
     * @return Response
     */
    public function calcTriangle(SerializerInterface $serializer, int $a, int $b, int $c): Response
    {
        /** Set required parameters for triangle */
        $this->triangle->setA($a);
        $this->triangle->setB($b);
        $this->triangle->setC($c);
        /** Calculate surface and circumference for triangle */
        $this->triangle->calculateSurface();
        $this->triangle->calculateCircumference();

        /**
         * Here we user symfony's serializer service to serialize triangle object
         * and return it as proper json response
         */
        $jsonContent = $serializer->serialize($this->triangle, 'json');

        return new Response($jsonContent, Response::HTTP_OK, ['content-type' => 'application/json']);
    }
}