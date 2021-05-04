<?php
    include_once '../Model/evenement.php';
    include_once '../Controller/evenementC.php';

    $error = "";

    // creat event
    $event = null;

    // create an instance of the controller
    $eventC = new evenementC();
    if (
        isset($_POST["nom"]) && 
        isset($_POST["adresse"]) &&
        isset($_POST["temps"]) && 
        isset($_POST["prix"])
    ) {
        if (
            !empty($_POST["nom"]) && 
            !empty($_POST["adresse"]) && 
            !empty($_POST["temps"]) && 
            !empty($_POST["prix"]) 
        ) {
            $event = new evenement(
                $_POST['nom'],
                $_POST['adresse'], 
                $_POST['temps'],
                $_POST['prix']
              
            );
            $eventC->ajouterevenement($event);
            header('Location:afficherevenement.php');
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
    <title>evenement Display</title>
</head>
    <body>
        <button><a href="afficherevenement.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" placeholder="Tapez votre nom" maxlength="20" minlength="2" required pattern="[a-zA-Z]+" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">adresse:
                        </label>
                    </td>
                    <td><input type="text" name="adresse" id="adresse"  placeholder="Tapez votre adresse" maxlength="100" ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="temps">temps:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="temps" id="temps"  placeholder="Tapez votre date"  >
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="number" min="0" max="9999" placeholder="Tapez le prix" name="prix" id="prix" >
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