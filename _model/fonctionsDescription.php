<?php
 

$valid = 1;
 if (isset($_POST['id'])) {
	$idMooc = $_POST['id'];
	//echo $idMooc;
}else{
	$valid = 0;
	echo'erreur';
}
 
 
function getInfos()
{
	global $idMooc;
	include '_include/connect.inc.php';
	$select = $bdd->prepare("SELECT * FROM mooc WHERE id_mooc = $idMooc ");
    $select->execute();

    $lignes = $select->fetchAll();
	echo'<div class="content">
			<div class="main">
				<h3 class="name"> Type de Mooc : '.$lignes[0]["nom"].' </h3>
				<h3 class="name"> Description : '.$lignes[0]["description"].' </h3>
				<h3 class="name"> Prérequis : '.$lignes[0]["prerequis"].' </h3>
				<h3 class="name"> Durée estimée: '.$lignes[0]["duree"].' heures </h3>
				<h3 class="name"> Note : '.$lignes[0]["note"].' / 20 </h3>
			</div>
		</div>';
}


function getInfos2()
{
	global $idMooc;
	include '_include/connect.inc.php';
	$select = $bdd->prepare("SELECT * FROM mooc WHERE id_mooc = $idMooc ");
    $select->execute();

    $lignes = $select->fetchAll();

		 $scope_nom = $lignes[0]["nom"];
		 $scope_description = $lignes[0]["description"];
		 $scope_prerequis = $lignes[0]["prerequis"];
		 $scope_duree = $lignes[0]["duree"];
		 $scope_note = $lignes[0]["note"];
	
}

if($valid==1){
	getInfos2();
	//echo "okok";
}
?>