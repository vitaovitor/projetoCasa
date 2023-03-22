<?php
namespace App;

use PDO;
use PDOException;

class Connection {


    public function getDb()
    {
        # informaçoes do banco

        $host       =     "localhost";
        $user       =     "root";
        $pass       =     "root";
        $db_name    =     "mvc_49";
        $db_driver  =     "mysql";
        $charset    =     "utf8";

        $nome_sistema   =   "MVC DA TURMA M49";
        $email          = "vitorribeiro20177@gmail.com";


        try{
            $conn = new PDO (
                $db_driver . ":host=" . $host . ";dbname" . $db_name . "," .
             $user, $pass);   

             return $conn;
            
        }catch(PDOException $error) {
            //Vamos tratar o erro caso exista em outro momento 
            // por exemplo podemos enviar um email para o adm caso
            //um erro aconteça na conexao
            die("Erro de conexao: " . $error->getMessage());
        }
    }



}


?>