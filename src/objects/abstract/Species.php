<?php

namespace PokePHP\Src\Objects\Abstract;

/**
 * represents a species of monster with name, base stats, exp yield, and gender percentages (nullable to set ungendered)
 * NOTE: normally would include individual EV yield, but I am massively simplifying the system to make training feel less like a botched circumcision
 */
abstract class Species {
    public string $name;
    public int $dexId;
    public string $dexEntry;
    public ?int $malePercentage;
    public int $expYield;
    public int $evYield;
    
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
