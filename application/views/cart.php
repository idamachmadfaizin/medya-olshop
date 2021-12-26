<?php $this->load->view('partials/header2'); ?>

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m slide" style="background-image: url(<?php echo base_url('assets/fashe/images/banner_carousel_product.jpg') ?>)">
  <!-- <h2 class="l-text2 t-center">Cart</h2> -->
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
  <div class="container">
    <!-- Cart item -->
    <?= form_open(site_url('cart/update')) ?>
    <div class="container-table-cart pos-relative">
      <div class="wrap-table-shopping-cart bgwhite">
        <table id="detail_cart" class="table table-shopping-cart">
          <thead class="thead-light">
            <tr class="table-head">
              <th class="column-1"></th>
              <th class="column-2">Product</th>
              <th class="column-3">Price</th>
              <th class="column-3 p-l-70">Quantity</th>
              <th class="column-4">Total</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cart as $carts) : ?>
              <tr class="table-row">
                <td class="column-1">
                  <div class="cart-img-product b-rad-4 o-f-hidden" onclick="window.location = '<?php echo site_url('cart/delete/' . $carts->id_cart) ?>'">
                    <a href="">
                      <img src="<?php echo base_url('assets/img/produk/' . $carts->url_image) ?>" alt="IMG-<?php $carts->nama_produk ?>">
                    </a>
                  </div>
                </td>
                <td class="column-2"><?php echo $carts->nama_produk ?></td>
                <td class="column-3">RP <?php echo number_format($carts->harga_produk, 0, ",", ".") ?></td>
                <td class="column-4">
                  <div class="flex-w bo5 of-hidden w-size17">
                    <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                      <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                    </button>

                    <input class="size8 m-text18 t-center num-product" type="number" name="<?php echo $carts->id_cart ?>" min="1" value="<?php echo $carts->qty_cart ?>">

                    <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                      <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                    </button>
                  </div>
                </td>
                <td class="column-5">RP <?php echo number_format($carts->qty_cart * $carts->harga_produk, 0, ",", ".")  ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
          <thead class="thead-light">
            <tr class="table-head">
              <th class="column-1"></th>
              <th class="column-2"></th>
              <th class="column-3"></th>
              <th class="column-3 p-l-70">GRAND TOTAL</th>
              <th class="column-4">RP <?php echo number_format($grand_total['grand_total'], 0, ",", ".") ?></th>
            </tr>
          </thead>
        </table>
      </div>
    </div>

    <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm justify-content-end">
      <div class="size10 trans-0-4 m-t-10 m-b-10">
        <!-- Button -->
        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
          Update Cart
        </button>
      </div>
      <?= form_close(); ?>
      <div class="size10 trans-0-4 m-t-10 m-b-10 m-l-70">
        <!-- Button -->
        <a href="<?= site_url('checkout') ?>" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
          CHECKOUT
        </a>
      </div>
    </div>

  </div>
</section>

<!-- <script type="text/javascript" src="<?php //echo base_url().'assets/js/jquery.js'
                                          ?>"></script> -->
<!-- Cart AJAX -->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#detail_cart').load("<?php //echo site_url('cart/load_cart');
                                ?>");
 
         
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php //echo site_url('product/delete_cart');
                        ?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script> -->

<?php $this->load->view('partials/footer'); ?>
