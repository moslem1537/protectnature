<?php
    include_once '../Model/livraison.php';
    include_once '../Controller/livraisonC.php';

    $error = "";

    // creat liv
    $liv = null;

    // create an instance of the controller
    $livC = new livraisonC();
    if (
        isset($_POST["nom"]) && 
        isset($_POST["produit"]) &&
        isset($_POST["quantite"]) && 
        isset($_POST["adresse"])
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["produit"]) && 
            !empty($_POST["quantite"]) && 
            !empty($_POST["adresse"]) 
        ) {
            $liv = new livraison(
                $_POST['nom'],
                $_POST['produit'], 
                $_POST['quantite'],
                $_POST['adresse']
              
            );
            $livC->ajoutelivraison($liv);
            header('Location:afficherlivraison.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livraison Display</title>

    

    <style>
    table {
  width: 800px;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th,
td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color:black;
}
th {
  text-align: left;
}
thead th {
  background-color: #55608f;
}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
tbody td {
  position: relative;
}
tbody td:hover:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}
</style>
</head>
    <body>
        <button><a href="afficherlivraison.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="4" align="center">
            <thead>
        <tr>
            <th colspan="4">ajouter votre livraison</th>
        </tr>

                <tr>
                    
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" placeholder="Tapez votre nom" maxlength="20" minlength="2" required pattern="[a-zA-Z]+" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="produit">produit:
                        </label>
                    </td>
                    <td><input type="text" name="produit" id="produit"  placeholder="Tapez votre produit" ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="quantite">quantite:
                        </label>
                    </td>
                    <td>
                        <input type="number" min="1" max="10" name="quantite" id="quantite"  placeholder="Tapez votre quantite"  >
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <label for="adresse">adresse:
                        </label>
                    </td>
                    <td>
                        <input type="text"  placeholder="Tapez votre adresse" name="adresse" id="adresse" >
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit"  value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
       

    </body>
</html>