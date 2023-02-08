<?php
declare(strict_types=1);

namespace Api\User\Action;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;
use User\Entity\User;

#[AsController]
#[Route('/me', methods: 'GET')]
class MeAction
{
    use \EntityManagerAwareTrait;

    public function __invoke(): Response
    {
        $this->em->getRepository(User::class);

        return new Response();
    }
}