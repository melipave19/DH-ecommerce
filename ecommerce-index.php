<?php

require 'footer.php';

 ?>
<style>
body{
  background-color:   #ecf4fd  ;
}
.navbar-default{
  background-color: $bgDefault;
  border-color: $bgHighlight;
}
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

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

<div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" style="margin-bottom: 20px;">
            <div class="item active">
              <img src="imagenes/imagen1.jpg" alt="notebook" style="width:100%;">
            </div>
            <div class="item">
              <img src="imagenes/imagen2.jpg" alt="computer" style="width:100%;">
            </div>
            <div class="item">
              <img src="imagenes/imagen3.jpg" alt="laptop" style="width:100%;">
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

</div>

<div class="container">
        <h2 id="faqs" class="text-center">FAQs</h2>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">1: what is the price?</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">2: what cards do you have available?</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">3: Do you have gamers style computers?</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
          </div>
        </div>
</div>
<!-- Contact Section -->
<h2 class="text-center" id="contact">CONTACT</h2>
<div class="container bg-grey well">
    <div class="row">
        <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
        </div>
        <div class="col-sm-7">
        <div class="row">
            <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
        </div>
        </div>
    </div>
    </div>
<!--<footer class="container-fluid text-center">
    <div class="container">
            <div>
                <div class="well">
                    <form class="form-inline">Get deals:
                        <input type="email" class="form-control" size="50" placeholder="Email Address">
                        <button type="button" class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
  <p>EquipoFoo</p>
</footer> -->
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
