<?php
require 'footer.php';

// Conexion con la Base de Datos DER
include("pdo.php");
// Clase Equipo
include_once 'clases/class_equipo.php';

$equipo = new Equipo();

//Obtener todos los Equipos
$equipos = $equipo->getEquipos($baseDatos);


 ?>
 <form class="agregarEquipo" action="" method="post">
   <input type="text" name="nombre" value="">
   <label for="nombre">Nombre del Equipo</label>
   <input type="text" name="descripcion" value="">
   <label for="descripcion">Descripcion</label>
   <input type="text" name="categoria" value="">
   <label for="categoria">Categoria</label>
   <input type="text" name="marca" value="">
   <label for="marca">Marca</label>
   <input type="text" name="precio" value="">
   <label for="precio">Precio</label>
   <input type="text" name="pantalla" value="">
   <label for="pantalla">Tamaño de pantalla</label>
   <input type="text" name="discoDuro" value="">
   <label for="discoDuro">Disco duro</label>
   <input type="text" name="stock" value="">
   <label for="stock">En stock</label>
   <input type="text" name="proveedor" value="">
   <label for="proveedor">Proveedor</label>
   <input type="checkbox" name="oferta" value="Si">
   <input type="checkbox" name="oferta" value="No">
   <label for="oferta">esta en oferta?</label>
 </form>
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
<h2>Listado de Productos - Edición</h2>
 <table class="table">
   <thead>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Nombre</th>
       <th scope="col">Descripcion</th>
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
    </tr>
   </thead>
   <tbody>
     <?php foreach ($equipos as $key):?>
     <tr>
       <th scope="row">1</th>
       <td><?=$key["idEquipo"]?></td>
       <td><?=$key["nombreEquipo"]?></td>
       <td><?=$key["descripcion"]?></td>
       <td><?=$key["categoria"]?></td>
       <td><?=$key["marca"]?></td>
       <td><?=$key["precio"]?></td>
       <td><?=$key["tamañoPantalla"]?></td>
       <td><?=$key["discoDuro"]?></td>
       <td><?=$key["stockDisponible"]?></td>
       <td><?=$key["proveedor"]?></td>
       <td><?=$key["estaEnOferta"]?></td>
       <td><?=$key["habilitado"]?></td>
       <td> <input type="button" name="modificarEquipo" value="Modificar"> </td>
       <td> <input type="button" name="eliminarEquipo" value="Eliminar"> </td>
    </tr>
     <?php endforeach;?>

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
