<?php
session_start();
$sesi_username      = isset($_SESSION['user']) ? $_SESSION['user'] : NULL;
if ($sesi_username != NULL || !empty($sesi_username))
{

include_once "header.php";
include_once "part/menu.php";

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">

    <div class="row">
      <div class="col-sm-12">
        <h4 class="pull-left page-title">Information !</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-fill">

          <div class="panel-body"> 
            <div class="timeline-2">
			
			<div class="time-item">
                <div class="item-info">
                  <div class="text-muted">05/08/2016</div>
                  <p><em>Penambahan misi baru pada kategori Reconaissance : 
				  <br/> - Where The Flag (80) Medium
				  <br/> - The Stalker (40) Easy
                  </em></p>
                </div>
              </div>
			
			<div class="time-item">
                <div class="item-info">
                  <div class="text-muted">04/08/2016</div>
                  <p><em>Penambahan misi baru pada kategori Reconaissance dan Pwn Exploitation : 
				  <br/> - Esoteric (70) Medium
				  <br/> - Agent Test (50) Easy
                  </em></p>
                </div>
              </div>
			
			<div class="time-item">
                <div class="item-info">
                  <div class="text-muted">02/08/2016</div>
                  <p><em>Penambahan menu Explanation dan misi baru pada kategori Digital Forensic : 
				  <br/> - The Message From Planet QR (90) Medium
                  </em></p>
                </div>
              </div>
			  
			<div class="time-item">
                <div class="item-info">
                  <div class="text-muted">27/07/2016</div>
                  <p><em>Penambahan misi baru pada kategori Miscellaneous, Cryptography dan Web Exploitation :
				  <br/> - Shake Shake Shake (65) Medium
				  <br/> - The Headmaster (20) Easy
				  <br/> - Javanese Script Is Funny (25) Easy
				  <br/> - Secure Safes (55) Medium
                  </em></p>
                </div>
              </div>
			  
			<div class="time-item">
                <div class="item-info">
                  <div class="text-muted">23/07/2016</div>
                  <p><em>Penambahan misi baru pada kategori DIgital Forensic : 
				  <br/> - Smile, View & Copy (20) Easy
				  <br/> - Secret Document (70) Medium</em></p>
                </div>
              </div>
			  
			<div class="time-item">
                <div class="item-info">
                  <div class="text-muted">17/07/2016</div>
                  <p><em>Misi akan terus bertambah dengan waktu yang tidak ditentukan.</em></p>
                </div>
              </div>
			  
              <div class="time-item">
                <div class="item-info">
                  <div class="text-muted">16/07/2016</div>
                  <p><em>Website masih dalam tahap perkembangan, apabila menemukan bug harap kontak administrator.</em></p>
                </div>
              </div>
			  
			  <div class="time-item">
                <div class="item-info">
                  <div class="text-muted">15/07/2016</div>
                  <p><em>Selamat datang di TenesysCTF</em></p>
                </div>
              </div>
			  <!--
			  <div class="time-item">
                <div class="item-info">
                  <div class="text-muted">03/07/2016</div>
                  <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                  <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                </div>
              </div>
			  -->
            </div>

          </div> 
        </div>
        </div>

      </div> <!-- End Row -->


    </div> <!-- container -->

  </div> <!-- content -->

  <footer class="footer text-right">
    2016 © Tenesys.
  </footer>

</div>

</div>
<!-- END wrapper -->

<script>
  var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/waves.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="assets/jquery-detectmobile/detect.js"></script>
<script src="assets/fastclick/fastclick.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="assets/jquery-blockui/jquery.blockUI.js"></script>


<!-- CUSTOM JS -->
<script src="js/jquery.app.js"></script>

</body>
</html>
<?php
}else{
  session_destroy();
  header('Location:../../404.php');
}
?>