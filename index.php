<?php
include "person.php";
include "Engineer.php";

$man = new Person("adam");
$man->walk();
$man->greet();

unset($man);
$man2 = new Person("micheal");
$man2-> greet();

$man3 = new Engineer("TOmson");
$man3->greet();
?>