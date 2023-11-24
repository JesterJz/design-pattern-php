<?php
class President
{
    private static $instance;
    private string $name = "null";

    private function __construct()
    {
        // Hide the constructor
    }

    public static function getInstance(): President
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function updateName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$president1 = President::getInstance();
$president1->updateName('123'); 
$president2 = President::getInstance();
echo $president1->getName();
echo '<br>';
echo $president2->getName();
echo '<br>';
var_dump($president1 === $president2);
