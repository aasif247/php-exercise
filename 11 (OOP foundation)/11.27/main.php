<?php
namespace Astronomy;
include "planet.php";
include "earth.php";
$planet = new Planets\Planet(); // unqualified
$planet = new \Astronomy\Planets\Planet(); // qualified
$planet->getName();
