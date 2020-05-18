<?php



class testPerf
{

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

/*
var $Nom_PC;
var $cpu_usage;
var $max_ram;
var $free_ram;
var $used_ram;
var $free_ram_percent;
var $used_ram_percent;
var $cegid_start;
var $cegid_stop;
var $date_cegid;
*/
  public function WebCon()
  
  {

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
        //var $datasALL;

        foreach ($contact as $contact) 
        {
        $this->Nom_PC=$contact['pc_name'];
        $this->cpu_usage=$contact['cpu_usage'];
        $this->max_ram=$contact['max_ram'];
        $this->free_ram=$contact['free_ram'];
        $this->used_ram=$contact['used_ram'];
        $this->free_ram_percent=$contact['free_ram_percent'];
        $this->used_ram_percent=$contact['used_ram_percent'];
        $this->cegid_start=$contact['cegid_start'];
        $this->cegid_stop=$contact['cegid_stop'];
        $this->date_cegid=$contact['date_cegid'];
        
          
        }
        /*
        echo '<td bgcolor="#CCCCCC">'.$contact["pc_name"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["cpu_usage"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["max_ram"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["free_ram"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["used_ram"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["free_ram_percent"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["cegid_start"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["cegid_stop"].'</td>'.'<br>';
        echo '<td bgcolor="#CCCCCC">'.$contact["date_cegid"].'</td>'.'<br>';
        */

        /*
        echo $this->Nom_PC;
        echo $this->cpu_usage;
        echo $this->max_ram;
        echo $this->free_ram;
        echo $this->used_ram;
        echo $this->free_ram_percent;
        echo $this->used_ram_percent;
        echo $this->cegid_start;
        echo $this->cegid_stop;
        echo $this->date_cegid;
        */
        //var_dump($datasALL) ;
      //$variable.=$contact;
      //echo($variable);
      
      $this->cegid_start;
      /*
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
          // on teste la déclaration de nos variables
          if (isset($_POST['PC'])) //&& isset($_POST['fonction'])) 
          {
            // on affiche nos résultats
            echo 'NAME : ' . $_POST['PC']; //. ' et votre fonction est ' . $_POST['fonction'];
            
          }

        }
        catch(PDOException $pe)
        {
            echo 'ERREUR : '.$pe->getMessage();
        }
  



      return $contact;
        
        /*
        //$this->Nom_PC=$Nom_PC;
        foreach ($contact as $contact) 
          {
          $Nom_PC+=var_dump('<p>'.$contact['pc_name'].'</p>');
          $cpu_usage+=var_dump('<p>'.$contact['cpu_usage'].'</p>');
          $max_ram+=var_dump('<p>'.$contact['max_ram'].'</p>');
          $free_ram+=var_dump('<p>'.$contact['free_ram'].'</p>');
          $used_ram+=var_dump('<p>'.$contact['used_ram'].'</p>');
          $free_ram_percent+=var_dump('<p>'.$contact['free_ram_percent'].'</p>');
          $used_ram_percent+=var_dump('<p>'.$contact['used_ram_percent'].'</p>');
          $cegid_start+=var_dump('<p>'.$contact['cegid_start'].'</p>');
          $cegid_stop+=var_dump('<p>'.$contact['cegid_stop'].'</p>');
          $date_cegid+=var_dump('<p>'.$contact['date_cegid'].'</p>');
            
          }
        $variable.=$contact;
        echo($variable);
        return $contact;
      */

      
      }
    
}

//WEBVISION_oneshot_pc($contact);
?>

