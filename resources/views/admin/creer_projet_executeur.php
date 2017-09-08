<?php 
require('../config.php');
require('header.php'); ?>

	<div id="section">
	<section><br>
	
    <?php require('navbar.php'); ?>

<div id="content"> 
    <form action="c_projet_executeur.php" method="post">
    	<label>Identité de l'exécuteur</label><br/>
    	<input type="text" name="identite" required="required" placeholder="Saisir l'identité du responsable" /><br/>
    	<label>Adresse de l'exécuteur</label><br/>
    	<input type="text" name="adresse" required="required" placeholder="Saisir l'adresse du responsable" /><br/>
    	<input type="submit" name="save" value="Enregistrer" />
    </form>
    <div id="contenu_table">

    <table id="table" border="0px">
    	<tr>
    		<td></td>
    		<td>Identité</td>
    		<td>Adresse</td>
    	</tr>

        <?php 
    $reponse = $bdd->query('SELECT * FROM os_project_executeur ORDER BY project_executeur_id desc');  
    while ($donnees = $reponse->fetch()) { 

    echo'    <tr>
            <td style="width:70px;background:rgb(255,218,218)">
            ID : <strong>' . htmlspecialchars($donnees['project_executeur_id']) . '</strong></td>
            <td style="background:rgb(244,237,144)">'. htmlspecialchars($donnees['project_executeur_libelle']) . '</td>
            <td style="background:rgb(244,237,144)">'. htmlspecialchars($donnees['project_executeur_adresse']) . '</td>
        </tr>';
        }
    $reponse->closeCursor(); 
     ?>
    </table>
    </div>
</div>
</section>
</div><br>

<?php require('footer.php'); ?>