<?php $this->load->view('partials/header2'); ?>

<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="<?php echo base_url() ?>" class="s-text16">
		Home
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="<?php echo site_url('produk') ?>" class="s-text16">
		Product
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="<?= site_url('produk?kategori=' . $detailProduk[0]['id_kategori']) ?>" class="s-text16">
		<?php echo $detailProduk[0]['nama_kategori'] ?>
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">
		<?php echo $detailProduk[0]['nama_produk'] ?>
	</span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="wrap-slick3-dots"></div>

				<div class="slick3">
					<?php foreach ($detailProduk as $key => $detail) : ?>
						<div class="item-slick3" data-thumb="<?php echo base_url('upload/produk/' . $detail['url_image']); ?>">
							<div class="wrap-pic-w">
								<img src="<?php echo base_url('upload/produk/' . $detail['url_image']); ?>" alt="IMG-PRODUCT">
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h4 class="product-detail-name m-text16 p-b-13">
				<?php echo $detailProduk[0]['nama_produk'] ?>
			</h4>

			<span class="m-text17">
				Rp <?php echo number_format($detailProduk[0]['harga_produk'], 0, ",", ".") ?>
			</span>

			<!--  -->
			<div class="p-t-33 p-b-60">

				<div class="flex-r-m flex-w p-t-10">
					<div class="w-size16 flex-m flex-w">
						<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
							<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
							</button>

							<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

							<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
								<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
							</button>
						</div>
						<p style="margin-right:20px;">Kg</p>
						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
							<!-- Button -->
							<a href="<?= site_url('detail_produk/addtocart/' . $detailProduk[0]['id_produk']) ?>">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="p-b-45">
				<!-- <span class="s-text8 m-r-35">SKU: MUG-01</span> -->
				<span class="s-text8">Categories: <?php echo $detailProduk[0]['nama_kategori'] ?></span>
			</div>

			<!--  -->
			<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Description
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						<?php echo $detailProduk[0]['deskripsi_produk'] ?>
					</p>
				</div>
			</div>

		</div>
	</div>
</div>

<?php if ($relatedP) : ?>
	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<!-- start card related products -->
					<?php foreach ($relatedP as $key => $value) : ?>
						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="<?php echo base_url('upload/produk/' . $value['url_image']); ?>" alt="IMG-PRODUCT">
									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?php echo site_url('detail_produk/detail/' . $value['id_produk']) ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $value['nama_produk'] ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										Rp &nbsp <?php echo $value['harga_produk'] ?>
									</span>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					<!-- end card -->
				</div>
			</div>

		</div>
	</section>
<?php endif ?>


<?php $this->load->view('partials/footer'); ?>
