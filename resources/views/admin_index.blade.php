@include('admin_header'); 

	<div id="section">
	<section><br>
	<ul id="makete_tabs">
    <li><a href="#tab1" name="tab1">Accueil</a></li>  
</ul>

<div id="content"> 
    <div id="accueil"><img src="images/admin/merci.png"></div>

<table border="0" width="70%" height="200px">
	<tr>
		<td><a href="creer_categorie_projet"><img src="images/admin/img-01.png"/></a></td>
		<td>Gestion des projets</td>
		<td><a href=""><img src="images/admin/img-05.png"/></a></td>
		<td>Gestion des utilisateurs</td>
		<td><a href=""><img src="images/admin/img-06.png"/></a></td>
		<td>Statistiques</td>
	</tr>
	<tr>
		<td><a href=""><img src="images/admin/img-02.png"/></a></td>
		<td>Gestion des messages</td>
		<td><a href="backup"><img src="images/admin/img-04.png"/></a></td>
		<td>Sauvegarde de la BDD</td>
		<td><a href=""><img src="images/admin/img-03.png"/></a></td>
		<td>Deconnexion</td>
	</tr>
</table>
</div>
</section>
</div><br>

@include('admin_footer'); 