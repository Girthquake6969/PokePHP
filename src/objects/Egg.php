<?php

namespace PokePHP\Src\Objects;

use PokePHP\Src\Objects\Abstract\Monster;

class Egg {
    // matching gen 9
    public const STEPS_PER_CYCLE = 128;
    public Monster $species;
    public int $stepsTaken;
    public int $cyclesRequired;
}