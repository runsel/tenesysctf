<?php
require_once "../inc/connect.php";

$judul = htmlspecialchars(htmlentities($_GET['judul']));
echo $judul."</br>";
echo htmlspecialchars_decode(html_entity_decode(($judul));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
 <form method="GET" action="">
 	<input type="text" name="judul" placeholder="Judul"></input></br>
 	<button type="submit" value="submit">submit</button></br>
 </form>
</body>
</html>