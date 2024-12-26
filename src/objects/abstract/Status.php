<?php

namespace PokePHP\Src\Objects\Abstract;

abstract class Status {
    public string $name;

    abstract public function globalModifier();

    abstract public function moveModifier();

    abstract public function endOfTurnModifier();
}