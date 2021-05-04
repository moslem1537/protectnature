
<?php

include "inc/header.php";
    include_once '../Model/paiement.php';
    include_once '../Controller/paiementc.php';
   
    $error = "";
   
    
    

    // create prod
    $pay = null;

    // create an instance of the controller
    $payc = new paiementc();
    
    
    if (
        isset($_POST["nomprenom"]) && 
        isset($_POST["email"]) &&
        isset($_POST["adresse"]) &&
        isset($_POST["ville"]) &&
        isset($_POST["etat"]) &&
        isset($_POST["codepostal"]) &&
        isset($_POST["cartenom"]) &&
        isset($_POST["cartenum"]) &&
        isset($_POST["expmois"]) &&
        isset($_POST["expannee"]) &&
        isset($_POST["cvv"]) 
        
      
    ) {
        if (
            
        !empty($_POST["nomprenom"]) && 
        !empty($_POST["email"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["ville"]) &&
        !empty($_POST["etat"]) &&
        !empty($_POST["codepostal"]) &&
        !empty($_POST["cartenom"]) &&
        !empty($_POST["cartenum"]) &&
        !empty($_POST["expmois"]) &&
        !empty($_POST["expannee"]) &&
        !empty($_POST["cvv"]) 
           
        ) {
            $pay = new paiement(
                $_POST['nomprenom'],
                $_POST['email'],
                $_POST['adresse'],
                $_POST['ville'],
                $_POST['etat'],
                $_POST['codepostal'],
                $_POST['cartenom'],
                $_POST['cartenum'],
                $_POST['expmois'],
                $_POST['expannee'],
                $_POST['cvv']
              
            );
            $payc->ajouterpaiement($pay);
            header('Location:afficherpaiement.php');
        }
        else
            $error = "";
    }

    
?>






<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}
input:invalid {
            border: 3px solid red;
        }



.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}


.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<button><a href="afficherpaiement.php">Retour à la liste</a></button>   
<body>
<form name="fo" method="post" action="">
         <fieldset>
<h2>Formulaire de paiement</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      
      <div id="error">
            <?php echo $error; ?>
        </div>
        <div class="row">
          <div class="col-50">
            <h3>Adresse de facturation            </h3>
            <form name="form" action="" method="POST">   
            <label for="nomprenom"><i class="fa fa-user"></i> Nom et Prenom </label>
            <input type="text" id="nomprenom" name="nomprenom" placeholder="Tapez votre nom et prenom" required pattern='[a-z A-Z]+'>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Tapez votre adresse email"  pattern=".+@esprit.tn" size="30" required>
            <label for="adresse"><i class="fa fa-address-card-o"></i> Adresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="Tapez votre adresse " required pattern ='[a-zA-Z]{qs}'>
            <label for="ville"><i class="fa fa-institution"></i> Ville</label>
            <input type="text" id="ville" name="ville" placeholder="Tunis" required pattern ="[a-zA-Z]+">

            <div class="row">
              <div class="col-50">
                <label for="etat">Etat</label>
                <input type="text" id="etat" name="etat" placeholder="Manouba" required pattern='[a-zA-Z]+'>
              </div>
              <div class="col-50">
                <label for="codepostal">Code Postal</label>
                <input type="number" id="codepostal" name="codepostal" placeholder="Tapez code postal" required pattern ='[0-9]+' max="9999">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Paiement</h3>
            <label for="fname">Cartes acceptées</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cartenom">Nom sur Carte</label>
            <input type="text" id="cartenom" name="cartenom" placeholder="Tapez nom de carte" required pattern='[a-z A-Z]+'>
            <label for="cartenum">Numéro de la carte crédit</label>
            <input type="password" id="cartenum" name="cartenum" placeholder="Tapez numéro de carte" required pattern='[0-9 -]+'>
            <td></td><td></td><td></td>
            <label for="expmois">Mois d'expiration</label>
            <input type="text" id="expmois" name="expmois" placeholder="Septembre" required pattern='[Janvier Fevrier Mars Avril Mai Juin Juillet Aout Septembre Octobre Novembre Decembre]+'>
            <div class="row">
              <div class="col-50">
                <label for="expannee">Année d'expiration </label>
                <input type="text" id="expannee" name="expannee" placeholder="2024" required pattern='[0-9]+'>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="352" required pattern='[0-9]+' max="999">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Adresse de livraison identique à celle de facturation
        </label>
        <input type="submit" value="Je valide le paiement" class="btn">
      </form>
    </div>
  </div>
 
  <div class="col-25">
    <div class="container">
    <?PHP
  include "../controller/produitcc.php";
  


	$produitc=new produitc();
	$listeproduit=$produitc->afficherproduit();

?>
     
		<table  id="t01">
			<tr> 
				<th>  Id  </th>
				<th>Nom du produit     </th>
				
				<th>  Quantités       </th>
				
				
			</tr>

			<?PHP
				foreach($listeproduit as $prod){
			?>
				<tr>
					<td><?PHP echo $prod['id']; ?></td>
					<td><?PHP echo $prod['produit']; ?></td>
					
					<td><?PHP echo $prod['quantites']; ?></td>
					
					
					
					<td>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
    </div>
  </div>
</div>
</form>
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
