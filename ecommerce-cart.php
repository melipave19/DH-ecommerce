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

    /*Cart*/

    .table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
     }
      @media screen and (max-width: 600px) {
          table#cart tbody td .form-control {
      		width:20%;
      		display: inline !important;
      	}
      	.actions .btn{
      		width:36%;
      		margin:1.5em 0;
          margin-left: -25%;
      	}

      	.actions .btn-info {
      		float:left;
      	}
      	.actions .btn-danger {
      		float:right;
      	}
      	table#cart thead {
              display: none;
        }
      	table#cart tbody td {
              display: block;
              padding: .6rem;
              min-width:320px;
        }
      	table#cart tbody tr td:first-child {
              background: #333;
              color: #fff;
        }
      	table#cart tbody td:before {
      		content: attr(data-th);
            font-weight: bold;
      		display: inline-block;
            width: 8rem;
      	}
      	table#cart tfoot td {
            display:block;
        }
      	table#cart tfoot td .btn {
            display:block;
        }
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
        <li><a href="ecommerce-index.php#home">Home</a></li>
        <li><a href="ecommerce-products.php">Products</a></li>
        <li><a href="ecommerce-index.php#faqs">FAQs</a></li>
        <li><a href="ecommerce-index.php#contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
        <li><a href="ecommerce-profile.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li class="active"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Cart -->
<div class="container">
    	<table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">Product 1</h4>
                                <p>Product detail...</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">$99.99</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control" value="1">
                    </td>
                    <td data-th="Subtotal">99.99</td>
                    <td class="actions" data-th="">
        <button type="button" class="btn btn-primary" aria-label="Left Align">
            <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-danger" aria-label="Left Align">
            <span class=" glyphicon glyphicon-trash" aria-hidden="true"></span>
        </button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total 99.99</strong></td>
                </tr>
                <tr>
                    <td><a href="./ecommerce-products.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total $99.99</strong></td>
                    <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                </tr>
            </tfoot>
        </table>
    </div>
<!-- End Cart -->
<footer class="container-fluid text-center">
  <p>EquipoFoo</p>
</footer>

</body>
</html>
