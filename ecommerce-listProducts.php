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
<div class="form-group row">
  <label for="nombreEquipo" class="col-sm-2 col-form-label">Nombre de Equipo</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="nombreEquipo" value="" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="descripcion"  value="" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
  <div class="col-sm-10">
    <select name="categoria">
            <option value="0">Seleccione:</option>
            <?php
            foreach ($categorias as $key => $value) { ?>
                <option value= "<?php echo $value['id']?>" <?php if($equipoAModificar['id_categoria']===$value['id']) { ?> selected="selected" <?php } ?>><?php echo $value['nombre_categoria']?></option>;
            <?php } ?>
    </select>
  </div>
</div>
<div class="form-group row">
  <label for="marca" class="col-sm-2 col-form-label">Marca</label>
  <div class="col-sm-10">
    <select name="marca">
            <option value="0">Seleccione:</option>
            <?php
            foreach ($marcas as $key => $value) { ?>
                <option value= "<?php echo $value["id"]?>" <?php if($equipoAModificar['id_marca']===$value['id']) { ?> selected="selected" <?php } ?>> <?php echo $value['nombre_marca']?></option>;
            <?php } ?>
    </select>
  </div>
</div>
<div class="form-group row">
  <label for="precio" class="col-sm-2 col-form-label">Precio</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="precio" value="" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="tamanioPantalla" class="col-sm-2 col-form-label">Tamaño de la pantalla (pulgadas):</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="tamanioPantalla" value="" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="discoDuro" class="col-sm-2 col-form-label">Disco duro(GB)</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="discoDuro" value="" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="stockDisponible" class="col-sm-2 col-form-label">Stock</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="stockDisponible" value="" placeholder="">
  </div>
</div>
<div class="form-group row">
  <label for="proveedor" class="col-sm-2 col-form-label">Proveedor</label>
  <div class="col-sm-10">
    <select name="proveedor">
            <option value="0">Seleccione:</option>
            <?php
              foreach ($proveedores as $key => $value) { ?>
                <option value= "<?php echo $value['id']?>" <?php if($equipoAModificar['id_proveedor']===$value['id']) { ?> selected="selected" <?php } ?>> <?php echo $value["razon_social"]?></option>;
            <?php } ?>
    </select>
  </div>
</div>
<div class="form-group row">
  <div class="col-sm-2">Esta en oferta?</div>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="check" value="1">
      <label class="form-check-label" for="check">
        Si
      </label>
      <input type="submit" name="submitMod" value="Realizar cambio">
    </div>
  </div>
</div>
<div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Cargar</button>
  </div>
</div>
</form>
<br>
  <?php } ?>
  <?php
      if(isset($_GET["accion"]) && $_GET["accion"]=="modificar") { ?>
        <form class="" action="./ecommerce-listProducts.php" method="post">
  <div class="form-group row">
    <label for="nombreEquipo" class="col-sm-2 col-form-label">Nombre de Equipo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombreEquipo" value="<?php echo $equipoAModificar["nombre_equipo"]?>" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descripcion"  value="<?php echo $equipoAModificar["descripcion"]?>" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
    <div class="col-sm-10">
      <select name="categoria">
              <option value="0">Seleccione:</option>
              <?php
              foreach ($categorias as $key => $value) { ?>
                  <option value= "<?php echo $value['id']?>" <?php if($equipoAModificar['id_categoria']===$value['id']) { ?> selected="selected" <?php } ?>><?php echo $value['nombre_categoria']?></option>;
              <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="marca" class="col-sm-2 col-form-label">Marca</label>
    <div class="col-sm-10">
      <select name="marca">
              <option value="0">Seleccione:</option>
              <?php
              foreach ($marcas as $key => $value) { ?>
                  <option value= "<?php echo $value["id"]?>" <?php if($equipoAModificar['id_marca']===$value['id']) { ?> selected="selected" <?php } ?>> <?php echo $value['nombre_marca']?></option>;
              <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="precio" class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="precio" value="<?php echo $equipoAModificar["precio"]?>" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="tamanioPantalla" class="col-sm-2 col-form-label">Tamaño de la pantalla (pulgadas):</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tamanioPantalla" value="<?php echo $equipoAModificar["tamaño_pantalla"]?>" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="discoDuro" class="col-sm-2 col-form-label">Disco duro(GB)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="discoDuro" value="<?php echo $equipoAModificar["disco_duro"]?>" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="stockDisponible" class="col-sm-2 col-form-label">Stock</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="stockDisponible" value="<?php echo $equipoAModificar["stock_disponible"]?>" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="proveedor" class="col-sm-2 col-form-label">Proveedor</label>
    <div class="col-sm-10">
      <select name="proveedor">
              <option value="0">Seleccione:</option>
              <?php
                foreach ($proveedores as $key => $value) { ?>
                  <option value= "<?php echo $value['id']?>" <?php if($equipoAModificar['id_proveedor']===$value['id']) { ?> selected="selected" <?php } ?>> <?php echo $value["razon_social"]?></option>;
              <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-2">Esta en oferta?</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="check" value="1" <?php if($equipoAModificar['esta_en_oferta']==1) {?>checked<?php } ?>>
        <input type="submit" name="submitMod" value="Realizar cambio">
        <label class="form-check-label" for="check">
          Si
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Cargar</button>
    </div>
  </div>
</form>
  <br>
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
       <td><?=$key["id"]?></td>
       <td><?=$key["nombre_equipo"]?></td>
       <td><?=$key["descripcion"]?></td>
       <td><?php foreach ($categorias as $keyCat => $valueCat) { if($key["id_categoria"] == $valueCat["id"]) { echo $valueCat["nombre_categoria"]; } }?></td>
       <td><?php foreach ($marcas as $keyMar => $valueMar) { if($key["id_marca"] == $valueMar["id"]) { echo $valueMar["nombre_marca"]; } }?></td>
       <td><?=$key["precio"]?></td>
       <td><?=$key["tamaño_pantalla"]?></td>
       <td><?=$key["disco_duro"]?></td>
       <td><?=$key["stock_disponible"]?></td>
       <td><?php foreach ($proveedores as $keyProv => $valueProv) { if($key["id_proveedor"] == $valueProv["id"]) { echo $valueProv["razon_social"]; } }?></td>
       <td><?php if($key["esta_en_oferta"]==1) { echo "Si";} else { echo "No";}?></td>
       <td><?php if($key["habilitado"]==1) { echo "Si";} else { echo "No";}?></td>
       <td> <a href="./ecommerce-listProducts.php?accion=modificar&idEquipo=<?=$key["id"]?>">Modificar</a></td>
       <td> <?php if($key["habilitado"] == 0) { ?>
         <a href="./ecommerce-listProducts.php?accion=darAlta&idEquipo=<?=$key["id"]?>">Dar alta</a>
       <?php } else { ?>
        <a href="./ecommerce-listProducts.php?accion=darBaja&idEquipo=<?=$key["id"]?>">Dar baja</a> <?php } ?>
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
