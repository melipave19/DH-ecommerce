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

  public function getId()
  {
    return $this->id;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function getCategoria()
  {
    return $this->categoria;
  }

  public function getMarca()
  {
    return $this->marca;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function getTamanioPantalla()
  {
    return $this->tamanioPantalla;
  }

  public function getDiscoDuro()
  {
    return $this->discoDuro;
  }

  public function getStockDisponible()
  {
    return $this->stockDisponible;
  }

  public function getProveedor()
  {
    return $this->proveedor;
  }

  public function getEstaEnOferta()
  {
    return $this->estaEnOferta;
  }

  public function getHabilitado()
  {
    return $this->habilitado;
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
    $query->bindValue('habilitado',$this->habilitado);
    $query->execute();
  }

  public function getEquipos($connect){
    $query = "select * from equipo";
    $stmt= $connect->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function darBaja($connect,$idEquipo)
  {
    $sql = "update equipo set habilitado=0 WHERE idEquipo= :idEquipo";
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(':idEquipo', $idEquipo);
    $stmt->execute();
  }

  public function darAlta($connect,$idEquipo)
  {
    $sql = "update equipo set habilitado=1 WHERE idEquipo= :idEquipo";
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(':idEquipo', $idEquipo);
    $stmt->execute();
  }

  public function modificar($connect, $equipo){
            $modificar=$connect->prepare('UPDATE equipo SET nombreEquipo=:nombre, descripcion=:descripcion, categoria=:categoria, marca=:marca, precio=:precio, tamañoPantalla=:tamanioPantalla, discoDuro=:discoDuro, stockDisponible=:stockDisponible, proveedor=:proveedor, estaEnOferta=:estaEnOferta  WHERE idEquipo=:idEquipo');
            $modificar->bindValue(':idEquipo',$equipo->getId());
            $modificar->bindValue(':nombre',$equipo->getNombre());
            $modificar->bindValue(':descripcion',$equipo->getDescripcion());
            $modificar->bindValue(':marca',$equipo->getMarca());
            $modificar->bindValue(':categoria',$equipo->getCategoria());
            $modificar->bindValue(':precio',$equipo->getPrecio());
            $modificar->bindValue(':tamanioPantalla',$equipo->getTamanioPantalla());
            $modificar->bindValue(':discoDuro',$equipo->getDiscoDuro());
            $modificar->bindValue(':stockDisponible',$equipo->getStockDisponible());
            $modificar->bindValue(':proveedor',$equipo->getProveedor());
            $modificar->bindValue(':estaEnOferta',$equipo->getEstaEnOferta());
            $modificar->execute();
}

public function buscar($connect, $idEquipo){
  $buscar = $connect->prepare('select * from equipo WHERE idEquipo = :idEquipo');
  $buscar->bindValue(':idEquipo', $idEquipo);
  $buscar->execute();
  return $buscar->fetch(PDO::FETCH_ASSOC);
}








}


 ?>
