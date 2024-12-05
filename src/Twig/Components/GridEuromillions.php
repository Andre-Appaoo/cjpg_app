<?php

namespace App\Twig\Components;

use App\Dto\UserDrawEuromillionsDto;
use App\Entity\User;
use App\Entity\UserDrawEuromillions;
use App\Form\UserDrawEuromillionsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class GridEuromillions extends AbstractController
{
    use DefaultActionTrait;
    use ComponentWithFormTrait;

    #[LiveProp]
    public ?UserDrawEuromillions $initialFormData = null;

    #[LiveProp(writable: true)]
    public array $selectedBalls = [];

    #[LiveProp(writable: true)]
    public array $selectedStars = [];

    protected function instantiateForm(): FormInterface
    {
        return $this->createForm(UserDrawEuromillionsType::class, $this->initialFormData);
    }

    public function hasValidationErrors(): bool
    {
        return $this->getForm()->isSubmitted() && !$this->getForm()->isValid();
    }

    #[LiveAction]
    public function save(Request $request, #[CurrentUser] User $user, EntityManagerInterface $entityManagerInterface): RedirectResponse
    {
        $this->submitForm();
        $userDrawEuromillions = $this->getForm()->getData();
        $userDrawEuromillions->setUser($user);

        /*$entityManagerInterface->persist($userDrawEuromillions);
        $entityManagerInterface->flush();*/

        $userSelection = new UserDrawEuromillionsDto($userDrawEuromillions);

        $session = $request->getSession();
        $session->set('userSelection', $userSelection);

        return $this->redirectToRoute('app_grid-results_euromillions');
    }

    #[LiveAction]
    public function toggleBallSelection(#[LiveArg] int $ball): void
    {
        if (in_array($ball, $this->selectedBalls)) {
            $this->selectedBalls = array_diff($this->selectedBalls, [$ball]);
        } elseif (count($this->selectedBalls) < 5) {
            $this->selectedBalls[] = $ball;
        }
    }

    #[LiveAction]
    public function toggleStarSelection(#[LiveArg] int $star): void
    {
        if (in_array($star, $this->selectedStars)) {
            $this->selectedStars = array_diff($this->selectedStars, [$star]);
        } elseif (count($this->selectedStars) < 2) {
            $this->selectedStars[] = $star;
        }
    }

    #[LiveAction]
    public function resetSelection(): void
    {
        $this->selectedBalls = [];
        $this->selectedStars = [];
        $this->resetForm();
    }

    #[LiveAction]
    public function isBallDisabled(#[LiveArg] int $ball): bool
    {
        /*dump([
            'star' => $ball,
            'selectedBalls' => $this->selectedBalls,
            'count' => count($this->selectedBalls),
            'isDisabled' => !in_array($ball, $this->selectedBalls) && count($this->selectedBalls) >= 5,
        ]);*/
        return !in_array($ball, $this->selectedBalls) && count($this->selectedBalls) >= 5;
    }

    #[LiveAction]
    public function isStarDisabled(#[LiveArg] int $star): bool
    {
        return !in_array($star, $this->selectedStars) && count($this->selectedStars) >= 2;
    }
}