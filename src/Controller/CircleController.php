<?php

namespace App\Controller;

use App\Model\Circle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class CircleController
 * 
 * Example using circle controller for calculating both surface and circumference for circle
 * Code is pretty much self explanatory
 *
 * @package App\Controller
 */
class CircleController extends AbstractController
{
    /**
     * @var Circle $circle
     */
    protected $circle;

    /**
     * CircleController constructor.
     * @param Circle $circle
     */
    public function __construct(Circle $circle)
    {
        $this->circle = $circle;
    }

    /**
     * @Route("/circle/{r}", methods={"GET"}, requirements={"r"="\d+"})
     * @param SerializerInterface $serializer
     * @param int $r
     * @return Response
     */
    public function calcCircle(SerializerInterface $serializer, int $r): Response
    {
        /**
         * Here we set radius and based on that value calculate both surface and circumference
         */
        $this->circle->setRadius($r);
        $this->circle->calculateSurface();
        $this->circle->calculateCircumference();

        /**
         * Here we user symfony's serializer service to serialize circle object
         * and return it as proper json response
         */
        $jsonContent = $serializer->serialize($this->circle, 'json');

        return new Response($jsonContent, Response::HTTP_OK, ['content-type' => 'application/json']);
    }
}