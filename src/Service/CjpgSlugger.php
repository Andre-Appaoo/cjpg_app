<?php

namespace App\Service;

use App\Entity\DrawEuromillions;
/*use App\Entity\DrawLoto;*/
use Symfony\Component\String\AbstractString;
use Symfony\Component\String\AbstractUnicodeString;
use Symfony\Component\String\Slugger\SluggerInterface;

class CjpgSlugger
{
    public function __construct(private readonly SluggerInterface $slugger)
    {
    }

    public function drawSlugify(DrawEuromillions/*|DrawLoto*/ $draw): AbstractString|AbstractUnicodeString
    {
        return $this->slugger->slug(
            "tirage du {$draw->getDrawDay()} {$draw->getDrawDate()->format('d-m-Y')}"
        )->lower();
    }
}