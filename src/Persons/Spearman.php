<?php
namespace Kyberlox\ComposerTest\psn\spear;

include_once "Person.php";

use \Kyberlox\ComposerTest\psn\Person as Person;

class Spearman extends Person
{
    function cast(){
        //может промазать
        $this->damge_points = 0;
        if (rand(0, 2) >= 1)
        {
            $this->damge_points = $this->gun->bonus * 2;
            echo "$this->name (копейщик) бросил копьё и нанёс $this->damge_points урона!" . PHP_EOL;
        }
        else{
            echo "$this->name (копейщик) промазал!" . PHP_EOL;
        };

        
    }
};
?>