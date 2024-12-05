<?php

namespace App\Entity;

use App\Repository\DrawEuromillionsRepository;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DrawEuromillionsRepository::class)]
class DrawEuromillions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 8)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 5, max: 8)]
    private ?string $drawDay = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull]
    #[Assert\Date]
    private ?DateTimeInterface $drawDate = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(1)]
    #[Assert\LessThanOrEqual(50)]
    private ?int $ball1 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(1)]
    #[Assert\LessThanOrEqual(50)]
    private ?int $ball2 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(1)]
    #[Assert\LessThanOrEqual(50)]
    private ?int $ball3 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(1)]
    #[Assert\LessThanOrEqual(50)]
    private ?int $ball4 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(1)]
    #[Assert\LessThanOrEqual(50)]
    private ?int $ball5 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(1)]
    #[Assert\LessThanOrEqual(12)]
    private ?int $star1 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\GreaterThanOrEqual(1)]
    #[Assert\LessThanOrEqual(12)]
    private ?int $star2 = null;

    #[ORM\Column(type: 'string', length: 16)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 9, max: 14)]
    private ?string $winningBallsInAscendingOrder = null;

    #[ORM\Column(type: 'string', length: 5)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 5)]
    private ?string $winningStarsInAscendingOrder = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $numberOfWinnersAtRank1InFrance = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $numberOfWinnersAtRank1InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport1 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank2InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank2InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport2 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank3InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank3InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport3 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank4InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank4InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport4 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank5InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank5InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport5 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank6InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank6InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport6 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank7InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank7InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport7 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank8InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank8InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport8 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank9InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank9InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport9 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank10InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank10InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport10 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank11InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank11InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport11 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank12InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank12InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport12 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank13InFrance = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank13InEurope = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport13 = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank1StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport1StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank2StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport2StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank3StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport3StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank4StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport4StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank5StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport5StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank6StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport6StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank7StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport7StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank8StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport8StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank9StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport9StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $numberOfWinnersAtRank10StarPlus = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $rankReport10StarPlus = null;

    #[ORM\Column(length: 30)]
    private ?string $slug = null;

    public function getBalls()
    {
        return [
            $this->getBall1(),
            $this->getBall2(),
            $this->getBall3(),
            $this->getBall4(),
            $this->getBall5()
        ];
    }

    public function getStars()
    {
        return [
            $this->getStar1(),
            $this->getStar2()
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDrawDay(): ?string
    {
        return $this->drawDay;
    }

    public function setDrawDay(string $drawDay): static
    {
        $this->drawDay = $drawDay;

        return $this;
    }

    public function getDrawDate(): ?DateTimeInterface
    {
        return $this->drawDate;
    }

    public function setDrawDate(DateTimeInterface $drawDate): static
    {
        $this->drawDate = $drawDate;

        return $this;
    }

    public function getBall1(): ?int
    {
        return $this->ball1;
    }

    public function setBall1(int $ball1): static
    {
        $this->ball1 = $ball1;

        return $this;
    }

    public function getBall2(): ?int
    {
        return $this->ball2;
    }

    public function setBall2(int $ball2): static
    {
        $this->ball2 = $ball2;

        return $this;
    }

    public function getBall3(): ?int
    {
        return $this->ball3;
    }

    public function setBall3(int $ball3): static
    {
        $this->ball3 = $ball3;

        return $this;
    }

    public function getBall4(): ?int
    {
        return $this->ball4;
    }

    public function setBall4(int $ball4): static
    {
        $this->ball4 = $ball4;

        return $this;
    }

    public function getBall5(): ?int
    {
        return $this->ball5;
    }

    public function setBall5(int $ball5): static
    {
        $this->ball5 = $ball5;

        return $this;
    }

    public function getStar1(): ?int
    {
        return $this->star1;
    }

    public function setStar1(int $star1): static
    {
        $this->star1 = $star1;

        return $this;
    }

    public function getStar2(): ?int
    {
        return $this->star2;
    }

    public function setStar2(int $star2): static
    {
        $this->star2 = $star2;

        return $this;
    }

    public function getWinningBallsInAscendingOrder(): ?string
    {
        return $this->winningBallsInAscendingOrder;
    }

    public function setWinningBallsInAscendingOrder(string $winningBallsInAscendingOrder): static
    {
        $this->winningBallsInAscendingOrder = $winningBallsInAscendingOrder;

        return $this;
    }

    public function getWinningStarsInAscendingOrder(): ?string
    {
        return $this->winningStarsInAscendingOrder;
    }

    public function setWinningStarsInAscendingOrder(string $winningStarsInAscendingOrder): static
    {
        $this->winningStarsInAscendingOrder = $winningStarsInAscendingOrder;

        return $this;
    }

    public function getNumberOfWinnersAtRank1InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank1InFrance;
    }

    public function setNumberOfWinnersAtRank1InFrance(int $numberOfWinnersAtRank1InFrance): static
    {
        $this->numberOfWinnersAtRank1InFrance = $numberOfWinnersAtRank1InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank1InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank1InEurope;
    }

    public function setNumberOfWinnersAtRank1InEurope(int $numberOfWinnersAtRank1InEurope): static
    {
        $this->numberOfWinnersAtRank1InEurope = $numberOfWinnersAtRank1InEurope;

        return $this;
    }

    public function getRankReport1(): ?int
    {
        return $this->rankReport1;
    }

    public function setRankReport1(int $rankReport1): static
    {
        $this->rankReport1 = $rankReport1;

        return $this;
    }

    public function getNumberOfWinnersAtRank2InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank2InFrance;
    }

    public function setNumberOfWinnersAtRank2InFrance(int $numberOfWinnersAtRank2InFrance): static
    {
        $this->numberOfWinnersAtRank2InFrance = $numberOfWinnersAtRank2InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank2InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank2InEurope;
    }

    public function setNumberOfWinnersAtRank2InEurope(int $numberOfWinnersAtRank2InEurope): static
    {
        $this->numberOfWinnersAtRank2InEurope = $numberOfWinnersAtRank2InEurope;

        return $this;
    }

    public function getRankReport2(): ?int
    {
        return $this->rankReport2;
    }

    public function setRankReport2(int $rankReport2): static
    {
        $this->rankReport2 = $rankReport2;

        return $this;
    }

    public function getNumberOfWinnersAtRank3InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank3InFrance;
    }

    public function setNumberOfWinnersAtRank3InFrance(int $numberOfWinnersAtRank3InFrance): static
    {
        $this->numberOfWinnersAtRank3InFrance = $numberOfWinnersAtRank3InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank3InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank3InEurope;
    }

    public function setNumberOfWinnersAtRank3InEurope(int $numberOfWinnersAtRank3InEurope): static
    {
        $this->numberOfWinnersAtRank3InEurope = $numberOfWinnersAtRank3InEurope;

        return $this;
    }

    public function getRankReport3(): ?int
    {
        return $this->rankReport3;
    }

    public function setRankReport3(int $rankReport3): static
    {
        $this->rankReport3 = $rankReport3;

        return $this;
    }

    public function getNumberOfWinnersAtRank4InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank4InFrance;
    }

    public function setNumberOfWinnersAtRank4InFrance(int $numberOfWinnersAtRank4InFrance): static
    {
        $this->numberOfWinnersAtRank4InFrance = $numberOfWinnersAtRank4InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank4InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank4InEurope;
    }

    public function setNumberOfWinnersAtRank4InEurope(int $numberOfWinnersAtRank4InEurope): static
    {
        $this->numberOfWinnersAtRank4InEurope = $numberOfWinnersAtRank4InEurope;

        return $this;
    }

    public function getRankReport4(): ?int
    {
        return $this->rankReport4;
    }

    public function setRankReport4(int $rankReport4): static
    {
        $this->rankReport4 = $rankReport4;

        return $this;
    }

    public function getNumberOfWinnersAtRank5InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank5InFrance;
    }

    public function setNumberOfWinnersAtRank5InFrance(int $numberOfWinnersAtRank5InFrance): static
    {
        $this->numberOfWinnersAtRank5InFrance = $numberOfWinnersAtRank5InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank5InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank5InEurope;
    }

    public function setNumberOfWinnersAtRank5InEurope(int $numberOfWinnersAtRank5InEurope): static
    {
        $this->numberOfWinnersAtRank5InEurope = $numberOfWinnersAtRank5InEurope;

        return $this;
    }

    public function getRankReport5(): ?int
    {
        return $this->rankReport5;
    }

    public function setRankReport5(int $rankReport5): static
    {
        $this->rankReport5 = $rankReport5;

        return $this;
    }

    public function getNumberOfWinnersAtRank6InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank6InFrance;
    }

    public function setNumberOfWinnersAtRank6InFrance(int $numberOfWinnersAtRank6InFrance): static
    {
        $this->numberOfWinnersAtRank6InFrance = $numberOfWinnersAtRank6InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank6InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank6InEurope;
    }

    public function setNumberOfWinnersAtRank6InEurope(int $numberOfWinnersAtRank6InEurope): static
    {
        $this->numberOfWinnersAtRank6InEurope = $numberOfWinnersAtRank6InEurope;

        return $this;
    }

    public function getRankReport6(): ?int
    {
        return $this->rankReport6;
    }

    public function setRankReport6(int $rankReport6): static
    {
        $this->rankReport6 = $rankReport6;

        return $this;
    }

    public function getNumberOfWinnersAtRank7InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank7InFrance;
    }

    public function setNumberOfWinnersAtRank7InFrance(int $numberOfWinnersAtRank7InFrance): static
    {
        $this->numberOfWinnersAtRank7InFrance = $numberOfWinnersAtRank7InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank7InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank7InEurope;
    }

    public function setNumberOfWinnersAtRank7InEurope(int $numberOfWinnersAtRank7InEurope): static
    {
        $this->numberOfWinnersAtRank7InEurope = $numberOfWinnersAtRank7InEurope;

        return $this;
    }

    public function getRankReport7(): ?int
    {
        return $this->rankReport7;
    }

    public function setRankReport7(int $rankReport7): static
    {
        $this->rankReport7 = $rankReport7;

        return $this;
    }

    public function getNumberOfWinnersAtRank8InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank8InFrance;
    }

    public function setNumberOfWinnersAtRank8InFrance(int $numberOfWinnersAtRank8InFrance): static
    {
        $this->numberOfWinnersAtRank8InFrance = $numberOfWinnersAtRank8InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank8InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank8InEurope;
    }

    public function setNumberOfWinnersAtRank8InEurope(int $numberOfWinnersAtRank8InEurope): static
    {
        $this->numberOfWinnersAtRank8InEurope = $numberOfWinnersAtRank8InEurope;

        return $this;
    }

    public function getRankReport8(): ?int
    {
        return $this->rankReport8;
    }

    public function setRankReport8(int $rankReport8): static
    {
        $this->rankReport8 = $rankReport8;

        return $this;
    }

    public function getNumberOfWinnersAtRank9InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank9InFrance;
    }

    public function setNumberOfWinnersAtRank9InFrance(int $numberOfWinnersAtRank9InFrance): static
    {
        $this->numberOfWinnersAtRank9InFrance = $numberOfWinnersAtRank9InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank9InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank9InEurope;
    }

    public function setNumberOfWinnersAtRank9InEurope(int $numberOfWinnersAtRank9InEurope): static
    {
        $this->numberOfWinnersAtRank9InEurope = $numberOfWinnersAtRank9InEurope;

        return $this;
    }

    public function getRankReport9(): ?int
    {
        return $this->rankReport9;
    }

    public function setRankReport9(int $rankReport9): static
    {
        $this->rankReport9 = $rankReport9;

        return $this;
    }

    public function getNumberOfWinnersAtRank10InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank10InFrance;
    }

    public function setNumberOfWinnersAtRank10InFrance(int $numberOfWinnersAtRank10InFrance): static
    {
        $this->numberOfWinnersAtRank10InFrance = $numberOfWinnersAtRank10InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank10InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank10InEurope;
    }

    public function setNumberOfWinnersAtRank10InEurope(int $numberOfWinnersAtRank10InEurope): static
    {
        $this->numberOfWinnersAtRank10InEurope = $numberOfWinnersAtRank10InEurope;

        return $this;
    }

    public function getRankReport10(): ?int
    {
        return $this->rankReport10;
    }

    public function setRankReport10(int $rankReport10): static
    {
        $this->rankReport10 = $rankReport10;

        return $this;
    }

    public function getNumberOfWinnersAtRank11InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank11InFrance;
    }

    public function setNumberOfWinnersAtRank11InFrance(int $numberOfWinnersAtRank11InFrance): static
    {
        $this->numberOfWinnersAtRank11InFrance = $numberOfWinnersAtRank11InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank11InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank11InEurope;
    }

    public function setNumberOfWinnersAtRank11InEurope(int $numberOfWinnersAtRank11InEurope): static
    {
        $this->numberOfWinnersAtRank11InEurope = $numberOfWinnersAtRank11InEurope;

        return $this;
    }

    public function getRankReport11(): ?int
    {
        return $this->rankReport11;
    }

    public function setRankReport11(int $rankReport11): static
    {
        $this->rankReport11 = $rankReport11;

        return $this;
    }

    public function getNumberOfWinnersAtRank12InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank12InFrance;
    }

    public function setNumberOfWinnersAtRank12InFrance(int $numberOfWinnersAtRank12InFrance): static
    {
        $this->numberOfWinnersAtRank12InFrance = $numberOfWinnersAtRank12InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank12InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank12InEurope;
    }

    public function setNumberOfWinnersAtRank12InEurope(int $numberOfWinnersAtRank12InEurope): static
    {
        $this->numberOfWinnersAtRank12InEurope = $numberOfWinnersAtRank12InEurope;

        return $this;
    }

    public function getRankReport12(): ?int
    {
        return $this->rankReport12;
    }

    public function setRankReport12(int $rankReport12): static
    {
        $this->rankReport12 = $rankReport12;

        return $this;
    }

    public function getNumberOfWinnersAtRank13InFrance(): ?int
    {
        return $this->numberOfWinnersAtRank13InFrance;
    }

    public function setNumberOfWinnersAtRank13InFrance(int $numberOfWinnersAtRank13InFrance): static
    {
        $this->numberOfWinnersAtRank13InFrance = $numberOfWinnersAtRank13InFrance;

        return $this;
    }

    public function getNumberOfWinnersAtRank13InEurope(): ?int
    {
        return $this->numberOfWinnersAtRank13InEurope;
    }

    public function setNumberOfWinnersAtRank13InEurope(int $numberOfWinnersAtRank13InEurope): static
    {
        $this->numberOfWinnersAtRank13InEurope = $numberOfWinnersAtRank13InEurope;

        return $this;
    }

    public function getRankReport13(): ?int
    {
        return $this->rankReport13;
    }

    public function setRankReport13(int $rankReport13): static
    {
        $this->rankReport13 = $rankReport13;

        return $this;
    }

    public function getNumberOfWinnersAtRank1StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank1StarPlus;
    }

    public function setNumberOfWinnersAtRank1StarPlus(int $numberOfWinnersAtRank1StarPlus): static
    {
        $this->numberOfWinnersAtRank1StarPlus = $numberOfWinnersAtRank1StarPlus;

        return $this;
    }

    public function getRankReport1StarPlus(): ?int
    {
        return $this->rankReport1StarPlus;
    }

    public function setRankReport1StarPlus(int $rankReport1StarPlus): static
    {
        $this->rankReport1StarPlus = $rankReport1StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank2StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank2StarPlus;
    }

    public function setNumberOfWinnersAtRank2StarPlus(int $numberOfWinnersAtRank2StarPlus): static
    {
        $this->numberOfWinnersAtRank2StarPlus = $numberOfWinnersAtRank2StarPlus;

        return $this;
    }

    public function getRankReport2StarPlus(): ?int
    {
        return $this->rankReport2StarPlus;
    }

    public function setRankReport2StarPlus(int $rankReport2StarPlus): static
    {
        $this->rankReport2StarPlus = $rankReport2StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank3StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank3StarPlus;
    }

    public function setNumberOfWinnersAtRank3StarPlus(int $numberOfWinnersAtRank3StarPlus): static
    {
        $this->numberOfWinnersAtRank3StarPlus = $numberOfWinnersAtRank3StarPlus;

        return $this;
    }

    public function getRankReport3StarPlus(): ?int
    {
        return $this->rankReport3StarPlus;
    }

    public function setRankReport3StarPlus(int $rankReport3StarPlus): static
    {
        $this->rankReport3StarPlus = $rankReport3StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank4StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank4StarPlus;
    }

    public function setNumberOfWinnersAtRank4StarPlus(int $numberOfWinnersAtRank4StarPlus): static
    {
        $this->numberOfWinnersAtRank4StarPlus = $numberOfWinnersAtRank4StarPlus;

        return $this;
    }

    public function getRankReport4StarPlus(): ?int
    {
        return $this->rankReport4StarPlus;
    }

    public function setRankReport4StarPlus(int $rankReport4StarPlus): static
    {
        $this->rankReport4StarPlus = $rankReport4StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank5StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank5StarPlus;
    }

    public function setNumberOfWinnersAtRank5StarPlus(int $numberOfWinnersAtRank5StarPlus): static
    {
        $this->numberOfWinnersAtRank5StarPlus = $numberOfWinnersAtRank5StarPlus;

        return $this;
    }

    public function getRankReport5StarPlus(): ?int
    {
        return $this->rankReport5StarPlus;
    }

    public function setRankReport5StarPlus(int $rankReport5StarPlus): static
    {
        $this->rankReport5StarPlus = $rankReport5StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank6StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank6StarPlus;
    }

    public function setNumberOfWinnersAtRank6StarPlus(int $numberOfWinnersAtRank6StarPlus): static
    {
        $this->numberOfWinnersAtRank6StarPlus = $numberOfWinnersAtRank6StarPlus;

        return $this;
    }

    public function getRankReport6StarPlus(): ?int
    {
        return $this->rankReport6StarPlus;
    }

    public function setRankReport6StarPlus(int $rankReport6StarPlus): static
    {
        $this->rankReport6StarPlus = $rankReport6StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank7StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank7StarPlus;
    }

    public function setNumberOfWinnersAtRank7StarPlus(int $numberOfWinnersAtRank7StarPlus): static
    {
        $this->numberOfWinnersAtRank7StarPlus = $numberOfWinnersAtRank7StarPlus;

        return $this;
    }

    public function getRankReport7StarPlus(): ?int
    {
        return $this->rankReport7StarPlus;
    }

    public function setRankReport7StarPlus(int $rankReport7StarPlus): static
    {
        $this->rankReport7StarPlus = $rankReport7StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank8StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank8StarPlus;
    }

    public function setNumberOfWinnersAtRank8StarPlus(int $numberOfWinnersAtRank8StarPlus): static
    {
        $this->numberOfWinnersAtRank8StarPlus = $numberOfWinnersAtRank8StarPlus;

        return $this;
    }

    public function getRankReport8StarPlus(): ?int
    {
        return $this->rankReport8StarPlus;
    }

    public function setRankReport8StarPlus(int $rankReport8StarPlus): static
    {
        $this->rankReport8StarPlus = $rankReport8StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank9StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank9StarPlus;
    }

    public function setNumberOfWinnersAtRank9StarPlus(int $numberOfWinnersAtRank9StarPlus): static
    {
        $this->numberOfWinnersAtRank9StarPlus = $numberOfWinnersAtRank9StarPlus;

        return $this;
    }

    public function getRankReport9StarPlus(): ?int
    {
        return $this->rankReport9StarPlus;
    }

    public function setRankReport9StarPlus(int $rankReport9StarPlus): static
    {
        $this->rankReport9StarPlus = $rankReport9StarPlus;

        return $this;
    }

    public function getNumberOfWinnersAtRank10StarPlus(): ?int
    {
        return $this->numberOfWinnersAtRank10StarPlus;
    }

    public function setNumberOfWinnersAtRank10StarPlus(int $numberOfWinnersAtRank10StarPlus): static
    {
        $this->numberOfWinnersAtRank10StarPlus = $numberOfWinnersAtRank10StarPlus;

        return $this;
    }

    public function getRankReport10StarPlus(): ?int
    {
        return $this->rankReport10StarPlus;
    }

    public function setRankReport10StarPlus(int $rankReport10StarPlus): static
    {
        $this->rankReport10StarPlus = $rankReport10StarPlus;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }
}
