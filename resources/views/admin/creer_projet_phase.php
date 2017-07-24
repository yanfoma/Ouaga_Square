<?php 
require('../config.php');
require('header.php'); ?>

	<div id="section">
	<section><br>
	
    <?php require('navbar.php'); ?>

<div id="content"> 
    <form action="c_projet_phase.php" method="post">
    	<label>Intitulé de la phase de projet</label><br/>
    	<textarea name="phase" required="required" placeholder="Saisir l'intitulé de la phase du projet"></textarea><br/>
    	<input type="submit" name="save" value="Enregistrer" />
    </form>
    <div id="contenu_table">

    <table id="table" border="0px">
    	<tr>
    		<td></td>
    		<td>Phase</td>
    	</tr>

        <?php 
    $reponse = $bdd->query('SELECT * FROM os_project_phase ORDER BY project_phase_id desc');  
    while ($donnees = $reponse->fetch()) { 

    echo'    <tr>
            <td style="width:70px;background:rgb(255,218,218)">
            ID : <strong>' . htmlspecialchars($donnees['project_phase_id']) . '</strong></td>
            <td style="background:rgb(244,237,144)">'. htmlspecialchars($donnees['project_phase_libelle']) . '</td>
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