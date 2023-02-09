<?php
declare(strict_types=1);

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Twig\Environment;

#[AsController()]
abstract class AbstractAction extends AbstractController
{
    public static function getSubscribedServices(): array
    {
        return [
            'twig' => Environment::class,
            'parameter_bag' => ContainerBagInterface::class,
        ];
    }
}