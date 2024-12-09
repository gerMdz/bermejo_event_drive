<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WebhooksController extends AbstractController
{
    #[Route('/webhooks', name: 'webhooks', methods: ['POST'])]
    public function __invoke(): Response
    {
        return new Response('', 204);
    }
}
