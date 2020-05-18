<?php

include_once 'Class/cara.php';
//require 'Checkbox.php';
//require 'Graphics_Charts/index.php';
$obj = new testPerf();
$obj->WebCon();
//afficher le résultat

?>

<!DOCTYPE html>
<html lang="fr">
<div class="header">
<title>Gardette</title>
<h1>SuperVision Gardette</h1>
<!-- <p>Analyse de la BDD</p> -->
</div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <ul class="barre_menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="Graphic.php">Graphiques</a></li>
        <li><a href="EtatPc.php">Etat Pc</a></li>
        <li><a href="extractData.php">Extract</a></li>
        <li><a href="Class/cara.php">Cara php</a></li>
    </ul>
    <link rel="stylesheet" href="..\CSS\lister.css" />
    <script src="Scripts.js" charset="utf-8"></script>
    <link rel="stylesheet" href="..\CSS\menu.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="..\JS\Scripts.js"></script>
    <!-- <link rel="script" href="lister.js" /> -->

</head>
<body>
    
</body>
</html>