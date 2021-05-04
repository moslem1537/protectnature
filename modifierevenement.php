<?php
    include "../controller/evenementC.php";
    include_once '../Model/evenement.php';
    include "inc/header_admin.php";

    $evenementC = new evenementC();
    $error = "";
    
    if (
        isset($_POST["nom"]) && 
        isset($_POST["adresse"]) &&
        isset($_POST["temps"]) && 
        isset($_POST["prix"]) 
  
    ){
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
           
           
                 $evenementC->modifierevenement($event, $_GET['id']);
            header('refresh:2;url=afficherevenement.php');
      
           
        }
        else
            $error = "Missing information";
    }

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
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
</head>

<body>
        <button><a href="afficherevenement.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <?php
            if (isset($_GET['id'])){
                $event = $evenementC->recupererevenement($_GET['id']);
                
        ?>
        <form action="" method="POST">
            <table align="center">
                <tr>
                   
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="id" id="id"  value = "<?php echo $event['id']; ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $event['nom']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse">adresse:
                        </label>
                    </td>
                    <td><input type="text" name="adresse" id="adresse" maxlength="100" value = "<?php echo $event['adresse']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="temps">temps:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="temps" id="temps" maxlength="20" value = "<?php echo $event['temps']; ?>">
                    </td>
                </tr>
                <tr>
                   
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="number" min="0" name="prix" id="prix" maxlength="10" value = "<?php echo $event['prix']; ?>">
                    </td>
                </tr>
             
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>

        </form>

        
        
         <?php
           
              }
        ?>

        
    

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
