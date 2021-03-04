<?php

$a= true;
$b= false;

//variabel $c akan bernilai FALSE

$c = $a && $b;
printf ("%b && %b = %b", $a,$b,$c);
echo "<hr>";

//Variabel c akan bernilai TRUE
$c = $a || $b;
printf ("%b && %b = %b", $a,$b,$c);
echo "<hr>";

//variabel $c akan bernilai FALSE
$c = !$a;
printf ("!%b = %b", $a,$c);
echo "<hr>";

?>