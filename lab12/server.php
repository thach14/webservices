<?php 

class server{

    public function __construct(){



    }



    public function getStudentName($idArray){

        return "Teo";

    }

}

$params = array('uri' => 'lab12/server.php');

$server = new SoapServer(NULL, $params);

$server->setClass("server");

$server->handle();


?>