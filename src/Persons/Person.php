<?php
namespace Kyberlox\ComposerTest\psn;

include_once __DIR__."/../Subjects/Subject.php";

use \Kyberlox\ComposerTest\subj\Subject as Subject;

class Person
{
    public $name, $health, $gun, $armor, $damge_points, $protection_points;

    function __construct($name="", $health =100, $gun=new Subject(), $armor=new Subject(), $damge_points=0, $protection_points=0)
    {
        $this -> name = $name;
        $this -> health = $health;
        $this -> gun = $gun;
        $this -> armor = $armor;
        $this -> damge_points = $damge_points;
        $this -> protection_points = $protection_points;
    }

    function attack()
    {   
        $this->damge_points = $this->gun->bonus;
        $gun_name = $this->gun->name;
        echo "$this->name использует $gun_name и наносит $this->damge_points урона!" . PHP_EOL;
    }

    function protect()
    {   
        $this->protection_points = $this->armor->bonus;

        echo "$this->name блокирует $this->protection_points урона!" . PHP_EOL;
    }
};
?>