<?php
	if (empty($_POST['pass']))
	{
		echo "Veuillez-remplir le champ mot de passe SVP !";
	}
	elseif ($_POST['pass'] == 'kangourou') 
	{
?>
		<h1>Les codes d'accès :</h1>
    	<p><strong>0000-1111-2222-3333-4444-5555</strong></p>
<?php
	}
	else
	{
		echo "<p>Mot de passe incorrect !</p>";
	}
?>