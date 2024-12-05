<?php

namespace App\Entity;

use App\Repository\UserDrawEuromillionsRepository;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserDrawEuromillionsRepository::class)]
class UserDrawEuromillions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    #[Assert\Count(
        max: 5,
        maxMessage: 'Vous avez sélectionner trop de numéros/boules, maximum 5 !',
    )]
    #[Assert\All([
        new Assert\Type(
            type: 'integer'
        ),
        new Assert\GreaterThanOrEqual(
            value: 1,
        ),
        new Assert\LessThanOrEqual(
            value: 50,
        )
    ])]
    private ?array $balls = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    #[Assert\Count(
        max: 2,
        maxMessage: 'Vous avez sélectionner trop d\' étoiles, maximum 2 !',
    )]
    #[Assert\All([
        new Assert\Type(
            type: 'integer'
        ),
        new Assert\GreaterThanOrEqual(
            value: 1,
        ),
        new Assert\LessThanOrEqual(
            value: 12,
        )
    ])]
    private ?array $stars = null;

    #[ORM\Column]
    private ?DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'userDrawsEuromillions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[Assert\IsTrue(message: 'Vous devez sélectionner au moins 2 numéros !')]
    public function isValid(): bool
    {
        return count($this->balls) + count($this->stars) >= 2;
    }

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }

    public function __toString(): string
    {
        $ballsSelection = implode("-", $this->balls);
        $starsSelection = implode("-", $this->stars);

        return $ballsSelection.'+'.$starsSelection;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBalls(): ?array
    {
        return $this->balls;
    }

    public function setBalls(?array $balls): static
    {
        $this->balls = $balls;

        return $this;
    }

    public function getStars(): ?array
    {
        return $this->stars;
    }

    public function setStars(?array $stars): static
    {
        $this->stars = $stars;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
