<?php
declare(strict_types=1);

namespace App\Action;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/{routing<.+>?}', name: 'app', methods: ['GET'], priority: -255)]
class IndexAction extends \AbstractAction
{
    public function __invoke(): Response
    {
        return new Response();
    }
}