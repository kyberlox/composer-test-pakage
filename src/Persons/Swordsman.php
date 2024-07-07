<?php
namespace Kyberlox\ComposerTest\psn\sword;

include_once "Person.php";

use \Kyberlox\ComposerTest\psn\Person as Person;

class Swordsman extends Person
{
    function jump(){
        //теряется качество доспеха
        $this->armor->bonus = $this->armor->bonus * 0.75 >= 1 ? $this->armor->bonus * 0.75 : 0;

        $this->damge_points = $this->gun->bonus * 1.5;

        echo "$this->name (мечник) совершил рывок и нанес $this->damge_points урона!" . PHP_EOL;
    }
};
?>