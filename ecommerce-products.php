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
    body{
      background-color: #FFA33E;
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
              <li class="active"><a href="#">Products</a></li>
              <li><a href="ecommerce-index.php#faqs">FAQs</a></li>
              <li><a href="ecommerce-index.php#contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Log in</a></li>
              <li><a href="#">Sign in</a></li>
              <li><a href="ecommerce-profile.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
              <li><a href="ecommerce-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
          </div>
        </div>
      </nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="listadoProducts.php#products1" class="text-danger">Laptop</a></div>
        <div class="panel-body"><img src="imagenes/imagen4.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>50 laptops and get a gift card</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='listadoProducts.php#products1'">Buy!</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading"><a href="listadoProducts.php#products2" class="text-danger">Laptop</a></div>
        <div class="panel-body"><img src="imagenes/imagen5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>50 laptops and get a gift card</p><button type="submit" name="buy" class="btn btn-warning"  onclick="location.href='listadoProducts.php#products2'">Buy!</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"><a href="listadoProducts.php#products3" class="text-danger">Laptop</a></div>
        <div class="panel-body"><img src="imagenes/imagen6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>50 laptops and get a gift card</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='listadoProducts.php#products3'">Buy!</button></div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="listadoProducts.php#products4" class="text-danger">Laptop</a></div>
        <div class="panel-body"><img src="imagenes/imagen7.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>50 laptops and get a gift card</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='listadoProducts.php#products4'">Buy!</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading"><a href="listadoProducts.php#products5" class="text-danger">Laptop</a></div>
        <div class="panel-body"><img src="imagenes/imagen8.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>50 laptops and get a gift card</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='listadoProducts.php#products5'">Buy!</button></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"><a href="listadoProducts.php#products6" class="text-danger">Laptop</a></div>
        <div class="panel-body"><img src="imagenes/imagen9.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><p>50 laptops and get a gift card</p><button type="submit" name="buy" class="btn btn-warning" onclick="location.href='listadoProducts.php#products6'">Buy!</button></div>
      </div>
    </div>
  </div>
</div>

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
