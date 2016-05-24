$(document).ready(function() {
    var $mois = $('#listemois');
    var $visiteurs = $('#listeVisiteur');
     
    // chargement des mois
    $.ajax({
        url: 'c_validFrais.php',
        data: 'go', // on envoie $_GET['go']
        dataType: 'json', // on veut un retour JSON
        success: function(json) {
            $.each(json, function(index, value) { // pour chaque noeud JSON
                // on ajoute l option dans la liste
                $mois.append('<option value="'+ index +'">'+ value +'</option>');
            });
        }
    });
 
    // à la sélection d un moi dans la liste
    $mois.on('change', function() {
        var val = $(this).val(); // on récupère la valeur de la région
 
        if(val != '') {
            $visiteurs.empty(); // on vide la liste des départements
             
            $.ajax({
                url: 'c_validFrais.php',
                data: 'id_listemois='+ val, // on envoie $_GET['id_region']
                dataType: 'json',
                success: function(json) {
                    $.each(json, function(index, value) {
                        $visiteurs.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            });
        }
    });
});