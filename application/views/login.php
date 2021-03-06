<?php $this->load->view('partials/header2'); ?>

<div class="d-flex align-items-center" style="margin-top:80px; height:498px;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-3"></div>

      <!-- start -->
      <div class="col-lg-6">
        <?= form_open() ?>
          <div class="form-group">
            <div class="row">
              <div class="col-1">
              </div>
              <div class="col-11">
                <?php if(validation_errors()): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= validation_errors(); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('error_session')):?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('error_session'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>

                <span class="font-weight-bold">Login</span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-1">
                <span style="padding: 11px 0px;" class="d-flex justify-content-center">
                  <i class="fa fa-envelope"></i>
                </span>  
              </div>
              <div class="col-11">
                <input type="email" name="email" value="<?= set_value('email');?>" placeholder="Email" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-1">
                <span style="padding: 11px 0px;" class="d-flex justify-content-center">
                  <i class="fas fa-lock"></i>
                </span>
              </div>
              <div class="col-11">
                <input type="password" name="password" placeholder="Password" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-1"></div>
              <div class="col-11">
                <button type="submit" class="btn btn-danger btn-block">Login</button>
              </div>
            </div>
          </div>
        <?= form_close(); ?>
      </div>
      <div class="col-3"></div>
    </div> <!-- end row -->
  </div> <!-- End container -->
</div>
<?php $this->session->unset_userdata('error_session'); ?>

<div class="fixed-bottom">
  <a href="<?= site_url('register')?>">
    <button class="btn btn-light btn-block" style="height: 60px;">Create a New Account</button>
  </a> 
</div>

<?php $this->load->view('partials/footer-script'); ?>

</body>
</html>
