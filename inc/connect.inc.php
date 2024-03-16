
	

<?php
//mysql_connect("sql212.infinityfree.com","if0_36147757","ivVrgBegmMCER") or die("Couldn't connet to SQL server");
//mysql_select_db("if0_36147757_ebuybd") or die("Couldn'ttt select DB");
$servername = "sql111.infinityfree.com";
$username = "if0_36147757";
$password = "ivVrgBegmMCER";
$database = "if0_36147757_ebuybd";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>
