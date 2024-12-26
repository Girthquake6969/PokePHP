<?php

namespace PoekPHP\Src\Objects\Recipes;

use PokePHP\Src\Objects\Abstract\Ability;
use PokePHP\Src\Objects\Abstract\Item;

class MonsterRecipe {
    public int $id;
    public string $name;
    public string $primaryType;
    public ?string $secondaryType;

    // base stats
    public int $baseAttack;
    public int $baseDefense;
    public int $baseSpecialAttack;
    public int $baseSpecialDefense;
    public int $baseSpeed;
    public int $baseHitPoints;

    public Ability $primaryAbility;
    public ?Ability $secondaryAbility;
    public ?Ability $hiddenAbility;
}