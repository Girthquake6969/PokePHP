<?php

namespace PokePHP\Src\Objects\Abstract;

use PokePHP\Src\Objects\Abstract\Move;

abstract class DamageMove extends Move {
    public bool $physical;

    public int $power;
}