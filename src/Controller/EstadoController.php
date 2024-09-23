<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class EstadoController extends AbstractController
{
    #[Route('/up', name: 'app_estado_comprobar')]
    public function comprobarEstado(): JsonResponse
    {
        return  new JsonResponse([
            'app' => true
        ]);
    }
}
