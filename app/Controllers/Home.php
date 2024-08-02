<?php

namespace App\Controllers;

class Home extends BaseController
{
public function index()
 {
$this->db= \Config\Database :: connect();
$query = $this->db->query('SELECT NOMBRES, SEXO, EDAD, PESO FROM `datos_usuario`.`datos`limit 10;');
$valor=($query->getResult());
var_dump($valor);
return $this-> response-> setJSON ($valor);
 }


public function inserta($NombreN,$CedulaN,$CiudadN,$TelefonoN)
{
$this->db= \Config\Database :: connect();
$query = $this->db->query("INSERT INTO `datos_usuario`.`nuevo_dato`
 (NombreN, CedulaN, CiudadN, TelefonoN)
VALUES
(<{$NombreN: }>,
<{$CedulaN: }>,
<{$CiudadN: }>,
<{$TelefonoN: }>);
SELECT * FROM datos_usuario.nuevo_dato;");
$valor=($query->getResult());
return $this-> response-> setJSON ($valor);
}


public function editar($NombreN,$CedulaN,$CiudadN,$TelefonoN)
{
$this->db= \Config\Database :: connect();
$query = $this->db->query("UPDATE `datos_usuario`.`nuevo_dato`
SET`NombreN` = <{$NombreN: }>,`CedulaN` = <{$CedulaN: }>,`CiudadN` = <{$CiudadN: }>,
`TelefonoN` = <{$TelefonoN: }>
WHERE `$NombreN` = <{expr}>;");
$valor=($query->getResult());
return $this-> response-> setJSON ($valor);
}


public function eliminar($TelefonoN)
{
$this->db= \Config\Database :: connect();
$query = $this->db->query
try {
   $builder = $this->db->table(`nuevo_dato`);
   $builder->where(`TelefonoN`,$TelefonoN);
   $builder->delete();
$valor=($query->getResult());
return $this-> response-> setJSON ($valor);
}
}