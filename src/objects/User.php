<?php

namespace PokePHP\Src\Objects;

class User {
    public ?int $id = null;

    public array $data = [];

    public function __construct(?int $id) {
        if ($id !== null) {
            $this->loginById($id);
            return;
        }

        $this->loggedIn();
    }

    public function loginById(int $id): void
    {
        $this->id = $id;

        $this->data = [];
    }

    public function loggedIn(): bool
    {
        return false;
    }

    /**
     * TODO
     * @param int $permissionLevel
     * @return bool
     */
    public function hasPermissions(int $permissionLevel): bool
    {
        return false;
    }
}
