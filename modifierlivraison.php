
<html lang="fr">
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
    <section class="blog-banner-area" id="blog">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>modification</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">livraison</a></li>
              <li class="breadcrumb-item active" aria-current="page">modification</li>
            </ol>
          </nav>
                </div>
            </div>
    </div>
    </section>
    
<?PHP
include "../model/livraison.php";
include "../controller/livraisonc.php";
if (isset($_GET['id'])){
	$livraison1c=new livraisonc();
    $result=$livraison1c->recupererlivraison($_GET['id']);
	foreach($result as $row){
		$cin=$row['id'];
		$nom=$row['nom'];
		$prenom=$row['adresse'];
		$nbH=$row['etat'];
        $tarifH=$row['total'];
        $tarif=$row['date'];
        $tarifs=$row['livreur'];
?>
 
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">modification</h2>
<center>
<form method="POST">
<table>
<caption>Modifier livraison</caption>
<tr>
<td>id===>:</td>
<td><input type="number" name="id" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom     ===>   :</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>adresse     ===>    :</td>
<td><input type="text" name="adresse" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>etat      ===> :</td>
<td><input type="text" name="etat" value="<?PHP echo $nbH ?>"></td>
</tr>
<tr>
<td>total      ===> :</td>
<td><input type="text" name="total" value="<?PHP echo $tarifH ?>"></td>
</tr>
<tr>
<td>date         ===> :</td>
<td><input type="date" name="date" value="<?PHP echo $tarif ?>"></td>
</tr>

                       

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
</center>
<?PHP
	}
}
else {echo "verifier";}
if (isset($_POST['modifier'])){
	$livraison1=new livraison($_POST['id'],$_POST['nom'],$_POST['adresse'],$_POST['total'],$_POST['date'],$_POST['etat'],$_POST['livreur']);
	$livraison1c->modifierlivraison($livraison1,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: checkout.php');
}
?>
</body>
</HTMl>