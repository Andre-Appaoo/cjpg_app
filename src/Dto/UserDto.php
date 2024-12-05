<?php

namespace App\Dto;

use App\Entity\User;
use DateTimeImmutable;

class UserDto
{
    private string $email;

    private DateTimeImmutable $createdAt;

    private array $userDrawsEuromillions = [];

    public function __construct(User $user)
    {
        $this->email = $user->getEmail();
        $this->createdAt = $user->getCreatedAt();

        foreach ($user->getUserDrawsEuromillions() as $userDrawEuromillions) {
            $drawDto = new UserDrawEuromillionsDto($userDrawEuromillions);
            $this->userDrawsEuromillions[] = $drawDto;
        }
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUserDrawsEuromillions(): array
    {
        return $this->userDrawsEuromillions;
    }
}