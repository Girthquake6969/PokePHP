<?php

namespace PokePHP\Src\Objects\Abstract;

abstract class Weather {
    public string $name;
    public int $activeTurns = 5;

    abstract public function statModifier();
    abstract public function damageModifier();
    abstract public function endOfTurnModifier();
}
