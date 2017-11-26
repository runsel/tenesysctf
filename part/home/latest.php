<?php
$sesi_username      = isset($_SESSION['user']) ? $_SESSION['user'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username))
{

include_once "inc/connect.php";
?>
    <div class="col-md-6">
      <div class="panel panel-border panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Latest Solved</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Challenge</th>
                    <th>Category</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $cek = mysql_query("SELECT * from lastsolved order by id desc limit 10");
                  $n=1;
                  while ($last = mysql_fetch_array($cek)) {
                  $name = mysql_query("SELECT nama_lengkap from player where username='$last[username]' ");
                  $l = mysql_fetch_array($name);

                  //label for category 
                  switch ($last['kategori']) {
                    case 'Forensic':
                      $category = "label-success";
                      break;
                    case 'Crypto':
                      $category = "label-primary";
                      break;
                    case 'Web':
                      $category = "label-purple";
                      break;
                    case 'Reverse':
                      $category = "label-danger";
                      break; 
                    case 'Recon':
                      $category = "label-warning";
                      break;
                    case 'Pwn':
                      $category = "label-pink";
                      break;
                    case 'Misc':
                      $category = "label-default";
                      break;					  
                    default:
                      $category = "label-inverse";
                      break;
                  }

                ?>
                  <tr>
                    <td><?php echo $n; ?></td>
                    <td><?php echo $l['nama_lengkap']; ?></td>                    
                    <td><?php echo $last['nama_soal']; ?></td>
                    <td><span class="label <?php echo $category; ?>"><?php echo $last['kategori']; ?></span></td>
                    <td><?php echo $last['waktu']; ?></td>
                  </tr>
                <?php
                  $n++;
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
}else{
  session_destroy();
  header('Location:../../404.php');
}
?>