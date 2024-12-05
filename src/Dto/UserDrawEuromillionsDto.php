<?php

namespace App\Dto;

use App\Entity\UserDrawEuromillions;
use DateTimeImmutable;

class UserDrawEuromillionsDto
{
    private ?int $id;

    private array $balls;

    private array $stars;

    private DateTimeImmutable $createdAt;

    public function __construct(UserDrawEuromillions $userDrawEuromillions)
    {
        $this->id = $userDrawEuromillions->getId();
        $this->balls = $userDrawEuromillions->getBalls();
        $this->stars = $userDrawEuromillions->getStars();
        $this->createdAt = $userDrawEuromillions->getCreatedAt();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getBalls(): array
    {
        return $this->balls;
    }

    public function getStars(): array
    {
        return $this->stars;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}