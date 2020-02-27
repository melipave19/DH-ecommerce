<?php
require 'footer.php';

// Conexion con la Base de Datos DER
include("pdo.php");
// Clase Equipo
include_once 'clases/class_equipo.php';
include_once 'clases/class_categoria.php';
include_once 'clases/class_marca.php';
include_once 'clases/class_proveedor.php';

$categoria = new Categoria();
$marca = new Marca();
$proveedor = new Proveedor();
$equipo = new Equipo();

if(isset($_POST["submit"]))
{
  if(!isset($_POST["check"])){
    $check=0;
  }
  else {
    $check=1;
  }
  $equipoNuevo = new Equipo(null,$_POST["nombre"],$_POST["descripcion"],$_POST["categoria"],$_POST["marca"],$_POST["precio"],$_POST["tamanioPantalla"],$_POST["discoDuro"],$_POST["stockDisponible"],$_POST["proveedor"],$check,1);
  $equipoNuevo->create($baseDatos);
}
if(isset($_POST["submitMod"])){
  if(!isset($_POST["check"])){
    $check=0;
  }
  else {
    $check=1;
  }
  $equipoModificado = new Equipo($_POST["idEquipo"],$_POST["nombre"],$_POST["descripcion"],$_POST["categoria"],$_POST["marca"],$_POST["precio"],$_POST["tamanioPantalla"],$_POST["discoDuro"],$_POST["stockDisponible"],$_POST["proveedor"],$check,1);
  $equipoModificado->modificar($baseDatos,$equipoModificado);
}

if(isset($_GET["accion"]))
{
  if($_GET["accion"] == "darBaja"){
    $equipo->darBaja($baseDatos,$_GET["idEquipo"]);
  }
  if($_GET["accion"] == "darAlta"){
    $equipo->darAlta($baseDatos,$_GET["idEquipo"]);
  }
  if($_GET["accion"] == "modificar")
  {
    $idEquipo = $_GET["idEquipo"];
    $equipoAModificar = $equipo->buscar($baseDatos, $idEquipo);
  }

}

//Obtener todos los Equipos, Categorias, Marcas, Proveedor
$categorias = $categoria->getCategorias($baseDatos);
$marcas = $marca->getMarcas($baseDatos);
$proveedores = $proveedor->getProveedores($baseDatos);

$equipos = $equipo->getEquipos($baseDatos);


 ?>
<style>
 body{
   background-color:  #ecf4fd ;
 }
 .navbar-default{
   background-color: $bgDefault;
   border-color: $bgHighlight;
 }
     /* Remove the navbar's default rounded borders and increase the bottom margin */
     .navbar {
       margin-bottom: 50px;
       border-radius: 0;
     }

     /* Remove the jumbotron's default bottom margin */
      .jumbotron {
       margin-bottom: 0;
     }

     /* Add a gray background color and some padding to the footer */
     footer {
       background-color: #f2f2f2;
       padding: 25px;
     }

     th {
       background-color: #a8a3a3;
       color: black;
     }
     th, td {
  border-bottom: 1px solid #ddd;
}

</style>
<h2>Listado de Equipos</h2>
<a href="./ecommerce-listProducts.php?accion=agregar">Agregar equipo</a>
<?php
    if(isset($_GET["accion"]) && $_GET["accion"]=="agregar"){ ?>
    <form class="" action="./ecommerce-listProducts.php" method="post">
    <label for="">Nombre del equipo:</label>
    <input type="text" name="nombre" value="">
    <label for="">Descripción:</label>
    <input type="text" name="descripcion" value="">
    <label for="">Categoria:</label>
    <select name="categoria">
            <option value="0">Seleccione:</option>
            <?php
            foreach ($categorias as $key => $value) { ?>
                <option value= "<?php echo $value['idCategoria']?>"> <?php echo $value['nombreCategoria']?></option>;
            <?php } ?>
    </select>
    <label for="">Marca:</label>
    <select name="marca">
            <option value="0">Seleccione:</option>
            <?php
            foreach ($marcas as $key => $value) { ?>
                <option value= "<?php echo $value["idMarca"]?>"> <?php echo $value['nombreMarca']?></option>;
            <?php } ?>
    </select>
    <label for="">Precio: </label>
    <input type="text" name="precio" value="">
    <label for="">Tamaño de la pantalla (pulgadas):</label>
    <input type="text" name="tamanioPantalla" value="">
    <label for="">Disco Duro (GB):</label>
    <input type="text" name="discoDuro" value="">
    <label for="">Stock:</label>
    <input type="text" name="stockDisponible" value="">
    <label for="">Proveedor</label>
    <select name="proveedor">
            <option value="0">Seleccione:</option>
            <?php
              foreach ($proveedores as $key => $value) { ?>
                <option value= "<?php echo $value['idProveedor']?>"> <?php echo $value["razonSocial"]?></option>;
            <?php } ?>
    </select>
    <label for="">Está en oferta?</label>
    <input type="checkbox" name="check" value="1">Si<br>
    <input type="submit" name="submit" value="Agregar">
  	</form>
    <br>;
  <?php } ?>

  <?php
      if(isset($_GET["accion"]) && $_GET["accion"]=="modificar") { ?>
      <form class="" action="./ecommerce-listProducts.php" method="post">
      <label for="">ID del equipo:</label>
      <input type="text" name="idEquipo" value="<?php echo $equipoAModificar["idEquipo"]?>" readonly>
      <label for="">Nombre del equipo:</label>
      <input type="text" name="nombre" value="<?php echo $equipoAModificar["nombreEquipo"]?>">
      <label for="">Descripción:</label>
      <input type="text" name="descripcion" value="<?php echo $equipoAModificar["descripcion"]?>">
      <label for="">Categoria:</label>
      <select name="categoria">
              <option value="0">Seleccione:</option>
              <?php
              foreach ($categorias as $key => $value) { ?>
                  <option value= "<?php echo $value['idCategoria']?>" <?php if($equipoAModificar['categoria']===$value['idCategoria']) { ?> selected="selected" <?php } ?>><?php echo $value['nombreCategoria']?></option>;
              <?php } ?>
      </select>
      <label for="">Marca:</label>
      <select name="marca">
              <option value="0">Seleccione:</option>
              <?php
              foreach ($marcas as $key => $value) { ?>
                  <option value= "<?php echo $value["idMarca"]?>" <?php if($equipoAModificar['marca']===$value['idMarca']) { ?> selected="selected" <?php } ?>> <?php echo $value['nombreMarca']?></option>;
              <?php } ?>
      </select>
      <label for="">Precio: </label>
      <input type="text" name="precio" value="<?php echo $equipoAModificar["precio"]?>">
      <label for="">Tamaño de la pantalla (pulgadas):</label>
      <input type="text" name="tamanioPantalla" value="<?php echo $equipoAModificar["tamañoPantalla"]?>">
      <label for="">Disco Duro (GB):</label>
      <input type="text" name="discoDuro" value="<?php echo $equipoAModificar["discoDuro"]?>">
      <label for="">Stock:</label>
      <input type="text" name="stockDisponible" value="<?php echo $equipoAModificar["stockDisponible"]?>">
      <label for="">Proveedor</label>
      <select name="proveedor">
              <option value="0">Seleccione:</option>
              <?php
                foreach ($proveedores as $key => $value) { ?>
                  <option value= "<?php echo $value['idProveedor']?>" <?php if($equipoAModificar['proveedor']===$value['idProveedor']) { ?> selected="selected" <?php } ?>> <?php echo $value["razonSocial"]?></option>;
              <?php } ?>
      </select>
      <label for="">Está en oferta?</label>
      <input type="checkbox" name="check" value="1" <?php if($equipoAModificar['habilitado']==1) {?>checked<?php } ?>>Si<br>
      <input type="submit" name="submitMod" value="Realizar cambio">
    	</form>
      <br>;
    <?php } ?>

 <table class="table">
   <thead>
     <tr>

       <th scope="col">ID</th>
       <th scope="col">Nombre</th>
       <th scope="col">Descripcion</th>
       <th scope="col">Categoria</th>
       <th scope="col">Marca</th>
       <th scope="col">Precio</th>
       <th scope="col">Pantalla(")</th>
       <th scope="col">Disco Duro</th>
       <th scope="col">En stock</th>
       <th scope="col">Proveedor</th>
       <th scope="col">En oferta?</th>
       <th scope="col">Habilitado</th>
       <th scope="col">Acciones</th>
       <th scope="col"></th>
     </tr>
   </thead>
   <tbody>
     <?php foreach ($equipos as $key) { ?>
     <tr>
       <td><?=$key["idEquipo"]?></td>
       <td><?=$key["nombreEquipo"]?></td>
       <td><?=$key["descripcion"]?></td>
       <td><?php foreach ($categorias as $keyCat => $valueCat) { if($key["categoria"] == $valueCat["idCategoria"]) { echo $valueCat["nombreCategoria"]; } }?></td>
       <td><?php foreach ($marcas as $keyMar => $valueMar) { if($key["marca"] == $valueMar["idMarca"]) { echo $valueMar["nombreMarca"]; } }?></td>
       <td><?=$key["precio"]?></td>
       <td><?=$key["tamañoPantalla"]?></td>
       <td><?=$key["discoDuro"]?></td>
       <td><?=$key["stockDisponible"]?></td>
       <td><?php foreach ($proveedores as $keyProv => $valueProv) { if($key["proveedor"] == $valueProv["idProveedor"]) { echo $valueProv["razonSocial"]; } }?></td>
       <td><?php if($key["estaEnOferta"]==1) { echo "Si";} else { echo "No";}?></td>
       <td><?php if($key["habilitado"]==1) { echo "Si";} else { echo "No";}?></td>
       <td> <a href="./ecommerce-listProducts.php?accion=modificar&idEquipo=<?=$key["idEquipo"]?>">Modificar</a></td>
       <td> <?php if($key["habilitado"] == 0) { ?>
         <a href="./ecommerce-listProducts.php?accion=darAlta&idEquipo=<?=$key["idEquipo"]?>">Dar alta</a>
       <?php } else { ?>
        <a href="./ecommerce-listProducts.php?accion=darBaja&idEquipo=<?=$key["idEquipo"]?>">Dar baja</a> <?php } ?>
      </td>
    </tr>
  <?php } ?>

   </tbody>
 </table>

 <div class="container-fixed">
     <!--- Footer ------------>
     <footer class="footer-bs">
         <div class="row">
         	<div class="col-md-3 footer-brand animated fadeInLeft">
             	<h2>E-commerce</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                 <p>© 2019 BS3 UI Kit, All rights reserved</p>
             </div>
         	<div class="col-md-4 footer-nav animated fadeInUp">
             	<h4>Menu —</h4>
             	<div class="col-md-6">
                     <ul class="pages">
                         <li><a href="ecommerce-index.php">Home</a></li>
                         <li><a href="ecommerce-products.php">Products</a></li>
                         <li><a href="ecommerce-index.php#faqs">FAQs</a></li>
                         <li><a href="ecommerce-index.php#contact">Contact</a></li>
                     </ul>
                 </div>
             	<div class="col-md-6">
                     <ul class="list">
                         <li><a href="ecommerce-index.php#signIn">Sign in</a></li>
                         <li><a href="ecommerce-index.php#logIn">Log in</a></li>
                         <li><a href="ecommerce-profile.php">Your account</a></li>
                         <li><a href="ecommerce-cart.php">Cart</a></li>
                     </ul>
                 </div>
             </div>
         	<div class="col-md-2 footer-social animated fadeInDown">
             	<h4>Follow Us</h4>
             	<ul>
                 	<li><a href="https://www.facebook.com/">Facebook</a></li>
                 	<li><a href="https://twitter.com/">Twitter</a></li>
                 	<li><a href="https://www.instagram.com/">Instagram</a></li>
                 </ul>
             </div>
         	<div class="col-md-3 footer-ns animated fadeInRight">
             	<h4>Newsletter</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                 <p>
                     <div class="input-group">
                       <input type="text" class="form-control" placeholder="Search for...">
                       <span class="input-group-btn">
                         <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                       </span>
                     </div><!-- /input-group -->
                  </p>
             </div>
         </div>
     </footer>
     <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="">EquipoFoo</a></p></section>

 </div>

 </body>
 </html>
