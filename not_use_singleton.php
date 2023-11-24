<?php
class President
{
    private string $name = "null";

    public function doSomething() {
        return "Doing something in NonSingletonExample";
    }

    public function updateName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$president1 = new President();
$president1->updateName('123'); 
$president2 = new President();
echo $president1->getName();
echo '<br>';
echo $president2->getName();
echo '<br>';

var_dump($president1 === $president2);