<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-commerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Modal */

    @import "bourbon";

    .form-signin {
      max-width: 380px;

      margin: 0 auto;
      background-color: #fff;
    }

    .form-signin-heading,
    	.checkbox {
    	  margin-bottom: 30px;
    	}

    	.checkbox {
    	  font-weight: normal;
    	}

    	.form-control {
    	  position: relative;
    	  font-size: 16px;
    	  height: auto;
    	  padding: 10px;
    		@include box-sizing(border-box);
      }

    		&:focus {
    		  z-index: 2;
    		}

    	input[type="text"] {
    	  margin-bottom: 20px;
    	  border-bottom-left-radius: 0;
    	  border-bottom-right-radius: 0;
    	}

    	input[type="password"] {
    	  margin-bottom: 20px;
    	  border-top-left-radius: 0;
    	  border-top-right-radius: 0;
    	}

  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1 id="home">Online Store</h1>
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="ecommerce-products.html">Products</a></li>
        <li><a href="#faqs">FAQs</a></li>
        <li><a href="#contact">Contact</a></li>
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

<body>


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
            <form class="form-signin" method="post">
                <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
                <?php
                if(isset($errores ['Email'])) {
                foreach($errores [ 'Email' ] as $error) {
                echo "<small class='text-danger'>" . $error . '</small>';
                }
                }
                 ?>
                <input type="text" class="form-control" name="name" placeholder="Last Name" required="" autofocus="" />
                <?php
                if(isset($errores ['nombre'])) {
                foreach($errores [ 'nombre' ] as $error) {
                echo "<small class='text-danger'>" . $error . '</small>';
                }
                }
                 ?>
                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
                <?php
                if(isset($errores ['password'])) {
                foreach($errores [ 'password' ] as $error) {
                echo "<small class='text-danger'>" . $error . '</small>';
                }
                }
                 ?>
                <input type="password" class="form-control" name="repassword" placeholder="Confirm Password" required=""/>
                <?php
                if(isset($errores ['repassword'])) {
                foreach($errores [ 'repassword' ] as $error) {
                echo "<small class='text-danger'>" . $error . '</small>';
                }
                }
                 ?>

                <label class="checkbox">
                    <input type="checkbox" value="rememberMe" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
            </form>
            <?php
            if(isset($errores ['nombre'])) {
            foreach($errores [ 'nombre' ] as $error) {
            echo "<small class='text-danger'>" . $error . '</small>';
            }
            }
             ?>
            </div>
          </div>
        <!-- Sign In -->
      </div>
    </div>
      <!-- Modal content-->
</div>
<?php


// Validar campo Email:
if(isset ($_POST [ 'email'])) {
if (empty ($_POST  [ 'email'])) {
$errores [ 'email'] [ ] = "Este campo es obligatorio";
}
if(!filter_var($_POST [ 'email'], FILTER_VALIDATE_EMAIL)) {
$errores ['email'][]= "Debes ingresar un email valido";
}
}
//Validar campo Last Name
if(isset ($_POST [ 'name'])) {
if (empty ($_POST  [ 'name'])) {
$errores ['name'] [ ] = "Este campo es obligatorio";
}
if($_post['password'] <6 ) {
$errores ['name'][] = "Este campo debe tener como minimo 6 caracteres";
}
}

//Validar campo password
if(isset ($_POST [ 'password'])) {
if (empty ($_POST  [ 'password'])) {
$errores [ 'password'] [ ] = "Este campo es obligatorio";
}
if(strlen($_POST['password']) < 6 ) {
$errores ['password'][] = "Tu contraseña debe tener al menos 6 caracteres";
}
}

//Validar campo repassword
if(isset ($_POST [ 'repassword'])) {
if (empty ($_POST  [ 'repassword'])) {
$errores [ 'repassword'] [ ] = "Este campo es obligatorio";
}
if($_post['password'] != $_POST['repassword']) {
$errores ['repassword'][] = "las contraseñas deben coincidir";
}
}
if (count($errores) == 0 ) {
// El usuario puso todo bien
}
