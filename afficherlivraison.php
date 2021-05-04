<?php require '../views/inc/header_admin.php'; ?>
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
                            <?PHP
                                include "../controller/livraisonc.php";
                                $livraison1c=new livraisonc();
                                $listeEmployes=$livraison1c->afficherlivraison();
                                 
                                //var_dump($listeEmployes->fetchAll());
                                ?>
                                <td><a href="ajoutliv.php">
                    ajouter une livraison ?</a></td>ou 
                    <td><a href="ajoutcomm.php"> 
                     un livreur ?</a></td>
                    
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>nom</th>
                                            <th>adresse</th>
                                            <th>total</th>
                                            <th>date</th>
                                            <th>etat</th>
                                            <th>livreur</th>
                                            <th>supprimer</th>
                                            <th>modifier</th>

                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        <?PHP
    foreach($listeEmployes as $row){
        ?>
        <tr>
            <td><?PHP echo $row['id']; ?></td>
            <td><?PHP echo $row['nom']; ?></td>
            <td><?PHP echo $row['adresse']; ?></td>
            <td><?PHP echo $row['total']; ?></td>
            <td><?PHP echo $row['date']; ?></td>
            <td><?PHP echo $row['etat']; ?></td>
            <td><?PHP echo $row['livreur']; ?></td>
            <td><form method="POST" action="supprimerlivraison.php">
                    <input type="submit" name="supprimer" value="supprimer">
                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                </form>
            </td>
            <td><a href="modifierlivraison.php?id=<?PHP echo $row['id']; ?>">
                    Modifier</a></td>
                    <td><form method="POST" action="send_mail.php">
                    <input type="submit" name="supprimer" value="mailing">
                    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                </form>
            </td>
        </tr>
        
        <?PHP
    }
    
    ?>

                                        
                                        
                                    </tbody>
                                </table>
                                <form method="get" action="pdf1.php">
    <button type="submit">PDF</button>
</form>                
<td><a href="afficherlivreur.php"> 
                     les livreurs</a></td>
                            </div>
                        </div>
                    </div>


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
