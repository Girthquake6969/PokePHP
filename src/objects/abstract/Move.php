<?php

namespace PokePHP\Src\Objects\Abstract;

abstract class Move {
    public string $name;
    public string $type;
    public int $defaultPowerPoints;
    public int $maxPowerPoints;

    // if null, treat as a move that never misses
    public ?int $accuracy;
}
