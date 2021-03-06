<?php $this->load->view('partials/header2'); ?>

<div class="container" style="margin-top:200px;">
  <div class="row">
    <div class="col-9 centered">
			<p class="text-center" id="infoPembayaran"></p>

      <div class="d-inline-block bg-white shadow1 rounded p-3 w-100">
        <div class="row no-gutters">
          <div class="col-2 px-4 d-flex align-items-center">
            <img src="<?= base_url() . 'assets\img\logos\Logo-BCA-Icon-Only.png' ?>" alt="Logo-BCA-Icon-Only.png">
          </div>
          <div class="col-4 px-2">
            <p class="mb-2">No Rekening RUM</p>
            <p class="mb-2">Berita Acara</p>
            <p class="mb-2">Jumlah</p>
          </div>
          <div class="col-6 ml-auto">
            <p class="text-black text-right px-3 mb-2" style="font-size:20px;">BCA 1500760911 a/n Melysa olshop</p>
            <p class="text-black text-right px-3 mb-2" style="font-size:20px;"><?= $id_order; ?></p>
            <p class="text-black text-right px-3 mb-2 text-rum" style="font-size:20px;">Rp <?= number_format($grand_total->grand_total, 0, ",", ".") ?></p>
          </div>
        </div>
      </div>

      <div class="flex-w flex-sb-m p-t-25 p-b-25 p-lr-15-sm justify-content-end">
        <div class="size10 trans-0-4 m-t-20 m-b-202">
          <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href='<?= site_url('payment_conf') ?>'">
            Konfirmasi Pembayaran
          </button>
        </div>
        <div class="size10 trans-0-4 m-t-20 m-b-202 m-l-70">
          <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="location.href='<?= site_url('produk') ?>'">
            LANJUT BELANJA
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

<?php $this->load->view('partials/footer'); ?>

<script>
const date = new Date(new Date().getTime() + (24*60*60*1000));
const months = ['Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
const time = date.toLocaleTimeString();
const hourMinute = time.split(':');
hourMinute.pop();
const timeString = `${hourMinute.join(':')} ${time.split(' ')[1]}`;
const dateTimeFormat = `${timeString} ${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
document.getElementById("infoPembayaran").innerHTML = 'Mohon menyelesaikan pembayaran sebelum ' + dateTimeFormat;
</script>
