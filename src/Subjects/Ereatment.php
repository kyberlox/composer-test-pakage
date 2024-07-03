<?php
namespace Kyberlox\ComposerTest\subj\erea;

include_once "Subject.php";
include_once __DIR__."/../Persons/Person.php";

use \Kyberlox\ComposerTest\subj\Subject as Subject;
use \Kyberlox\ComposerTest\psn\Person as Person;

class Еreatment extends Subject
{

    function __construct($name="", $bonus = 0)
    {
        $this -> name = $name;
        $this -> bonus = $bonus;
    }

    function heal ($patient=new Person())
    {
        $patient->health = $patient->health + $this->bonus;
        echo "$patient->name использовал $this->name и получил $this->bonus очков здровья!" . PHP_EOL;
    }
}
?>