<?php
    include "../controller/paiementc.php";
    include_once '../Model/paiement.php';
    include "inc/header_admin.php";

    $paiementc = new paiementc();
    $error = "";
    
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
       
  
    ){
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
           
           
                 $paiementc->modifierpaiement($pay, $_GET['id']);
            header('refresh:2;url=afficherpaiement.php');
      
           
        }
        else
            $error = "Missing information";
    }

?>
<html>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

    <head>
        <title>Modifier produit</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        
        <style>
     
      @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');
       {
           box-sizing: border-box;
       }
        body {
            
        }
        .form-control{
            margin-bottom: 10px;
            padding-bottom: 20px;
        }
        .form-control input {
            border: 2px solid #f0f0f0;
            border-radius: 4px;
            display: block;
            width: 100%;
        }
        .form-control i{
            position:absolute;
            top: 40px;
            right: 10 px;
            visibility: hidden;
        }
        input:invalid {
            border: 3px solid red;
        }
        input:invalid i.fa-check-circle {
            color: #2ecc71;
            visibility: visible;

        }
        input:valid{
            border: 3px solid green;
        }
        input{
            outline: none;
        }
         body{
            padding:80px;
         }
  
         }
         legend{
            font:bold 50pt arial;
            color:#EE6600;
         }
         input,select{
            border:solid 1px #AAAAAA;
            padding:10px;
            font:10pt verdana;
            color:#EE6600;
            outline:none;
            border-radius:6px;
         }
         input[type="submit"]{
            border:none;
            background-color:#EE6600;
            color:#FFFFFF;
            width:200px;
            cursor:pointer;
         }
         .label{
            color: #EE6600;
  padding: 800px;
  font-family: Arial;
         }
         .champ{
            margin-bottom:50px;
         }
         .error{
            font:10pt arial;
            color:#DD0000;
            background-color:#EEEEEE;
            padding:10px;
            border-radius:10px;
            margin-bottom:10px;
         }
         .rappel{
            font:10pt arial;
            color:#888888;
            background-color:#EEEEEE;
            padding:10px;
            border-radius:10px;
            margin-bottom:10px;
         }
      </style>
    </head>
    <body>
        <!-- Left Panel -->

   
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
							<div class="container my-2">
        <button><a href="afficherpaiement.php">Retour à la liste</a></button>
        <form name="fo" method="post" action="">
        <fieldset>
        <center>
                <legend>Modifier Paiement </legend>
        </center>   
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <?php
            if (isset($_GET['id'])){
                $pay = $paiementc->recupererpaiement($_GET['id']);
                
        ?>
        <form name="form" action="" method="POST"> 
            <table align="center">
                <tr>
                   
                    
         <label for="id">Id:</label>
          <input type="text" name="id" id="id"  value = "<?php echo $pay['id']; ?>" disabled>
                   
            <label for="nomprenom"><i class="fa fa-user"></i> Nom et Prenom </label>
            <input type="text" id="nomprenom" name="nomprenom" value = "<?php echo $pay['nomprenom']; ?>" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value = "<?php echo $pay['email']; ?>" >
            <label for="adresse"><i class="fa fa-address-card-o"></i> Adresse</label>
            <input type="text" id="adresse" name="adresse" value = "<?php echo $pay['adresse']; ?>">
            <label for="ville"><i class="fa fa-institution"></i> Ville</label>
            <input type="text" id="ville" name="ville" value = "<?php echo $pay['ville']; ?>">

            <div class="row">
              <div class="col-50">
                <label for="etat">Etat</label>
                <input type="text" id="etat" name="etat" value = "<?php echo $pay['etat']; ?>">
              </div>
              <div class="col-50">
                <label for="codepostal">Code Postal</label>
                <input type="text" id="codepostal" name="codepostal" value = "<?php echo $pay['codepostal']; ?>" >
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
            <input type="text" id="cartenom" name="cartenom" value = "<?php echo $pay['cartenom']; ?>">
            <label for="cartenum">Numéro de la carte crédit</label>
            <input type="text" id="cartenum" name="cartenum" value = "<?php echo $pay['cartenum']; ?>">
            <label for="expmois">Mois d'expiration</label>
            <input type="text" id="expmois" name="expmois" value = "<?php echo $pay['expmois']; ?>" >
            <div class="row">
              <div class="col-50">
                <label for="expannee">Année d'expiration </label>
                <input type="text" id="expannee" name="expannee"value = "<?php echo $pay['expannee']; ?>" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" value = "<?php echo $pay['cvv']; ?>" >
              </div>
            </div>
                   
                    
                </tr>
             
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
</fieldset>
        </form>

        
        
         <?php
           
              }
        ?>

        
</div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


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