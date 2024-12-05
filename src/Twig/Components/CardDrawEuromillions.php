<?php

namespace App\Twig\Components;

use App\Entity\DrawEuromillions;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CardDrawEuromillions
{
    public DrawEuromillions $drawEuromillions;
}
