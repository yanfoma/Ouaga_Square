<?php
require('../config.php');

if(isset($_POST['save'])) 

{
        $phase = htmlspecialchars($_POST['phase']);
        $req = $bdd->prepare('INSERT INTO os_project_phase() VALUES(:project_phase_id, :project_phase_libelle)'); 
        $req->execute(array( 
        	'project_phase_id' => '', 
        	'project_phase_libelle' => $phase )); 

if($insert) {
header('location:creer_projet_phase.php');
}

else {echo "Exite déjà";header('location:creer_projet_phase.php');
}

}
mysql_close(); 
?>