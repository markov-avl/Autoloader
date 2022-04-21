<?php

namespace Entertainment\GamingConsoles;

abstract class GamingConsole
{
    protected string $name;
    protected string $store;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function play(\Entertainment\Game $game): void
    {
        if ($this->isTheGameCompatible($game))
        {
            echo "Running " . $game->getName() . "...";
        }
        else
        {
            echo
                "Can not run " . $game->getName() . ".\n" .
                "Check game compatibility or try to find " . $game->getName() . " in the " . $this->store . ".";
        }
    }

    protected function isTheGameCompatible(\Entertainment\Game $game): bool
    {
        return str_starts_with($this->name, $game->getGamingConsole()) ||
            str_starts_with($game->getGamingConsole(), $this->name);
    }
}