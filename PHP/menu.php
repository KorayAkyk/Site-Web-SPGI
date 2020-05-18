<?php

require 'Class/cara.php';
$obj = new testPerf();
$obj->WebCon();

?>



<!DOCTYPE html>
<html lang="Fr">
<head>


<div class="header">
<title>Gardette</title>
<h1>SuperVision Gardette</h1>
<p>Analyse de la BDD</p>
</div>
<meta charset="utf-8">
<!-- <title> Super vision </title> -->
<meta charset="UTF-8">


<!-- _______________________________________________________________________________________________ -->
    <ul class="barre_menu">
        <li><a href="menu.php">Home</a></li>
        <li><a href="Graphics_Charts/index.php">Graphiques</a></li>
        <li><a href="menu3.php">Etat Pc</a></li>
        <li><a href="Pie.php">Labs</a></li>
        <li><a href="#5">Contact</a></li>
    </ul>
<!-- _______________________________________________________________________________________________ -->

<title> Supervision </title>
<!-- _______________________________________________________________________________________________ -->

  <link rel="stylesheet" href="lister.css" />
  <!-- <link rel="script" href="lister.js" /> -->
  <!-- <link rel="stylesheet" href="test.css" /> -->
  <!-- <script src="test.js" charset="utf-8"></script> -->
  <link rel="stylesheet" href="menu.css" />
<!-- _______________________________________________________________________________________________ -->
  <main role="main">
    <div class="titlebar-container">
      <div class="titlebar">

<!-- _______________________________________________________________________________________________ -->

<!-- _______________________________________________________________________________________________ -->

              <table summary="Liste de pc répartie dans différentes zone">
                <caption>
                  SuperVision Gardette (Zone PC)
                </caption>
<!-- _______________________________________________________________________________________________ -->                
                <thead>
                  <tr>
                    <th></th>
                    <th>Zone 1 (critique)</th>
                    <th>Zone 2 (stable)</th>
                    <th>Zone 3 (bon)</th>
                  </tr>
                </thead>       
                <tbody>
<!-- _______________________________________________________________________________________________ -->
                  <tr>
                    <th rowspan="2">Liste PC</th>
                    <td><?php if (isset($_POST['PC'])) { echo  $_POST['PC'];} ?></td>
                    
                    <td><?php if (isset($_POST['PC'])) { echo  $_POST['PC'];} ?></td>

                    <td><?php if (isset($_POST['PC'])) { echo  $_POST['PC'];} ?></td>
                  </tr>
<!-- _______________________________________________________________________________________________ -->
                  <tr>
                    <td><?php if (isset($_POST['PC'])) { echo  $_POST['PC'];} ?></td>
                    <td><?php if (isset($_POST['PC'])) { echo  $_POST['PC'];} ?></td>
                    <td><?php if (isset($_POST['PC'])) { echo  $_POST['PC'];} ?></td>
                  </tr>
<!-- _______________________________________________________________________________________________ -->                  
                </tbody>
              </table>
<!-- _______________________________________________________________________________________________ -->


</head>
<body>
    
</body>
</html>
