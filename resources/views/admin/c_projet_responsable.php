<?php
require('../config.php');

if(isset($_POST['save'])) 

{
        $responsable = htmlspecialchars($_POST['responsable']);
        $req = $bdd->prepare('INSERT INTO os_project_responsable() VALUES(:project_responsable_id, :project_responsable_libelle)'); 
        $req->execute(array( 
        	'project_responsable_id' => '', 
        	'project_responsable_libelle' => $responsable )); 

if($insert) {
header('location:creer_projet_responsable.php');
}

else {echo "Exite déjà";header('location:creer_projet_responsable.php');
}

}
mysql_close(); 
?>