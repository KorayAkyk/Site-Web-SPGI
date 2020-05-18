<?php


require 'index.php';

//require 'Graphics_Charts/index.php';
$obj = new testPerf();
$obj->WebCon();

//afficher le résultat
if (isset($_POST['PC'])) {
    echo '<td bgcolor="#CCCCCC">' . $obj->NomPcSQL;}
var_dump($obj->NomPcSQL);

?>