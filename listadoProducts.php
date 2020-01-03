<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>E-commerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
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
    </style>
  </head>
  <body>

  <div class="jumbotron">
    <div class="container text-center">
      <h1>Online Store</h1>
      <p>Mission, Vission & Values</p>
    </div>
  </div>

  <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="ecommerce-index.php">Home</a></li>
                <li class="active"><a href="ecommerce-products.php">Products</a></li>
                <li><a href="ecommerce-index.php#faqs">FAQs</a></li>
                <li><a href="ecommerce-index.php#contact">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="" data-toggle="modal" data-target="#logIn">Log in</a></li>
                <li><a href="" data-toggle="modal" data-target="#signIn">Sign in</a></li>
                <li><a href="ecommerce-profile.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                <li><a href="ecommerce-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="logIn" role="dialog">
               <div class="modal-dialog">
                 <!-- Modal content-->
                 <div class="modal-content">
                 <!-- Login -->
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Log In</h4>
                   </div>
                   <div class="modal-body">
                     <div class="wrapper">
                     <form class="form-signin">
                         <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                         <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                         <label class="checkbox">
                             <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                         </label>
                         <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                     </form>
                     </div>
                   </div>
                 <!-- Login -->
                 </div>
               <!-- Modal content-->
               </div>
       </div>

           <!-- Modal -->
       <div class="modal fade" id="signIn" role="dialog">
               <div class="modal-dialog">
                 <!-- Modal content-->
                 <div class="modal-content">
                     <!--Sign In -->
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Sign In</h4>
                     </div>
                     <div class="modal-body">
                       <div class="wrapper">
                       <form class="form-signin">
                           <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                           <input type="text" class="form-control" name="name" placeholder="Last Name" required="" autofocus="" />
                           <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                           <input type="password" class="form-control" name="repassword" placeholder="Confirm Password" required=""/>
                           <label class="checkbox">
                               <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                           </label>
                           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                       </form>
                       </div>
                     </div>
                   <!-- Sign In -->
                 </div>
               </div>
                 <!-- Modal content-->
       </div>
       <div class="container" id="products1">
         <div class="row">
           <section class= "col-md-5">
             <img src="imagenes/imagen4.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>Laptop 3.0 HD</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Product description</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button">BUY NOW</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products2">
         <div class="row">
           <section class= "col-md-5">
             <img src="imagenes/imagen5.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>Laptop 3.0 HD</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Product description</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button">BUY NOW</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products3">
         <div class="row">
           <section class= "col-md-5">
             <img src="imagenes/imagen6.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>Laptop 3.0 HD</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Product description</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button">BUY NOW</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products4">
         <div class="row">
           <section class= "col-md-5">
             <img src="imagenes/imagen7.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>Laptop 3.0 HD</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Product description</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button">BUY NOW</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products5">
         <div class="row">
           <section class= "col-md-5">
             <img src="imagenes/imagen8.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>Laptop 3.0 HD</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Product description</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button">BUY NOW</button>
           </section>
         </div>
       </div>
       <br>
       <br>
       <div class="container" id="products6">
         <div class="row">
           <section class= "col-md-5">
             <img src="imagenes/imagen9.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>Laptop 3.0 HD</h4>
    <div class="panel panel-warning">
      <div class="panel-heading">Product description</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
    </div>
             <button class="btn btn-warning btn-block" type="submit" name="button">BUY NOW</button>
           </section>
         </div>
       </div>
       <br>
       <br>
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
                               <li><a href="#">Home</a></li>
                               <li><a href="#">Products</a></li>
                               <li><a href="#">FAQs</a></li>
                               <li><a href="#">Contact</a></li>
                           </ul>
                       </div>
                   	<div class="col-md-6">
                           <ul class="list">
                               <li><a href="#">Sign in</a></li>
                               <li><a href="#">Log in</a></li>
                               <li><a href="#">Your account</a></li>
                               <li><a href="#">Cart</a></li>
                           </ul>
                       </div>
                   </div>
               	<div class="col-md-2 footer-social animated fadeInDown">
                   	<h4>Follow Us</h4>
                   	<ul>
                       	<li><a href="#">Facebook</a></li>
                       	<li><a href="#">Twitter</a></li>
                       	<li><a href="#">Instagram</a></li>
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
