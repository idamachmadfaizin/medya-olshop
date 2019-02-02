<?php $this->load->view('partials/header2'); ?>

  <div class="container" style="margin-top: 220px;">
    <div class="row">
      <div class="col-3">
      </div>


      <!-- start -->
      <div class="col-lg-6">
        <form action="#" method="post" class="">
          <div class="form-group">
            <div class="container-fluid">
              <div class="row no-gutters">
                <div class="col-1">
                </div>
                <div class="col-11">
                  <span class="font-weight-bold">Login with email</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="container-fluid">
              <div class="row no-gutters">
                <!-- <div class="input-group"> -->
                  <div class="col-1 no-gutters">
                    <span style="padding: 11px 0px;" class="d-flex justify-content-center">
                    <i class="fa fa-envelope"></i>
                    </span>  
                  </div>
                  <div class="col-11">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                  </div>
                <!-- </div> -->
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="container-fluid">
              <div class="row no-gutters">
                <!-- <div class="input-group"> -->
                  <div class="col-1 no-gutters">
                    <span style="padding: 11px 0px;" class="d-flex justify-content-center">
                      <i class="fas fa-lock"></i>
                    </span>  
                  </div>
                  <div class="col-11">
                    <input type="password" name="pass" placeholder="Password" class="form-control">
                  </div>
                <!-- </div> -->
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="container-fluid">
              <div class="row no-gutters">
                <!-- <div class="input-group"> -->
                  <div class="col-1 no-gutters"> 
                  </div>
                  <div class="col-11">
                    <button type="submit" class="btn btn-danger btn-block">Login</button>
                  </div>
                <!-- </div> -->
              </div>
            </div>
          </div>
        </form>

      <div class="col-3">
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="margin-top: 153px; padding: 0px;">
  <div class="row no-gutters">
    <div class="col">
      <a href="<?= site_url()?>/register">
        <button class="btn btn-light btn-block" style="height: 60px;">Create a New Account</button>
      </a>
    </div>
  </div>
</div>


  <?php $this->load->view('partials/footer-script'); ?>

  </body>
</html>
  
  <?php //$this->load->view('partials/footer'); ?>