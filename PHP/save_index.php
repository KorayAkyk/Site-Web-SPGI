<?php
    //$WebVision=new testPerf();
    //require 'class/Autoloader.php';
    //Autoloader::autoload($class_name);
   // $GO_WEB=new testPerf($_POST);
//include_once 'test.php';
  //global $DATA_BABY;
  //include_once 'test.php';
    //require 'test.php';

    //include 'Bdd_Connection.php'; 
    //include 'Class/test.php'; //utilisation variable globale
   // include 'Class/cara.php'; //lien vers l'affichage
    require 'Class/cara.php';

  //$data=new Database($db_name);
  //$data->pdo;
  //$data1=new myDataBaby();
  //$data1->cegid_start;
  //var_dump($data);//info BDD
  //var_dump($data1);
  //$dataFromTest=new myDataBaby($datasALL,$Nom_PC,$cpu_usage, $max_ram,$free_ram,$used_ram,$free_ram_percent,$used_ram_percent,$cegid_start,$cegid_stop,$date_cegid);
  //var_dump($dataFromTest);

/*
 $obj->WebCon();
 $obj->$Nom_PC;
$obj->Nom_PC;
 var_dump($Nom_PC);
echo($cegid_start);
*/
$obj=new testPerf();
$obj->WebCon();

/*
echo '<td bgcolor="#CCCCCC">'.$obj->Nom_PC.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$obj->cpu_usage.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$obj->max_ram.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'. $obj->free_ram.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$obj->free_ram_percent.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$used_ram_percent.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$cegid_start.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$cegid_stop.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$date_cegid.'</td>'.'<br>';
echo '<td bgcolor="#CCCCCC">'.$date_cegid.'</td>'.'<br>';

*/
/*
echo $obj->Nom_PC;
echo $obj->cpu_usage;
echo $obj->max_ram;
echo $obj->free_ram;
echo $obj->used_ram;
echo $obj->free_ram_percent;
echo $obj->used_ram_percent;
echo $obj->cegid_start;
echo $obj->cegid_stop;
echo $obj->date_cegid;
var_dump($obj);
*/



//var_dump($obj->cpu_usage);



 //$obj->WebCon(var_dump($contact['pc_name']));
 
 //   echo $obj->$Nom_PC;
//var_dump($date_cegid);
//$obj=$this->WebCon();
//$this->$cegid_start;
  
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title> Super vision </title>
       <link rel="stylesheet" href="lister.css" />
       <link rel="script" href="lister.js" />
            <body>
              <main role="main">
                <div class="titlebar-container">
                  <div class="titlebar">
                    <h1 class="title"><p> Super Vision Gardette</p></h1>
                    <h1>Base de données</h1>
                      <label for="name">Pc Name :  </label>
                      <!--<input type="text"><div class="bouton"> </div>-->
                      <!--
                      <script>
                          function controle()
                              {
                                  var inputbox1 = document.getElementById("input").value;
                                  alert(inputbox1);
                              }    
                      </script>-->
                      <form>
                          <input type="text" id="input" name="input" value="">
                          <input type="button" id="bouton" value="Contrôler" onclick="controle()">
                      </form> 
                      
                      
                      <div class="a1-contain"></div>
                        <ul>
                          
                            <div class="container">                
                                  <div class="item">PC name : <br><br>
                               <?php
                                    echo '<td bgcolor="#CCCCCC">'.$obj->Nom_PC.'</td>'.'<br>';
                               ?>
                               
                                  </div>


                                  <div class="item">cpu usage :<br><br>
                                <?php
                                      //echo($cpu_usage);
                                      echo '<td bgcolor="#CCCCCC">'.$obj->cpu_usage.'</td>'.'<br>';






                                      
                                ?>
                                </div>


                                  <div class="item">max ram :<br><br>
                                <?php
                                      //echo($max_ram);
                                      echo '<td bgcolor="#CCCCCC">'.$obj->max_ram.'</td>'.'<br>';
                                ?>

                                </div>


                                  <div class="item">free ram :<br><br>
                                <?php 
                                        //echo($free_ram);
                                        echo '<td bgcolor="#CCCCCC">'. $obj->free_ram.'</td>'.'<br>';
                                ?>
                                
                                </div>


                                  <div class="item">used ram :<br><br>
                                  <?php 
                                        //echo($used_ram);
                                        echo '<td bgcolor="#CCCCCC">'.$obj->used_ram.'</td>'.'<br>';
                                ?>
                                </div>


                                  <div class="item">free ram percent :<br><br>
                                  <?php 
                                        //echo($free_ram_percent);
                                        echo '<td bgcolor="#CCCCCC">'.$obj->free_ram_percent.'</td>'.'<br>';
                                ?>
                                </div>


                                  <div class="item">used ram percent :<br><br>
                                  <?php 
                                        //echo($used_ram_percent);
                                        echo '<td bgcolor="#CCCCCC">'.$obj->used_ram_percent.'</td>'.'<br>';
                                        
                                ?>
                                </div>
                                


                                  <div class="item">cegid start :<br><br>
                                  <?php 
                                        //echo($cegid_start);
                                        echo '<td bgcolor="#CCCCCC">'.$obj->cegid_start.'</td>'.'<br>';
                                        
                                ?>
                                </div>


                                  <div class="item">cegid stop :<br><br>
                                  <?php 
                                        //echo($cegid_stop);
                                        echo '<td bgcolor="#CCCCCC">'.$obj->cegid_stop.'</td>'.'<br>';
                                ?>
                                </div>


                                  <div class="item">date cegid : <br><br>
                                  <?php 
                                  echo '<td bgcolor="#CCCCCC">'.$obj->date_cegid.'</td>'.'<br>';
                                        //echo($date_cegid);
                                ?></div>


                            </div>
                            <div class="bouton">
                              <p>
                                <a>Execute</a>
                                <a>Last Record</a>
                                <a>Result</a>
                                <a>Ok</a>
                              </p>
                            </div>
             
                            <div class="input">    </div>  
                          </ul>              
                    </div>
                </div>            
              </body>
    </head>
</html>