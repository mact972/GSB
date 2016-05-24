$("#listmois").on("change", function(){


		if($(this).val() == 0.0){

			$("#listVisiteur").empty();
		}
		else{

			$get("testajax.php", { "titi" : $(this).val() }, foncFiche);

			function foncFiche(data){

				$("#listVisiteur").html(data);
			}
		}


});