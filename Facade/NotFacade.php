<?php
class Computer
{
    public function getElectricShock()
    {
        echo "Ouch!";
    }

    public function makeSound()
    {
        echo "Beep beep!";
    }

    public function showLoadingScreen()
    {
        echo "Loading..";
    }

    public function bam()
    {
        echo "Ready to be used!";
    }

    public function closeEverything()
    {
        echo "Bup bup bup buzzzz!";
    }

    public function sooth()
    {
        echo "Zzzzz";
    }

    public function pullCurrent()
    {
        echo "Haaah!";
    }
}

$computer = new Computer();
//Start the computer
$computer->getElectricShock();
$computer->makeSound();
$computer->showLoadingScreen();
$computer->bam();

//Turnoff the computer
$computer->closeEverything();
$computer->pullCurrent();
$computer->sooth();