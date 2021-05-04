<?php


    include_once '../Model/produits.php';
    include_once '../Controller/produitc.php';
    include "../Model/prod.php";
    include "../Controller/prodc.php";

    $error = "";
    $produitErr = $quantitesErr= "";
    $produit = $quantites= "";

    
    

    // create prod
    $prod = null;

    // create an instance of the controller
    $prodc = new produitc();
    
    
    if (
        isset($_POST["produit"]) && 
      
        isset($_POST["quantites"]) 
      
    ) {
        if (
            !empty($_POST["produit"]) && 
         
            !empty($_POST["quantites"]) 
           
        ) {
            $prod = new produits(
                $_POST['produit'],
              
                $_POST['quantites']
                
              
            );
            $prodc->ajouterproduit($prod);
            header('Location:afficherproduit.php');
        }
        else
            $error = "";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Checkout</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
              <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category_views.php">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                </ul>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Product Checkout</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
    <button><a href="afficherproduit.php">Retour à la liste</a></button>    
<body>
      <form name="fo" method="post" action="">
         
      
      
      
      <fieldset>
           <center>
                <legend>Ajouter Produit </legend>
        </center>     
        
        
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form name="form" action="" method="POST">         
            <table  align="center">
            <tr> <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
             <div>   
            <tr>
                    <td>
                        <label for="produit">Produit:
                        </label>
                    </td>
                    <td>
                       

                    <?php
                       
                       $prod1c=new prodc();
                                                       $result2=$prod1c->afficherprod();
                       
                                              ?>
                                               
                                 <td><select name="produit" id ="select" >
                                               <?php
                                     foreach ($result2 as $row) {
                                     ?>
                                       <option value="<?PHP echo   $row['nom']; ?>"><?PHP echo $row['nom'] ?></option>
                                     <?PHP
                                     }
                                     ?>
                       
                                   </select></td>

                         <i class="fas fa-check-circle"></i>
                   <i class="fas fa-exclamation-circle"></i>
                   <small>Error message </small>
                    </td>
                </tr>
                        </div>
                <tr>
                    <td>
                        <label for="quantites">Quantités:
                        </label>
                    </td>
                    <td>
                        <input type="number" placeholder="Merci de choisir une quantité" name="quantites" id="quantites" required max="9" >
                        <i class="fas fa-check-circle"></i>
                   <i class="fas fa-exclamation-circle"></i>
                   <small>Error message </small>
                    </td>

                </tr>
                <tr>
                    
                   
                </tr><button type="button"
 onclick="document.getElementById('demo').innerHTML = Date()">
 Click me to display Date and Time.</button>

  <p id="demo"></p>

      
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                
                

                <tr>
                    <td>
                        <input type="submit"   value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <script>
           const produit =document.getElementById ('produit');
             inputTxt.setCustomValidity ('entrer votre produit !')
            </script>
</fieldset>
      </form>

     
        
                    
                      
      
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        
       
    </div>
  </section>
  <!--================End Checkout Area =================-->



  <!--================ Start footer Area  =================-->	
	<footer>
		<div class="footer-area footer-only">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets ">
							<h4 class="footer_title large_title">Our Mission</h4>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="#">Home</a></li>
								<li><a href="#">Shop</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Product</a></li>
								<li><a href="#">Brand</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget instafeed">
							<h4 class="footer_title">Gallery</h4>
							<ul class="list instafeed d-flex flex-wrap">
								<li><img src="img/gallery/r1.jpg" alt=""></li>
								<li><img src="img/gallery/r2.jpg" alt=""></li>
								<li><img src="img/gallery/r3.jpg" alt=""></li>
								<li><img src="img/gallery/r5.jpg" alt=""></li>
								<li><img src="img/gallery/r7.jpg" alt=""></li>
								<li><img src="img/gallery/r8.jpg" alt=""></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, Main Street, Your City</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+123 456 7890 <br>
									+123 456 7890
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->


<script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
</body>
</html>