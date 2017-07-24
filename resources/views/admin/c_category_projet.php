<?php
require('../config.php');

if(isset($_POST['save'])) 

{
        $resume = htmlspecialchars($_POST['resume']);
		$detail = htmlspecialchars($_POST['detail']);
        $req = $bdd->prepare('INSERT INTO os_category_project() VALUES(:category_project_id, :category_project_full_title, :category_project_resume_title)'); 
        $req->execute(array( 
        	'category_project_id' => '', 
        	'category_project_full_title' => $detail, 
        	'category_project_resume_title' => $resume )); 

if($insert) {
header('location:creer_category_projet.php');
}

else {echo "Exite déjà";header('location:creer_category_projet.php');
}

}
mysql_close(); 
?>