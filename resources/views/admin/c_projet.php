<?php
require('../config.php');

if(isset($_POST['save'])) 

{
        $abrege = htmlspecialchars($_POST['abrege']);
		$intitule = htmlspecialchars($_POST['intitule']);
		$categorie = htmlspecialchars($_POST['categorie']);
		$cout = htmlspecialchars($_POST['cout']);
		$responsable = htmlspecialchars($_POST['responsable']);
		$executeur = htmlspecialchars($_POST['executeur']);
		$date = htmlspecialchars($_POST['date']);
		$delai = htmlspecialchars($_POST['delai']);
		$phase = htmlspecialchars($_POST['phase']);
		$contenu = $_POST['contenu'];
        $req = $bdd->prepare('INSERT INTO os_project() VALUES(:project_id, :project__full_title, :project_resume_title,
        	:project_content,:project_cost,:project_responsable_id,:project_executeur_id,:project_date_publish,
        	:project_delai,:project_phase_id,:category_project_id)'); 
        $req->execute(array( 
        	'project_id' => '', 
        	'project__full_title' => $intitule, 
        	'project_resume_title' => $abrege,
        	'project_content' => $contenu,
        	'project_cost' => $cout,
        	'project_responsable_id' => $responsable,
        	'project_executeur_id' => $executeur,
        	'project_date_publish' => $date,
        	'project_delai' => $delai,
        	'project_phase_id' => $phase,
        	'category_project_id' => $categorie )); 

if($insert) {
header('location:creer_projet.php');
}

else {echo "Exite déjà";header('location:creer_projet.php');
}

}
?>