<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{

	$date = $_POST['date'];
	$nombreDePersonne = $_POST['nombreDePersonne'];
	$horaire = $_POST['heure'];
	$nom = $_POST['nom'];
	$prenom = $_POST['name'];
	$email = $_POST['mail'];
	$telephone = $_POST['numtel'];

	//vérification des champs vides
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
	} else {
		//updating the table
		$result = "UPDATE reservation SET name='$name',age='$age',email='$email' WHERE id=$id";

		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result ="SELECT * FROM reservation WHERE id=$id";

while($res = ($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
