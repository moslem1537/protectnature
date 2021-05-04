<?php

include "../model/livreur.php";
include "../controller/livreurc.php";


$q=$_REQUEST["q"];
 $livreur2c=new livreurc();
                              $result3=$livreur2c->recupererlivreur2($q);
                                foreach($result3 as $row){

$hint=$row['date'];
}
//$hint='f';

echo $hint === "" ? "no suggestion" : $hint;
?>