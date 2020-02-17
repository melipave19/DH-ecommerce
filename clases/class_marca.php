<?php
class Marca {
  private $id;
  private $nombre;
  private $descripcion;

  public function __construct($id=null, $nombre=null, $descripcion=null){
    $this->id= $id;
    $this->nombre=$nombre;
    $this->descripcion=$descripcion;
  }

  public function getMarcas($connect){
    $query = "SELECT * FROM marca";
    $stmt = $connect->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

} ?>
