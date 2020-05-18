<?php

//class myDataBaby{
function WEBVISION_oneshot_pc(){

    global $datasALL;
    global $Nom_PC;
    global $cpu_usage;
    global $max_ram;
    global $free_ram;
    global $used_ram;
    global $free_ram_percent;
    global $used_ram_percent;
    global $cegid_start;
    global $cegid_stop;
    global $date_cegid;

    try {

      $option =
      [
          PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
          PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
      ];
        $dsn="pgsql:host=192.33.50.100; dbname=supervisionpc";
        $user="UserP3G";
        $password="UserGescom";
        $objetPdo = new PDO($dsn,$user,$password);
        $PdoStat = $objetPdo->prepare(
        "SELECT pc_name, cpu_usage, max_ram, free_ram, used_ram, free_ram_percent, used_ram_percent, cegid_start, cegid_stop, date_cegid  
        FROM supertest
        ORDER BY supertest_id DESC LIMIT 1
        ;");

        $executeIsOk=$PdoStat->execute();
        $contact=$PdoStat->fetchAll(PDO::FETCH_ASSOC);
        $datasALL=121;
        //$this->Nom_PC=$Nom_PC;
        foreach ($contact as $contact) 
          {
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

          var_dump($Nom_PC);
          $value = array_shift($contact);
         
         var_dump($value);
         print_r($contact);
        //var_dump($datasALL) ;
        //$variable.=$contact;
        //echo($variable);
        /*
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
  */
        return $contact;
      }
      catch(PDOException $pe)
      {
          echo 'ERREUR : '.$pe->getMessage();
      }
  }
//}
WEBVISION_oneshot_pc();
  
  ?>


