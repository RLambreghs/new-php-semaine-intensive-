<html>
<head>
	<title>Ajouté les Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {

	$date = $_POST['date'];
	$nombreDePersonne = $_POST['nombreDePersonne'];
	$horaire = $_POST['heure'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['mail'];
	$telephone = $_POST['numtel'];



	// vérification des champs vides
	if(empty($date) || empty($nombreDePersonne) || empty($horaire) || empty($nom) || empty($prenom) || empty($email) || empty($telephone)) {

		if(empty($date)) {
			echo "<font color='red'>Le champs date est vide</font><br/>";
		}

		if(empty($nombreDePersonne)) {
			echo "<font color='red'>Le champs nombre de personne est vide</font><br/>";
		}

		if(empty($horaire)) {
			echo "<font color='red'>L'horaire n'a pas été selectionné</font><br/>";
		}

		if(empty($nom)) {
			echo "<font color='red'>Le champs nom est vide</font><br/>";
		}

		if(empty($prenom)) {
			echo "<font color='red'>Le champs prénom est vide</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Le champs email est vide</font><br/>";
		}

		if(empty($telephone)) {
			echo "<font color='red'>Le champs telephone est vide</font><br/>";
		}


		//lien vers la page précédente
		echo "<br/><a href='javascript:self.history.back();'>Revenir en arrière</a>";
	} else {
		// if all the fields are filled (not empty)

		//insertion de donnée dans la DATABASE
		$result = "INSERT INTO reservation (date, nombreDePersonne, nom, prenom, email, telephone) VALUES('$date','$nombreDePersonne','$nom', '$prenom','$email', '$telephone')";

		//affichage du message de réussite
		echo "<font color='green'>Data ajouté avec succès";
		echo "<br/><a href='index.php'>Voir résultat</a>";
	}
}
?>
</body>
</html>
