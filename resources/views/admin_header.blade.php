
<html>
<head>
	<meta charset="utf-8"/>
	<title>OuagaSquare - Administration</title>
	<link rel="stylesheet" type="text/css" href="css/makete_index.css">
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div id="image"><a href="index"><img src="images/logo.png" width="75px"></a></div>
	
	<div id="header">
	<header>
	<div id="makete_main">
	<div id="makete_menus_tohead">
	<ul>
		<li><a href="backup" style="width: 120px">Backup</a></li>
		<li><a href="#">Logout</a></li>
	</ul>
	</div><br>
		<div id="makete_menu">
			<ul>
			<li><a href="creer_categorie_projet">Projets</a></li>
			<li><a href="#">Utilisateurs</a></li>
			<li><a href="#">Messages</a></li>
			<li><a href="#">Plugins</a></li>
			
			</ul><br><br>
			<form method="post" action="#" id="form_rech" style="float:right;padding-right: 0px">
			<input type="text" name="recherche" id="recherche"/>
			<input type="submit" name="submit" value="recherche" id="submit"/>
			</form>
			<br><hr width="105%">

		</div>
		<span style="padding-left: 10px">Bienvenue {{ Auth::user()->name }}<em>></em></span>
		<span><a href="admin_index">Menu <em> ></em></a></span>
		
	</div>
	</header>
	</div><br>
			