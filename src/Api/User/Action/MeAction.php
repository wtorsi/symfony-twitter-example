<?php
declare(strict_types=1);

namespace Api\User\Action;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
#[Route('/me', methods: 'GET')]
class MeAction
{
    public function __invoke(): Response
    {
        return new Response();
    }
}