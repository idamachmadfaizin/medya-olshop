<!-- <footer class="bg-gray" style="margin-top: 50px;"> -->
<footer class="bg-gray">
	<div class="container">
		<div class="row" style="padding-bottom: 50px;">
			<div class="col-sm-5 row-footer">
				<h6><b>GET IN TOUCH</b></h6>
				<br>
				<p>Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry.</p>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-instagram" style="margin-left:20px;"></i>
				<i class="fab fa-twitter" style="margin-left:20px;"></i>
			</div>
			<div class="col-sm-2 row-footer">
				<h6><b>MY ACCOUNT</b></h6>
				<br>
				<p><a href="#" class="text-black text-decoration-none">My Account</a></p>
				<p><a href="#" class="text-black text-decoration-none">Order History</a></p>
				<p><a href="#" class="text-black text-decoration-none">Cart</a></p>
				<p><a href="#" class="text-black text-decoration-none">Payment Confirm</a></p>
			</div>
			<div class="col-sm-2 row-footer">
				<h6><b>PAYMENT</b></h6>
				<br>
				<img src="<?php echo base_url();?>/assets/img/logos/Logo-BCA.png" alt="">
				<br>
				<br>
				<img src="<?php echo base_url();?>/assets/img/logos/Logo-JNE.png" alt="">
			</div>
			<div class="col-sm-3 row-footer">
				<h6><b>CONTACT</b></h6>
				<br>
				<ul class="list-unstyled">
					<li style="margin-bottom: 10px;">
						<div class="d-flex justify-content-center contact-box-icon">
							<i class="fas fa-map-marker-alt contact"></i>
						</div>
						<span>RUKO DRIOREJO jL.Kota Baru Driorejo no: 34A Kab.Gresik Jawa timur</span>
					</li>
					<li style="margin-bottom: 10px;">
						<div class="d-flex justify-content-center contact-box-icon">
							<i class="fas fa-phone contact"></i>
						</div>
						<span>089711073533</span>
					</li>
					<li style="margin-bottom: 10px;">
						<div class="d-flex justify-content-center contact-box-icon">
							<i class="fas fa-envelope contact"></i>
						</div>
						<span>melysashop@gmail.com</span>
					</li>
					<!-- <li style="margin-bottom: 10px;">
						<div class="d-flex justify-content-center contact-box-icon">
							<i class="fas fa-info contact"></i>
						</div>
						<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, officiis.</span>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>

<?php $this->load->view('partials/footer-script'); ?>

</body>
</html>
