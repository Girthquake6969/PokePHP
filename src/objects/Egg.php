<?php

namespace PokePHP\Src\Objects;

class Egg {
    // matching gen 9
    public const STEPS_PER_CYCLE = 128;
    public int $monsterId;
    public int $stepsTaken;
    public int $cyclesRequired;
}