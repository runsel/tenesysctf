      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Hai <?php echo $_SESSION['name']; ?> !</h4>
        </div>
      </div>

      <!-- Start Widget -->
      <?php
        $cek = mysql_query("SELECT * from player where id_player='$_SESSION[id]' ");
        $pn = mysql_fetch_array($cek);

        $cek2 = mysql_query("SELECT count(*) as total from lastsolved where username='$_SESSION[user]' ");
        $ttl = mysql_fetch_assoc($cek2);

      ?>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon bg-danger"><i class="ion-ios7-lightbulb"></i></span>
            <div class="mini-stat-info text-right text-muted">
              <span class="counter"><?php echo $pn['poin']; ?></span>Point
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
          <div class="mini-stat clearfix bx-shadow">
            <span class="mini-stat-icon bg-success"><i class="md md-flag"></i></span>
            <div class="mini-stat-info text-right text-muted">
              <span class="counter"><?php echo $ttl['total']; ?></span> Challenge solved
            </div>
          </div>
        </div>

        <div class="col-md-9 col-sm-9 col-lg-6">
          <div class="mini-stat clearfix bx-shadow">
            <div class="mini-stat-info text-right text-muted">
              <div class="row">
                <form>
                  <div class="col-sm-9 todo-inputbar">
                    <input type="password" id="reset" name="reset" class="form-control" placeholder="New password">
                  </div>
                  <div class="col-sm-3 todo-send">
                    <button class="btn-primary btn-block btn waves-effect waves-light" type="button" id="submit">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div> 
      <!-- End row-->