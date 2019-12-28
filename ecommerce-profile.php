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
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
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
                    <li><a href="ecommerce-index.php#home">Home</a></li>
                    <li><a href="ecommerce-products.php">Products</a></li>
                    <li><a href="ecommerce-index.php#faqs">FAQs</a></li>
                    <li><a href="ecommerce-index.php#contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                    <li><a href="ecommerce-cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
                </div>
            </div>
            </nav>

            <nav class="container navbar navbar-inverse secnav">
              <div class="container">
                <ul class="nav navbar-nav bg-grey">
                  <li class="active"><a href="#">My details</a></li>
                  <li><a href="#">My address book</a></li>
                  <li><a href="#">My orders</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Item 1</a></li>
                      <li><a href="#">Item 2</a></li>
                      <li><a href="#">Item 3</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>

            <div class=" container panel panel-default">
              <div class="panel-body"> <h3>Rick Fort</h3>
                <img src="imagenes/profile.png" class="img-circle" height="75" width="75" alt="Avatar">
              </div>

            </div>
            <footer class="container-fluid text-center">
              <p>EquipoFoo</p>
            </footer>
</body>
</html>
