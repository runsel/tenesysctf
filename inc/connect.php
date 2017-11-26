<?php
function filter($data) {
    $data = htmlspecialchars(trim(htmlentities(strip_tags($data))));

    if (get_magic_quotes_gpc())
        $data = stripslashes($data);

    $data = mysql_real_escape_string($data);

    return $data;
}

function bln($data){
  switch ($data) {
    case 1:
      return "Jan";
      break;
    case 2:
      return "Feb";
      break;
    case 3:
      return "Mar";
      break;
    case 4:
      return "Apr";
      break;
    case 5:
      return "May";
      break;
    case 6:
      return "Jun";
      break;
    case 7:
      return "Jul";
      break;
    case 8:
      return "Aug";
      break;
    case 9:
      return "Sep";
      break;
    case 10:
      return "Oct";
      break;
    case 11:
      return "Nov";
      break;
    case 12:
      return "Dec";
      break;
}}

$server		= "localhost";
$username	= "bw16a251_clone";
$password	= "ndejail369";
$database 	= "bw16a251_clone";

mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

?>