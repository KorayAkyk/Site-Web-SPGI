<?php


//namespace App;
use \PDO;


class Database
{
    public $db_name;
    public $db_user;
    public $db_pass;
    public $db_host;
    public $pdo;

    public function __construct($db_name,$db_user='supervisionpc',$db_pass='UserGescom',$db_host='UserGescom')
    {
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
        $this->db_host=$db_host;
    }
    

    public function getPDO()
    {

    if($this->pdo===null){
        $dsn="pgsql:host=192.33.50.100; dbname=supervisionpc";
        $user="UserP3G";
        $password="UserGescom";
        $Pdo = new PDO($dsn,$user,$password);
        
        $option =
        [
            PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
        ];
        $this->Pdo=$Pdo;
    

    }
    return $this->pdo;    
}       

public function prepare($statement)
{
    $req=$this->getPDO()->prepare($statement);
    
     $datas=$req-> fetchAll(PDO::FETCH_ASSOC);
     return $datas;
     //$executeIsOk=$Pdo->execute();
     //$contact=$PdoStat->
}

}




?>