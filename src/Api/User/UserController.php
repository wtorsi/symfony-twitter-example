<?php
declare(strict_types=1);

namespace Api\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
class UserController
{
    #[Route('/me', methods: 'GET')]
    public function me(): Response
    {
        return new Response();
    }
}