<?php
if(isset($_POST['rememberMe']))
{
  $rememberMe = 'on';
}
else {
  $rememberMe = 'off';
}

$nombreArchivo = "";
$extension = "";

// Validar campo Email:
if(isset ($_POST [ 'email'])) {
if (empty ($_POST  [ 'email'])) {
$errores [ 'email'][ ] = "Este campo es obligatorio";
}
if(!filter_var($_POST [ 'email'], FILTER_VALIDATE_EMAIL)) {
$errores ['email'][]= "Debes ingresar un email valido";
}
}

//Validar campo Last Name
if(isset ($_POST[ 'name'])) {
if (empty ($_POST[ 'name'])) {
$errores ['name'][ ] = "Este campo es obligatorio";
}
}

//Validar campo password
if(isset ($_POST [ 'password'])) {
if (empty ($_POST[ 'password'])) {
$errores['password'][] = "Este campo es obligatorio";
}
if(strlen($_POST['password']) <= 6 ) {
$errores['password'][] = "Tu contraseña debe tener al menos 6 caracteres";
}
}

//Validar campo repassword
if(isset ($_POST [ 'repassword'])) {
if (empty ($_POST[ 'repassword'])) {
$errores ['repassword'][ ] = "Este campo es obligatorio";
}
if($_POST['password'] != $_POST['repassword']) {
$errores ['repassword'][] = "las contraseñas deben coincidir";
}
}

//Validar campo perfil
if (isset($_FILES [ 'perfil']))
{
  if(empty($_FILES [ 'perfil']))
  {
    $errores['perfil'][] = "Este campo es obligatorio";
  }
  if($_FILES && $_FILES['perfil']['error']==0)
  {
    $nombreArchivo = $_FILES['perfil']['name'];
    $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $extension = strtolower($extension);
    if($extension != "jpg" || $extension != "png" || $extension != "jpeg")
    {
      $errores['perfil'][] = "Las extensiones válidas son JPG y PNG.";
    }
  }
}

//Guardar usuarios en Json
if($_POST) {
  if(isset($_POST['email-LogIn']))
  {
    $emailLogIn = $_POST['email-LogIn'];
    $pass = $_POST['password-LogIn'];

    //cargar $archivo
    $archivoLogIn = file_get_contents('usuarios.json');
    $usuariosLogIn = json_decode($archivoLogIn, true);

    foreach ($usuariosLogIn as $key => $value) {
      if($emailLogIn == $value['email'])
      {
        echo "".password_verify($pass,$value['password']);
      }
    }
  }
if(isset($_POST['email']))
{
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hash = password_hash($password, PASSWORD_DEFAULT);

  //obtener los datos del $archivo
  $file = $_FILES['perfil']['tmp_name'];

  $usuario = [
    'name' => $nombre,
    'email' => $email,
    'password' => $hash,
    'archivo' => $nombreArchivo
  ];

  $archivo = file_get_contents('usuarios.json');
  $usuarios = json_decode($archivo, true);
  $usuarios[] = $usuario;

  //obtengo el ultimo id agregado
  $ultimo = count($usuarios)-1;

  // guardo el archivo
  move_uploaded_file($file, 'imagenes/usuarios/'.$ultimo.'.'.$extension);

  //actualizo el archivo usuarios.txt
  $json = json_encode($usuarios);
  file_put_contents('usuarios.json',$json);

  //recordar usuarios
  if($rememberMe == "on")
  {
    $cookie_name = "email";
    $cookie_value = $_POST["email"];

    setcookie($cookie_name,$cookie_value,time()+3600, "/");
    echo "Hola ".$_COOKIE["email"];

  }
}
}



?>
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
        <li class=""><a href="ecommerce-index.php">Home</a></li>
        <li><a href="ecommerce-products.php">Products</a></li>
        <li><a href="ecommerce-index.php#faqs">FAQs</a></li>
        <li><a href="ecommerce-index.php#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="" data-toggle="modal" data-target="#logIn">Log in</a></li>
        <li><a href="" data-toggle="modal" data-target="#signIn">Sign in</a></li>
        <li><a href="ecommerce-profile.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="./ecommerce-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
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
              <form class="form-signin" method="POST">
                <input type="text" class="form-control" name="email-LogIn" placeholder="Email Address" autofocus="" value="<?php if($_POST) { echo $_POST['email']; }?>" />
                <?php
                if(isset($errores ['email-LogIn'])) {
                foreach($errores [ 'email-LogIn' ] as $error) {
                echo "<small class='text-danger'>" . $error . "</small>";
                }
                }
                 ?>
                <input type="password" class="form-control" name="password-LogIn" placeholder="Password" />
                <?php
                if(isset($errores ['password-LogIn'])) {
                foreach($errores ['password-LogIn'] as $error) {
                echo "<small class='text-danger'>" . $error . "</small>";
                }
                }
                  ?>
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
            <form class="form-signin" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" name="email" placeholder="Email Address" autofocus="" value="<?php if($_POST) { echo $_POST['email']; }?>" />
                <?php
                if(isset($errores ['email'])) {
                foreach($errores [ 'email' ] as $error) {
                echo "<small class='text-danger'>" . $error . "</small>";
                }
                }
                 ?>
                <input type="text" class="form-control" name="name" placeholder="Nombre"  autofocus="" value="<?php if($_POST) { echo $_POST['name']; }?> " />
                <?php
                if(isset($errores ['name'])) {
                foreach($errores [ 'name' ] as $error) {
                echo "<small class='text-danger'>" . $error . "</small>";
                }
                }
                 ?>
                <input type="password" class="form-control" name="password" placeholder="Password" />
                <?php
                if(isset($errores ['password'])) {
                foreach($errores ['password'] as $error) {
                echo "<small class='text-danger'>" . $error . "</small>";
                }
                }
                 ?>
                <input type="password" class="form-control" name="repassword" placeholder="Confirm Password"/>
                <?php
                if(isset($errores['repassword'])) {
                foreach($errores ['repassword'] as $error) {
                echo "<small class='text-danger'>" . $error . "</small>";
                }
                }
                 ?>
                <label>Foto de perfil: </label>
                <input type="file" name="perfil">
                <br>
                <label class="checkbox">
                    <input type="checkbox" value="rememberMe" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
            </form>
            <?php
            if(isset($errores ['nombre'])) {
            foreach($errores [ 'nombre' ] as $error) {
            echo "<small class='text-danger'>" . $error . "</small>";
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
if(isset($errores)) {
  ?>
    <script>
      $('#signIn').modal();
    </script>
  <?php
}
