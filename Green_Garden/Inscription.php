<html>
<head>
<link rel="stylesheet" href="CSS/Inscription_client.css">
</head>
<body>
<form name="inscription" method="post" action="">
<p>Vous êtes un:</p>
<input type="radio" id="Particulier" name="client" values="Particulier"
<label for="Particulier">Particulier</label>
<input type="radio" id="Professionnel" name="client" values="Professionnel"
<label for="Professionnel">Professionnel</label><br /><br />
Login:<br />
<input type="text" id="le_Login" name="Un_login" values="Login"><br /><br />
Email:<br />
<input type="email" id="Le_mail" name="Un_mail" values="Email"><br /><br />
Mot de passe:<br />
<input type="password" id="Le_MDP" name="Mot_de_passe" values="password"><br /><br />
Confirmer le mot de passe:<br />
<input type="password" id="Confirme" name="Confirmer_MDP" values="password"><br /><br />
<button type="submit"  id="Inscription_client" name="Inscription" values="Inscription">Inscription</button>
</form>
</body>
</html>