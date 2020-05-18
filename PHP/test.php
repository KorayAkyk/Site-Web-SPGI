<?php

class myDataBaby{

  public $datasALL;
  public $Nom_PC;
  public $cpu_usage;
  public $max_ram;
  public $free_ram;
  public $used_ram;
  public $free_ram_percent;
  public $used_ram_percent;
  public $cegid_start;
  public $cegid_stop;
  public $date_cegid;



public function WEBVISION_oneshot_pc($contact,$Nom_PC){


        //$this=dsn->$dsn;
        $datasALL=121;
        //$this->Nom_PC=$Nom_PC;
        foreach ($contact as $contact) 
          {
           // $Nom_PC1=->$Nom_PC;
          $Nom_PC=$contact['pc_name'];
          $cpu_usage=$contact['cpu_usage'];
          $max_ram=$contact['max_ram'];
          $free_ram=$contact['free_ram'];
          $used_ram=$contact['used_ram'];
          $free_ram_percent=$contact['free_ram_percent'];
          $used_ram_percent=$contact['used_ram_percent'];
          $cegid_start=$contact['cegid_start'];
          $cegid_stop=$contact['cegid_stop'];
          $date_cegid=$contact['date_cegid'];
            
          }
        //var_dump($datasALL) ;
        //$variable.=$contact;
        //echo($variable);
        var_dump($Nom_PC);
        var_dump($cpu_usage);
        var_dump($max_ram);
        var_dump($free_ram);
        var_dump($used_ram);
        var_dump($free_ram_percent);
        var_dump($used_ram_percent);
        var_dump($cegid_start);
        var_dump($cegid_stop);
        var_dump($date_cegid);
  
        return $contact;
        }
    
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
                                          var frame = 20;  
                                          document.write(frame);                                        
                                      </script>
                        
   
                                  </div>
                                  <div class="item">cpu usage :<br><br>
                                  <?php 
                                    //while ()


                                  //$datasALL=new myDataBaby();
                                  
                              
                                  
                                  ?>
                                
                                </div>

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