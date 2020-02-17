<?php
class Proveedor{
  private $id;
  private $razonSocial;
  private $direccion;
  private $localidad;
  private $contacto;


public function __construct($id=null, $razonSocial=null, $direccion=null, $localidad=null, $contacto=null)
{
  $this->id = $id;
  $this->razonSocial = $razonSocial;
  $this->direccion = $direccion;
  $this->localidad = $localidad;
  $this->contacto = $contacto;
}

public function getProveedores($connect)
{
  $query = "SELECT * FROM proveedor";
  $stmt = $connect->prepare($query);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
 ?>
