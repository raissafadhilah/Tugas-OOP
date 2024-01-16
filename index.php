<?php 

require_once "Frog.php";
require_once "Ape.php";

$sheep = new Animal("shaun");
echo "Name : ".$sheep->get_name();
echo "<br/> Legs : ".$sheep->get_legs();
echo "<br/>cold bloded: ".$sheep->get_blood();


$kodok = new Frog("Buduk");
$kodok->getFrogName();
$kodok->getFrogLegs();
$kodok->getFrogBlood();
$kodok->getFrogJump();

$ape = new Ape("Kera sakti");
$ape->getApeName();
$ape->getApeLegs();
$ape->getApeBlood();
$ape->getApeYell();

?>