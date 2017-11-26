<?php
session_start();
include "../../inc/connect.php";

if (!empty($_POST['reset'])) {
$pass = md5(filter($_POST['reset']));
$iduser = filter($_SESSION['id']);

mysql_query("UPDATE player set password='$pass' where id_player='$iduser' ");
echo "<script>
	swal({
      title: 'Password Changes!',
      type: 'success'
    },function(){
      window.setTimeout(function(){location.reload()});
    });
</script>";

} else {
echo "<script>
	swal({
      title: 'Error!',
      text: 'Password didn't changes,
      type: 'error'
    });
</script>";
}
?>