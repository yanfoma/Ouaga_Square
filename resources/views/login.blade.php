<html>
<head>
<title>LOGIN</title>
<meta charset="utf-8"/>	
<link rel="stylesheet" type="text/css" href="css/login.css">	

</head>
<body>
	<div id="connection">
		<img src="images/logo.png">
		<form method="post" action="<?= URL::to('/log') ?>">
			<br/><br/><br/>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="nom" placeholder="Identifiant" required="required" id="input" style="padding-left: 10px" /><br/><br/><br/>
				<input type="password" name="mdp" placeholder="Mot de passe" required="required" id="input" style="padding-left: 10px"  /><br/><br/><br/>
				<input type="submit" name="connecter" value="Se connecter" />
		</form>
			<p>Vous n’avez pas de compte ?</p>
			<p><a href="">Inscription</a></p>
	</div>
</body>
</html>
