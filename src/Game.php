<?php

namespace Entertainment;

class Game
{
    protected string $name;
    protected string $genre;
    protected string $gamingConsole;

    public function __construct(string $name, string $genre, string $gamingConsole)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->gamingConsole = $gamingConsole;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getGamingConsole(): string
    {
        return $this->gamingConsole;
    }
}