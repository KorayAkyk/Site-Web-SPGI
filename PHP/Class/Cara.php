<?php
class testPerf
{

  public $NomPcSQL;
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

  public function WebCon()
  {
    try {

      $option =
        [
          PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

      // on teste la déclaration de nos variables
      if (isset($_POST['PC']) && isset($_POST['Date']))
      {
        // on affiche nos résultats
        //echo 'NAME : ' . $_POST['PC']; //. ' et votre fonction est ' . $_POST['fonction'];
        $NomPcSQL = $_POST['PC'];
      
      //var_dump($NomPcSQL);
      
      $dsn = "pgsql:host=192.33.50.100; dbname=supervisionpc";
      $user = "UserP3G";
      $password = "UserGescom";
      $objetPdo = new PDO($dsn, $user, $password);
      $PdoStat = $objetPdo->prepare(
       
          "SELECT * FROM supertest WHERE pc_name='$NomPcSQL' ;");
       //ORDER BY supertest_id DESC LIMIT 1
       //var_dump($PdoStat);
      
        /*'SELECT '. $NomPcSQL .', cpu_usage, max_ram, free_ram, used_ram, free_ram_percent, used_ram_percent, cegid_start, cegid_stop, date_cegid  
        FROM supertest
        ORDER BY supertest_id DESC LIMIT 1
        ;'
      );*/

      //var_dump($PdoStat);


      $executeIsOk = $PdoStat->execute();
      $contact = $PdoStat->fetchAll(PDO::FETCH_ASSOC);
      //var $datasALL;
      $this->Nom_PC = $contact['pc_name'];
      foreach ($contact as $contact) {
        $this->NomPcSQL=$contact[$NomPcSQL];
        
        $this->cpu_usage = $contact['cpu_usage'];
        $this->max_ram = $contact['max_ram'];
        $this->free_ram = $contact['free_ram'];
        $this->used_ram = $contact['used_ram'];
        $this->free_ram_percent = $contact['free_ram_percent'];
        $this->used_ram_percent = $contact['used_ram_percent'];
        $this->cegid_start = $contact['cegid_start'];
        $this->cegid_stop = $contact['cegid_stop'];
        $this->date_cegid = $contact['date_cegid'];
        
      }
      
      //$this->cegid_start;


    }
    //var_dump($contact);
    } catch (PDOException $pe) {
      echo 'ERREUR : ' . $pe->getMessage();
    }
    return $contact;
  }
}
