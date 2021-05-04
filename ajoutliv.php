<?php require '../views\inc\header_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
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
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

<!-- /#left-panel -->


    <!-- Left Panel -->

    <!-- Right Panel -->

    
        </header><!-- /header -->
        <!-- Header-->

       
        
                <div class="container">
                    <div class="jumbotron">
            
                    <form method="POST" name="MonForm" action="ajoutlivraison.php" onsubmit="return valider()">
                           
                        <div class="input-group">
                            Nom : <br/>
                                    <input type="text" name="nom" class="form-control" pattern="[a-zA-Z-\.]{3,12}" placeholder="Nom de livraison">
                        </div>
                    </br>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                   DATE <input class="input--style-1 js-datepicker" type="date"  name="date">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </br>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input type="hidden" value="en cours" name="etat">
                                    </div>
                                </div>
                            </div>
                        </div> </br>
                        <div><input type="hidden" value="50" name="total"></div>
                        <div><input type="hidden" value="50" name="prenom"></div>
                        <?php
                        include "../model/livreur.php";
include "../Controller/livreurc.php";
$livreur1c=new livreurc();
                                $result2=$livreur1c->afficherlivreur();

                       ?>
                        <th>livreur</th>
          <td><select name="livreur">
              <?php
              foreach ($result2 as $row) {
              ?>
                <option value="<?PHP echo  $row['nom']; ?>"><?PHP echo $row['nom']; ?></option>
              <?PHP
              }
              ?>

                        
                        
            </select></td>

                                
                                    <div class="rs-select2 js-select-simple select--no-search">
                                       adresse: <input type="text"  class="form-control" pattern="[a-zA-Z-\.]{3,12}" name="adresse">
                                    
                                </div>
                            </div>
                        
                        <div class="p-t-20">
                            
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




