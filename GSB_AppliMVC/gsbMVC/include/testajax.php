<?php
require_once ("include/class.pdogsb.inc.php");

$pdo1 = PdoGsb::getPdoGsb();

$titi = $_REQUEST['titi'];

$lesLignes=$pdo1->getInfos($titi);

foreach ($lesLignes as $key) {
	
	$nom = $key['nom'];

	echo "<option>".$nom."</option>";
}



?>