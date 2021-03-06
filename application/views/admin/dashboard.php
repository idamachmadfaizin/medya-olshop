<?php $this->load->view('partials/header_admin'); ?>
<!-- Content -->
<div class="content">
	<!-- Animated -->
	<div class="animated fadeIn">
		<!-- Widgets  -->
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-five">
							<div class="stat-icon dib flat-color-1">
								<i class="fas fa-shopping-cart"></i>
							</div>
							<div class="stat-content">
								<div class="text-left dib">
									<div class="stat-text"><?= $widget['order_today'] ?></div>
									<div class="stat-heading">Orders Today</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-five">
							<div class="stat-icon dib flat-color-2">
								<i class="far fa-credit-card"></i>
							</div>
							<div class="stat-content">
								<div class="text-left dib">
									<div class="stat-text"><?= $widget['dibayar'] ?></div>
									<div class="stat-heading">Dibayar</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-five">
							<div class="stat-icon dib flat-color-3">
								<i class="fas fa-sync-alt"></i>
							</div>
							<div class="stat-content">
								<div class="text-left dib">
									<div class="stat-text"><?= $widget['proses'] ?></div>
									<div class="stat-heading">Proses</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-five">
							<div class="stat-icon dib flat-color-4">
								<i class="fas fa-users"></i>
							</div>
							<div class="stat-content">
								<div class="text-left dib">
									<div class="stat-text"><?= $widget['customer'] ?></div>
									<div class="stat-heading">Customer</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Widgets -->
		<div class="clearfix"></div>
		<!-- Orders -->
		<div class="orders">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-body">
							<h4 class="box-title">Orders Today</h4>
						</div>
						<div class="card-body--">
							<div class="table-stats order-table ov-h">
								<table class="table ">
									<thead>
										<tr>
											<th class="serial">#</th>
											<!-- <th>No Order</th> -->
											<th>Nama Customer</th>
											<th>Tanggal Order</th>
											<th>Total Harga</th>
											<th class="avatar">TF</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1 ?>
										<?php foreach ($orders as $order) : ?>
											<tr>
												<td>
													<!-- Button trigger modal -->
													<button type="button" class="btn btn-sm p-0" data-toggle="modal" data-target="#detailorder<?= $order->id_customer ?>" style="font-weight:600">
														<?= $no ?>
													</button>

													<!-- Modal detail order -->
													<div class="modal fade" id="detailorder<?= $order->id_customer ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLongTitle">Detail no order <?= $order->id_order ?></h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="table-stats order-table ov-h">
																		<table class="table ">
																			<thead>
																				<tr>
																					<th class="serial">#</th>
																					<th>Nama Produk</th>
																					<th>Qty</th>
																					<th>Harga satuan</th>
																				</tr>
																			</thead>
																			<tbody>

																				<?php $numDO = 1 ?>
																				<?php foreach ($detail_orders as $detail_order) : ?>
																					<?php if ($detail_order->id_order == $order->id_order) : ?>
																						<tr>
																							<td class="serial"><?= $numDO ?></td>
																							<td><span><?= $detail_order->nama_produk ?></span></td>
																							<td><?= $detail_order->jumlah ?></td>
																							<td><?= $detail_order->harga_satuan ?></td>
																						</tr>
																						<?php $numDO++ ?>
																					<?php endif ?>
																				<?php endforeach ?>

																			</tbody>
																		</table>
																	</div>
																</div><!-- end modal body -->
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													<!-- end Modal -->
												</td>
												<td>
													<!-- Button trigger modal -->
													<button type="button" class="btn btn-sm p-0" data-toggle="modal" data-target="#detailcustomer<?= $order->id_customer ?>" style="font-weight:600">
														<?= $order->nama_customer ?>
													</button>

													<!-- Modal detail customer-->
													<div class="modal fade" id="detailcustomer<?= $order->id_customer ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLongTitle">Customer Detail</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form>
																		<div class="form-group row">
																			<label for="EmailCustomer" class="col-sm-4 col-form-label">Email cutomer</label>
																			<div class="col-sm-8">
																				<input type="text" readonly class="form-control-plaintext" id="EmailCustomer" value="<?= $order->email_customer; ?>">
																			</div>
																			<label for="NamaCustomer" class="col-sm-4 col-form-label">Nama cutomer</label>
																			<div class="col-sm-8">
																				<input type="text" readonly class="form-control-plaintext" id="NamaCustomer" value="<?= $order->nama_customer; ?>">
																			</div>
																			<label for="TelpCustomer" class="col-sm-4 col-form-label">Telp cutomer</label>
																			<div class="col-sm-8">
																				<input type="text" readonly class="form-control-plaintext" id="TelpCustomer" value="<?= $order->nomor_telp; ?>">
																			</div>
																			<label for="AddressCustomer" class="col-sm-4 col-form-label">Alamat cutomer</label>
																			<div class="col-sm-8">
																				<input type="text" readonly class="form-control-plaintext" id="AddressCustomer" value="<?= $order->address; ?>">
																			</div>
																			<label for="JkelCustomer" class="col-sm-4 col-form-label">Jenis kelamin</label>
																			<div class="col-sm-8">
																				<input type="text" readonly class="form-control-plaintext" id="JkelCustomer" value="<?= $order->jenis_kelamin; ?>">
																			</div>
																			<label for="TanggalCustomer" class="col-sm-4 col-form-label">Tanggal lahir</label>
																			<div class="col-sm-8">
																				<input type="text" readonly class="form-control-plaintext" id="TanggalCustomer" value="<?= $order->tanggal_lahir; ?>">
																			</div>
																		</div>
																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													<!-- end Modal -->
												</td>
												<td><span><?= $order->tgl_order ?></span></td>
												<td><span><?= number_format($order->total_harga, 0, ",", ".") ?></span></td>
												<td class="avatar">
													<!-- TF -->
													<div class="round-img">
														<?php if($order->bukti_tf): ?>
															<button class="btn p-0" data-toggle="modal" data-target="#buktitf<?= $order->id_order ?>">
																<img class="rounded-circle rounded-cover" src="<?= base_url() . 'upload/bukti_tf/' . $order->bukti_tf ?>" alt="">
															</button>
														<?php endif ?>
													</div>
													<!-- Modal TF-->
													<div class="modal fade" id="buktitf<?= $order->id_order ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLongTitle">Bukti Transfer</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body text-center">
																	<!-- cek untuk menampilkan bbukti tf pada tabel dan modal -->
																	<img src="<?= base_url() . 'upload/bukti_tf/' . $order->bukti_tf ?>" alt="<?= $order->bukti_tf ?>" class="img-thumbnail" style="min-width:100%">
																	<!-- end -->
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
													<!-- end Modal -->
												</td>
												<td>
													<div class="btn-group btn-group-sm" role="group">
														<button type="button" class="btn <?php if ($order->status == 'Menunggu') {
																								echo 'btn-warning';
																							} else {
																								echo 'btn-light';
																							}
																							?>" title="Menunggu" onclick="window.location.href = '<?= site_url('admin/dashboard/updateStatus?id=' . $order->id_order . '&status=Menunggu') ?>'"><i class="fas fa-clock"></i></button>
														<button type="button" class="btn <?php if ($order->status == 'Dibayar') {
																								echo 'btn-primary';
																							} else {
																								echo 'btn-light';
																							}
																							?>" title="Dibayar" onclick="window.location.href = '<?= site_url('admin/dashboard/updateStatus?id=' . $order->id_order . '&status=Dibayar') ?>'"><i class="fas fa-money-bill"></i></button>
														<button type="button" class="btn <?php if ($order->status == 'Proses') {
																								echo 'btn-success';
																							} else {
																								echo 'btn-light';
																							}
																							?>" title="Proses" onclick="window.location.href = '<?= site_url('admin/dashboard/updateStatus?id=' . $order->id_order . '&status=Proses') ?>'"><i class="fas fa-sync"></i></button>
														<button type="button" class="btn <?php if ($order->status == 'Pengiriman') {
																								echo 'btn-secondary';
																							} else {
																								echo 'btn-light';
																							}
																							?>" title="Pengiriman" onclick="window.location.href = '<?= site_url('admin/dashboard/updateStatus?id=' . $order->id_order . '&status=Pengiriman') ?>'"><i class="fas fa-truck"></i></button>
													</div>
												</td>
											</tr>
											<?php $no++ ?>
										<?php endforeach ?>

									</tbody>
								</table>
							</div> <!-- /.table-stats -->
						</div>
					</div> <!-- /.card -->
				</div> <!-- /.col-lg-8 -->
			</div>
		</div>
		<!-- /.orders -->

	</div>
	<!-- .animated -->
</div>
<!-- /.content -->

<div class="clearfix"></div>

<?php $this->load->view('partials/footer_admin'); ?>
