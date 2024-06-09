<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
   //    $valor =[
    //   'test'=> 'ejemplo',
      //  'id' => 1
   //    ];

     //  return$this ->response ->setJSON($valor);
    $this->db= \Config\Database :: connect();
    $query = $this->db->query('SELECT NOMBRES, SEXO, EDAD, PESO FROM `datos_usuario`.`datos`limit 10;');
   
    $valor=($query->getResult());
    var_dump($valor);
    return $this-> response-> setJSON ($valor);
       //return view('welcome_message');
    }
}
