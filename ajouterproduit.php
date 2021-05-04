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
    <script src="https://kit.fontawesome.com/4cd05253f0.js" crossorigin="anonymous"></script>
    <title>produit Display</title>
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
         fieldset{
            border:solid 10px #EE6600;
            border-radius:30px;
            padding:30px;
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
            <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
                <tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr><tr> </tr> <tr> </tr>
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
                        <input type="number" placeholder="Merci de choisir une quantité" name="quantites" id="quantites" required min="1" max="9" >
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
    </body>
</html>