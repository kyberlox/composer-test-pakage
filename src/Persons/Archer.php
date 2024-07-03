<?php
namespace Kyberlox\ComposerTest\psn\arch;

include_once "Person.php";

use \Kyberlox\ComposerTest\psn\Person as Person;

class Archer extends Person
{
    function aim(){
        //случайное попадание
        $this->damge_points = 0;
        if (rand(0, 1) == 1)
        {
            $this->damge_points = $this->gun->bonus * rand(5, 10);
            echo "$this->name (лучник) успел прицелиться и нанёс $this->damge_points урона!" . PHP_EOL;
        }
        else{
            echo "$this->name (лучник) не успел прицелиться!" . PHP_EOL;
        };
    }
};
?>