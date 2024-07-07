<?php
namespace Kyberlox\ComposerTest\subj;

class Subject{
    public $name, $bonus;

    function __construct($name="", $bonus = 0)
    {
        $this -> name = $name;
        $this -> bonus = $bonus;
    }
};
?>