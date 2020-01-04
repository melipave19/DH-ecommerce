<?php

require 'footer.php';

 ?>
<style>
body{
  background-color: #ecf4fd ;
}
.navbar-default{
  background-color: $bgDefault;
  border-color: $bgHighlight;
}
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
            <nav class="container navbar navbar-default secnav">
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
