<?php $this->load->view('partials/header2'); ?>

<div class="container-fluid" style="margin-top:80px; background-color:#F3F3F1;">
  <?= form_open_multipart(site_url('profile/update')); ?>
  <div class="row">

    <?php $this->load->view('partials/side_menu_customer'); ?>

    <div class="col-9">
      <div class="bg-white nav-bar-right-white shadow1">
        <p class="text-black text-18 mb-1 font-weight-bold">My Profile</p>
        <p class="text-12">Kelola informasi profil anda untuk mengontrol, melindungi, dan mengamankan akun</p>

        <hr>

        <?php if (validation_errors()) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= validation_errors(); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('updated')) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('updated'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <!-- message jika data tidak lengkap -->
        <?php if ($this->session->flashdata('incompleteData')) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('incompleteData'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>

        <div class="row justify-content-end mt-30">
          <div class="col-9">
            <img src="<?= base_url() . "upload/profile/" . $profile->url_img_customer; ?>" class="rounded-circle float-left size-50" alt="IMG-Profile">

            <div class="form-group float-left ml-4 input-image-profile">
              <!-- <input type="file" name="image-profile" id="image-profile"><br> -->
              <?= form_upload('userfile'); ?><br>
              <label for="userfile" class="text-secondary text-12">Max size: 1 MB. Format: *JPG, *PNG</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-3">
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Email</div>
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Nomor Telepon</div>
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Nama Lengkap</div>
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Jenis Kelamin</div>
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Tanggal Lahir</div>
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Pendidikan</div>
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Pendapatan</div>
            <div class="d-flex align-items-center justify-content-end text-secondary d-block-h-45">Address</div>
          </div>

          <div class="col-9">
            <div class="d-flex align-items-center d-block-h-45">
              <div class="text-dark"><?= $profile->email_customer; ?></div>
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <input type="tel" name="telp" id="telp" value="<?= $profile->nomor_telp; ?>" placeholder="Telephone" class="form-control form-control-sm">
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <input type="text" name="nama" id="nama" value="<?= $profile->nama_customer; ?>" placeholder="Nama Lengkap" class="form-control form-control-sm">
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <label class="custom-radio">Pria
                <input type="radio" <?php if ($profile->jenis_kelamin == "Pria") echo "checked"; ?> name="jenis_kelamin" value="Pria">
                <span class="checkmark"></span>
              </label>
              <label class="custom-radio ml-3">Wanita
                <input type="radio" <?php if ($profile->jenis_kelamin == "Wanita") echo "checked"; ?> name="jenis_kelamin" value="Wanita">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <input type="date" name="tanggal_lahir" value="<?= $profile->tanggal_lahir; ?>" id="tanggal_lahir" class="form-control form-control-sm">
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <select name="pendidikan" id="pendidikan" class="form-control form-control-sm">
                <option value="">Pendidikan</option>
                <?php foreach ($pendidikans as $pendidikan) : ?>
                  <option value="<?= $pendidikan->id_pendidikan ?>" <?php if ($profile->id_pendidikan == $pendidikan->id_pendidikan) echo "selected"; ?>><?= $pendidikan->nama_pendidikan ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <select name="pendapatan" id="pendapatan" class="form-control form-control-sm">
                <option value="">Pendapatan</option>
                <option value="1" <?php if ($profile->pendapatan == 1) echo "selected"; ?>>
                  < Rp 2.000.000</option> <option value="2" <?php if ($profile->pendapatan == 2) echo "selected"; ?>>Rp 2.000.000 - Rp 4.999.999
                </option>
                <option value="3" <?php if ($profile->pendapatan == 3) echo "selected"; ?>>Rp 5.000.000 - Rp 9.999.999</option>
                <option value="4" <?php if ($profile->pendapatan == 4) echo "selected"; ?>>Rp 10.000.000 - Rp 19.999.999</option>
                <option value="5" <?php if ($profile->pendapatan == 5) echo "selected"; ?>>> Rp 20.000.000</option>
              </select>
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <select name="provinsi" id="provinsi" class="form-control form-control-sm">
                <option value="">Provinsi</option>
                <?php foreach ($provinsis as $provinsi) : ?>
                  <option value="<?= $provinsi->id_provinsi ?>" <?php if ($profile->provinsi == $provinsi->id_provinsi) echo "selected"; ?>><?= $provinsi->nama_provinsi ?></option>
                <?php endforeach ?>
              </select>
              <select name="kabupaten" id="kabupaten" class="form-control form-control-sm">
                <?php if ($profile->kabupaten) : ?>
                  <option value="<?= $profile->kabupaten ?>"><?= $profile->nama_kabupaten ?></option>
                <?php else : ?>
                  <option value="">Kabupaten</option>
                <?php endif ?>
              </select>
              <select name="kota" id="kota" class="form-control form-control-sm">
                <?php if ($profile->kota) : ?>
                  <option value="<?= $profile->kota ?>"><?= $profile->nama_kota ?></option>
                <?php else : ?>
                  <option value="">Kota</option>
                <?php endif ?>
              </select>
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <input type="text" name="address" id="address" value="<?= $profile->address; ?>" placeholder="Your Address" class="form-control form-control-sm">
            </div>
            <div class="d-flex align-items-center d-block-h-45">
              <input type="submit" value="SAVE" class="btn btn-primary border-0 d-block-w-100" style="background-color: #3D2577">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?= form_close() ?>
</div>
<?php $this->session->unset_userdata('updated'); ?>
<?php $this->session->unset_userdata('incompleteData'); ?>


<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->

<script src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#provinsi").on('change', function() {
      getKabupaten($(this).val())
    });

    $("#kabupaten").on('change', function() {
      getKota($(this).val())
    });

    function getKabupaten(provinsi) {
      $.ajax({
        url: "<?= site_url('profile/getKabupaten') ?>",
        type: "POST",
        data: {
          "provinsi": provinsi
        },
        success: function(data) {
          $("#kabupaten").html(data);
          $("#kabupaten").prop('disabled', false);
        }
      });
    }

    function getKota(kabupaten) {
      $.ajax({
        url: "<?= site_url('profile/getKota') ?>",
        type: "POST",
        data: {
          "kabupaten": kabupaten
        },
        success: function(data) {
          $("#kota").html(data);
          $("#kota").prop('disabled', false);
        }
      });
    }
  });
</script>

<?php $this->load->view('partials/footer'); ?>
