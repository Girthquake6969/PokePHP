<?php

namespace PokePHP\Src\Objects;

use PoekPHP\Src\Objects\Recipes\MonsterRecipe;

class Monster {
    public MonsterRecipe $baseMonster;

    // Effort Values (0-252)
    public int $attackEffortValues;
    public int $defeseEffortValues;
    public int $specialAttackEffortValues;
    public int $specialDefenseEffortValues;
    public int $speedEffortValues;
    public int $hitPointsEffortValues;

    // Individual values (0-31)
    public int $attackIndividualValues;
    public int $defeseIndividualValues;
    public int $specialAttackIndividualValues;
    public int $specialDefenseIndividualValues;
    public int $speedIndividualValues;
    public int $hitPointsIndividualValues;

    // Specifics
    public int $level;
    public ?string $nickname;
    public ?Item $heldItem;
    public ?bool $gender;
    public bool $isShiny;
    public ?Status $status;
    // TODO: consider adding the other stats for quick access
    public int $totalHitPoints;
    public int $currentHitPoints;
}