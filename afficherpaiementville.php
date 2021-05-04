<?PHP

include "../controller/paiementc.php";
include "inc/header_admin.php";
    $paiementc=new paiementc();
    $listepaiement=$paiementc->afficherpaiementtri();

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
<div id="google_translate_element"></div>
         <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
             }
         </script>
         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
             <input class="col-10" type="text" name="AfficherClasse" onkeyup="myFunction()" placeholder="search .." id="myInput">
         </div>
         <script>


id="t01"
function myFunction() {
var input, filter, table, tr,tr1,td1, td, i,j, txtValue;
input = document.getElementById("myInput");
filter = input.value.toUpperCase();
table = document.getElementById("t01");
tr = table.getElementsByTagName("tr");
//   alert(td.length);
    for (i = 0; i < tr.length; i++) {
        td= tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }

}
  
}


</script>
        
         <a href="afficherpaiement.php" class="button" >REFRESH</a>
         <a href="afficherpaiementville.php" class="button" >ville \/</a>
         <a href="afficherpaiementnom.php" class="button" >nom \/</a>
		<table class="table table-striped table-bordered" id="t01" >

			<tr> 
				<th>  Id  </th>
				<th>Nom et Prenom    </th>
                <th>Email    </th>
                <th>Adresse    </th>
                <th>Ville    </th>
                <th>Etat    </th>
                <th>Code Postal    </th>
                <th>Nom sur carte    </th>
                <th>Numéro de la carte    </th>
                <th>Exp mois    </th>
                <th>Exp annee    </th>
				<th>  CVV       </th>
				
				
			</tr>

			<?PHP
				foreach($listepaiement as $pay){
			?>
				<tr>
					<td><?PHP echo $pay['id']; ?></td>
					<td><?PHP echo $pay['nomprenom']; ?></td>
                    <td><?PHP echo $pay['email']; ?></td>
                    <td><?PHP echo $pay['adresse']; ?></td>
                    <td><?PHP echo $pay['ville']; ?></td>
                    <td><?PHP echo $pay['etat']; ?></td>
                    <td><?PHP echo $pay['codepostal']; ?></td>
                    <td><?PHP echo $pay['cartenom']; ?></td>
                    <td><?PHP echo $pay['cartenum']; ?></td>
                    <td><?PHP echo $pay['expmois']; ?></td>
                    <td><?PHP echo $pay['expannee']; ?></td>
					<td><?PHP echo $pay['cvv']; ?></td>
					
					
					<td>
						<form method="POST" action="supprimerpaiement.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $pay['id']; ?> name="id">
						</form>
					</td>
					<td>
						<a href="modifierpaiement.php?id=<?PHP echo $pay['id']; ?>"> Modifier </a>
					</td>
				</tr>
            <?PHP
                }
            ?>
        </table>
        <div class="text-center">
    <button onclick="window.print()" class="btn btn-primary">Print</button>
                            </section>    
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
