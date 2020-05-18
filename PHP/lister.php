<?php
  //require_once '/Class/cara.php';
  //include_once '/Class/cara.php';
  function WEBVISION_oneshot_pc(){

    require_once 'home.php';
    require_once 'Bdd_Connection.php';
    require_once '/Class/cara.php';

    try {
      $dsn="pgsql:host=192.33.50.100; dbname=supervisionpc";
      $user="UserP3G";
      $password="UserGescom";
      $Pdo = new PDO($dsn,$user,$password);
        
        var_dump($datas);
        $statement=
        $req=$this->getPDO()->prepare($statement);
    
        $datas=$req-> fetchAll(PDO::FETCH_ASSOC);
        return $datas;
      }
      catch(PDOException $pe)
      {
          echo 'ERREUR : '.$pe->getMessage();
      }
      WEBVISION_oneshot_pc();
  }



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
                      <script>
                          function controle()
                              {
                                  var inputbox1 = document.getElementById("input").value;
                                  alert(inputbox1);
                              }    
                      </script>
                      <form>
                          <input type="text" id="input" name="input" value="">
                          <input type="button" id="bouton" value="Contrôler" onclick="controle()">
                      </form> 
                      <div class="a1-contain"></div>
                        <ul>
                          
                            <div class="container">                
                                  <div class="item">PC name : <br><br>
                                      <script>
                                          //var frame = 20;  
                                          //document.write(frame);                                        
                                      </script>
                                      <script>
                                          
                                      </script>
   
                                  </div>
                                  <div class="item">cpu usage :<br><br></div>
                                  <div class="item">max ram :<br></div>
                                  <div class="item">free ram :<br><br></div>
                                  <div class="item">used ram :<br><br></div>
                                  <div class="item">free ram percent :<br><br></div>
                                  <div class="item">used ram percent :<br><br></div>
                                  <div class="item">cegid start :<br><br></div>
                                  <div class="item">cegid stop :<br><br></div>
                                  <div class="item">date cegid : <br><br></div>
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