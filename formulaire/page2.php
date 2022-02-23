<!DOCTYPE html>
<html>
<head>

<title>Ma première page PHP</title>
</head>
<body>
<?php
$nom = $_POST ['nom'];
$prenom = $_POST ['prenom'];
$civilite = $_POST ['civilite'];
$classes = $_POST ['classe'];
if ( $civilite == 'G')
	echo 'Bienvenue Mr ';
else
	echo ' Bienvenue Mme ';

echo " $prenom $nom , vous êtes dans la classe $classes" ;

?>
<br>
<a href="page1.php">Page1</a>
</body>
</html>
