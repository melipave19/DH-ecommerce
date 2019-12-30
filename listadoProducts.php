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
                <li><a href="ecommerce-index.html">Home</a></li>
                <li class="active"><a href="#">Products</a></li>
                <li><a href="ecommerce-index.html#faqs">FAQs</a></li>
                <li><a href="ecommerce-index.html#contact">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="" data-toggle="modal" data-target="#logIn">Log in</a></li>
                <li><a href="" data-toggle="modal" data-target="#signIn">Sign in</a></li>
                <li><a href="ecommerce-profile.html"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                <li><a href="./ecommerce-cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
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
       <div class="container">
         <div class="row">
           <section class= "col-md-5">
             <img src="imagenes/imagen4.jpg" class="img-responsive" style="width:100%" alt="">
           </section>
           <section class = "col-md-7">
             <h4>Laptop 3.0 HD</h4>
            <div class="panel panel-warning">
      <div class="panel-heading">Descripcion del producto</div>
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsam dolorum, quaerat! Quibusdam iste temporibus ex consectetur unde ullam explicabo deserunt commodi ipsam, pariatur eius esse, accusantium, architecto vero sint.</p></div>
            </div>
             <button class="btn btn-warning btn-block" type="submit" name="button">BUY NOW</button>
           </section>
         </div>
       </div>
       <footer class="container-fluid text-center">
               <p>EquipoFoo</p>
       </footer>

  </body>
</html>
