<?php

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)

 
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
include "../model/livreur.php";
include "../controller/livreurc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <SCRIPT LANGUAGE="JavaScript">
    function valider() 
{
    var InputText=window.document.MonForm.id.value;

    var i=window.document.MonForm.nom.value;
    var a=window.document.MonForm.adresse.value;
    var t=window.document.MonForm.date.value;
    if((InputText=="") || (i=="") || (t=="") || (a=="")){
        alert ("verifier les champs");
        return false; 
    
    }

    else return true;
  
}
</SCRIPT> 
<html class="no-js" lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Shop - Login</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="AddReclamation.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="AddReclamation.html">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Blog Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
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
                            <li class="nav-item active submenu dropdown">
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
  <script>

  
    function myfun(str){
if (str.length == 0) {
    document.getElementById("txtHint").value = "";
    return;
  } else {
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
      //if (this.readyState == 4 && this.status == 200) {

document.getElementById("txtHint").value =this.responseText;
          };
            
            console.log(str);
            console.log('ffffff');
            xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
    }}
    </script>
    
  <!-- ================ start banner area ================= --> 
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Register</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
                </div>
            </div>
    </div>
    </section>
    <!-- ================ end banner area ================= -->
 
  <!--================Login Box Area =================-->
    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
          <div class="login_box_img">
            <div class="hover">
              <img
    src="download.png" 
    alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]"
    height="400px" 
    width="250px" 
/>
            </div>
          </div>
        </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                    <form   method="POST" name="MonForm" action="ajoutlivraison.php" onsubmit="return valider()">
                             
                                    
                               
                        <?php
                       
$livreur1c=new livreurc();
                                $result2=$livreur1c->afficherlivreur();

                       ?>
                        <th>livreur</th>
          <td><select name="livreur" id ="select" onclick="myfun(this.value)">
                        <?php
              foreach ($result2 as $row) {
              ?>
                <option value="<?PHP echo   $row['nom']; ?>"><?PHP echo $row['nom'] ?></option>
              <?PHP
              }
              ?>

            </select></td>
<br/>
<br/>
 <div class="form-group">
                 nom client <input class="form-control" name="nom" id="nom" type="text"    >
                </div>
                <div class="form-group">
                 adresse <input class="form-control" name="adresse" id="adresse" type="adresse" placeholder="entrer adresse" >
                </div>
                <div class="form-group">
                  date <input class="form-control" name="date" id="txtHint" type="text" >
                </div>
                <div class="form-group">
                 quantité <input class="form-control" name="total" id="total" type="text" >
                </div>                     
                        

<input type="hidden" value="en cours" name="etat"  >

                            
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                </div>
         
                            </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>




