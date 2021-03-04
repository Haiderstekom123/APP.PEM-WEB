<?php

$operand1=$_REQUEST['operand1'];
$operator=$_REQUEST['operator'];
$operand2=$_REQUEST['operand2'];

$perhitungan = $operand1 . $operator. $operand2;
eval ("\$hasil = $perhitungan;");
echo "hasil perhitungan : <B> $hasil </B>"

?>