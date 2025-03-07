<?php declare(strict_types=1);

namespace Swag\ApiController\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class MyController extends AbstractController
{
    /**
     * @Route("/api/v1/swag/my-api-action", name="api.action.swag.my-api-action", methods={"GET"})
     */
    public function myFirstApi(): JsonResponse
    {
        return new JsonResponse(['You successfully created your first controller route']);
    }
}