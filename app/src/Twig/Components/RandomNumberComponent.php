<?php

namespace App\Twig\Components;

use Exception;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('random_number')]
final class RandomNumberComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public int $max = 1000;

    public function getRandomNumber(): int
    {
        try {
            return random_int(0, $this->max);
        } catch (Exception) {
        }

        return 0;
    }
}
