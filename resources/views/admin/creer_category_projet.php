<?php 
require('../config.php');
require('header.php'); ?>

	<div id="section">
	<section><br>
	
    <?php require('navbar.php'); ?>

<div id="content"> 
    <form action="c_category_projet.php" method="post">
    	<label>Résumé de la catégorie</label><br/>
    	<input type="text" name="resume" required="required" placeholder="TIC" /><br/>
    	<label>Détail de la catégorie</label><br/>
    	<input type="text" name="detail" required="required" placeholder="Technologie de l'Information et de la Communication" /><br/>
    	<input type="submit" name="save" value="Enregistrer" />
    </form>
    <div id="contenu_table">

    <table id="table" border="0px">
    	<tr>
    		<td></td>
    		<td>Résumé</td>
    		<td>Détail</td>
    	</tr>

        <?php 
    $reponse = $bdd->query('SELECT * FROM os_category_project ORDER BY category_project_id desc');  
    while ($donnees = $reponse->fetch()) { 

    echo'    <tr>
            <td style="width:70px;background:rgb(255,218,218)">
            ID : <strong>' . htmlspecialchars($donnees['category_project_id']) . '</strong></td>
            <td style="background:rgb(244,237,144)">'. htmlspecialchars($donnees['category_project_resume_title']) . '</td>
            <td style="background:rgb(244,237,144)">'. htmlspecialchars($donnees['category_project_full_title']) . '</td>
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