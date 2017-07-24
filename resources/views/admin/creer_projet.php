<?php 
require('../config.php');
require('header.php'); ?>

	<div id="section">
	<section><br>
	
    <?php require('navbar.php'); ?>

<div id="content"> 
    <form action="c_projet.php" method="post" style="width: 100%">
        <div id="cprojet">
    	<label>Intitulé en abrégé du projet</label><br/>
    	<input type="text" name="abrege" required="required" placeholder="" />
        <label>Intitulé du projet</label><br/>
        <input type="text" name="intitule" required="required" placeholder="" /><br/>
    	<label>Categorie du projet</label><br/>
    	<select name="categorie">
            <?php 
                $select = $bdd->query('SELECT * FROM os_category_project')or die(mysql_error()); 
                while($categorie = $select->fetch()) 
                    {
                        echo '<option value="'.$categorie['category_project_id'].'">'.$categorie['category_project_resume_title'].'</option>'; 
                    }
            ?>
        </select>
        <label>Cout du projet</label><br/>
        <input type="text" name="cout" required="required" placeholder="" /><br/>
        <label>Identité du responsable</label><br/>
        <select name="responsable">
            <?php 
                $select = $bdd->query('SELECT * FROM os_project_responsable')or die(mysql_error()); 
                while($responsable = $select->fetch()) 
                    {
                        echo '<option value="'.$responsable['project_responsable_id'].'">'.$responsable['project_responsable_libelle'].'</option>'; 
                    }
            ?>
        </select>
        <label>Identité de l'exécuteur</label><br/>
        <select name="executeur">
            <?php 
                $select = $bdd->query('SELECT * FROM os_project_executeur')or die(mysql_error()); 
                while($executeur = $select->fetch()) 
                    {
                        echo '<option value="'.$executeur['project_executeur_id'].'">'.$executeur['project_executeur_libelle']. ' '.$executeur['project_executeur_adresse'].'</option>'; 
                    }
            ?>
        </select>
       
        <label>Délai du projet</label><br/>
        <input type="text" name="delai" required="required" placeholder="" /><br/>
        
    	
        </div>
        <div style="width: 55%;">
          <textarea name="contenu" required="required" class="ckeditor" placeholder="Saisir le contenu du projet"></textarea>   
        </div>
        <div style="width: 55%;margin-top: 13px">
            <label>Date de publication</label>
            <span style="margin-left: 25%">Phase du projet</span><br/>
            <input type="date" name="date" required="required" placeholder="" style="width: 48%;" />
        <select name="phase" style="width: 48%;">
            <?php 
                $select = $bdd->query('SELECT * FROM os_project_phase')or die(mysql_error()); 
                while($phase = $select->fetch()) 
                    {
                        echo '<option value="'.$phase['project_phase_id'].'">'.$phase['project_phase_libelle'].'</option>'; 
                    }
            ?>
        </select>
        </div>
        <input type="submit" name="save" value="Enregistrer" style="width: 93%"/>
    </form>
</div>
</section>
</div><br>

<?php require('footer.php'); ?>