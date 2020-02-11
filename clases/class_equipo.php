<?php
class Equipo{
  private $id;
  private $nombre;
  private $descripcion;
  private $categoria;
  private $marca;
  private $precio;
  private $tamanioPantalla;
  private $discoDuro;
  private $stockDisponible;
  private $proveedor;
  private $estaEnOferta;
  private $habilitado;
  private $nombre_tabla = "equipo";

  public function __construct($id=null, $nombre=null, $descripcion=null,$categoria=null,$marca=null,$precio=null,$tamanioPantalla=null,$discoDuro=null,$stockDisponible=null,$proveedor=null,$estaEnOferta=null,$habilitado=null){
    $this->id=$id;
    $this->nombre=$nombre;
    $this->descripcion=$descripcion;
    $this->categoria=$categoria;
    $this->marca=$marca;
    $this->precio=$precio;
    $this->tamanioPantalla=$tamanioPantalla;
    $this->discoDuro=$discoDuro;
    $this->stockDisponible=$stockDisponible;
    $this->proveedor=$proveedor;
    $this->estaEnOferta=$estaEnOferta;
    $this->habilitado=$habilitado;
  }

  public function create($connect)
  {
    $query = $connect->prepare("
    insert into der.equipo
    values (null,:nombre,:descripcion,:categoria,:marca,:precio,:tamanioPantalla,:discoDuro,:stockDisponible,:proveedor,:estaEnOferta,:habilitado);");
    $query->bindValue(':nombre',$this->nombre);
    $query->bindValue(':descripcion',$this->descripcion);
    $query->bindValue(':categoria',$this->categoria);
    $query->bindValue(':marca',$this->marca);
    $query->bindValue(':precio',$this->precio);
    $query->bindValue(':tamanioPantalla',$this->tamanioPantalla);
    $query->bindValue(':discoDuro',$this->discoDuro);
    $query->bindValue(':stockDisponible',$this->stockDisponible);
    $query->bindValue(':proveedor',$this->proveedor);
    $query->bindValue('estaEnOferta',$this->estaEnOferta);
    $query->bindValue('habilitado',$this->$habilitado);
    $query->execute();
  }

  public function getEquipos($connect){
    $query = "select * from equipo";
    $stmt= $connect->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }







}


 ?>
