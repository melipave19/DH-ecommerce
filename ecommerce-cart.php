<?php

require 'footer.php';

 ?>
<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    body{
      background-color:  #ecf4fd ;
    }
    .navbar-default{
      background-color: $bgDefault;
      border-color: $bgHighlight;
    }
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
