<?php

namespace PokePHP\Src\Objects\Abstract;

abstract class Ability {
    public $name;

    abstract public function deployModifier();
    abstract public function attackModifier();
    abstract public function hitModifier();
    abstract public function endOfTurnModifier();
}
