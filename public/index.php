<?php

function tryToPlay(\Entertainment\GamingConsoles\GamingConsole $gamingConsole, \Entertainment\Game $game): void
{
    echo "Trying to play " . $game->getName() . " on " . $gamingConsole->getName() . ":";
    $gamingConsole->play($game);
}


spl_autoload_register(static function (string $className) {
    $root = "Entertainment\\";
    if (str_starts_with($className, $root))
    {
        $filePath = substr($className, strlen($root));
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR .
            str_replace("\\", DIRECTORY_SEPARATOR, $filePath) . ".php";
    }
});

// Consoles
$xbox360 = new \Entertainment\GamingConsoles\Xbox("Xbox 360");
$xboxOneS = new \Entertainment\GamingConsoles\Xbox("Xbox One S");
$playStation5 = new \Entertainment\GamingConsoles\PlayStation("PlayStation 5");

// Games
$gta5 = new \Entertainment\Game("Grand Theft Auto V", "action-adventure", "Xbox One");
$eldenRing = new \Entertainment\Game("Elden Ring", "action/RPG", "PlayStation 5");

tryToPlay($xbox360, $gta5);
tryToPlay($xboxOneS, $gta5);
tryToPlay($xboxOneS, $eldenRing);
tryToPlay($playStation5, $eldenRing);