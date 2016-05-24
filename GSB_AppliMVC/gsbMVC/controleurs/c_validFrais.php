<?php
include("vues/v_sommairecompta.php");
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];
switch($action){

	case 'validerFrais':{
		break;
	}


}

//requete pour récupré les moi disponible 
$moiVis = $pdo->getLesMoisDisponibles($idVisiteur);

foreach ($moiVis as $key ) {
	
	$toto = $key['mois'];

    //requete pour recupéré des infos visiteur
	$vis = $pdo->getInfos($toto);

	foreach ($vis as $key) {
		
		$viss = $key['idVisiteur'];

        //requete pour récupéré les frais hors forfaits
		$infoHF = $pdo->getLesFraisHorsForfait($viss,$toto);
		
        //requete pour récupéré les forfaits
        $infoFr = $pdo->getLesFraisForfait($viss, $toto);
		
        //requete pour récupéré les justificatifs
        $justi = $pdo->getNbjustificatifs($viss, $toto);
		
	}

}



/*if(isset($_GET['go']) || isset($_GET['id_region'])) {
 
    $json = array();
     
    if(isset($_GET['go'])) {
        // requête qui récupère les régions
        $requete = "SELECT id, nom FROM regions ORDER BY nom";
    } else if(isset($_GET['id_region'])) {
        $id = htmlentities(intval($_GET['id_region']));
        // requête qui récupère les départements selon la région
        $requete = "SELECT id, nom FROM departements WHERE id_region = ". $id ." ORDER BY nom";
    }
     
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
     
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json[$donnees['id']][] = utf8_encode($donnees['nom']);
    }
     
    // envoi du résultat au success
    echo json_encode($json);
}*/


	
include("vues/v_validFrais.php");

