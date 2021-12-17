<?php

namespace App\Controller;

use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class KipController
{
    #[Route('/', name: 'api_get_ip', methods: ['GET'])]
    public function kipAction(Request $request): JsonResponse {
        $data = array(
            'dateTime' => new DateTime(),
            'ips' => $request->getClientIps(),
            'host' => $request->getHost()
        );
        return new JsonResponse($data);
    }
}