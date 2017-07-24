<?php
require('../config.php');

if(isset($_POST['save'])) 

{
        $identite = htmlspecialchars($_POST['identite']);
		$adresse = htmlspecialchars($_POST['adresse']);
        $req = $bdd->prepare('INSERT INTO os_project_executeur() VALUES(:project_executeur_id, :project_executeur_libelle, :project_executeur_adresse)'); 
        $req->execute(array( 
        	'project_executeur_id' => '', 
        	'project_executeur_libelle' => $identite, 
        	'project_executeur_adresse' => $adresse )); 

if($insert) {
header('location:creer_projet_executeur.php');
}

else {echo "Exite déjà";header('location:creer_projet_executeur.php');
}

}
mysql_close(); 
?>