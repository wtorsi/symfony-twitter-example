<?php
declare(strict_types=1);

namespace User\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    public function getRoles(): array
    {
        // TODO: Implement getRoles() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getUserIdentifier(): string
    {
        // TODO: Implement getUserIdentifier() method.
    }
}