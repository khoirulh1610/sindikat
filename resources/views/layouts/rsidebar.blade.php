<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb30">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="box-black pesanan">
				<form method="post" action="https://web.archive.org/web/20200712042243/http://sindikat.co.id/submit-proposal">
					<h6 class="link" style="color:#fff">Layanan Kilat Lainnya</h6>
					<ul class="selected_paket" style="list-style-type: none;  margin: 0;padding: 0;">
					</ul>
					<div class="alert alert-info" id="cart_empty">Tidak ada layanan</div>
					<div class="ordersummary mt30" style="display:none;">
						<h6 class="link" style="color:#fff">Biaya Layanan</h6>
						<div class="table-responsive-lg">
							<table class="table">
								<tbody>
									<tr>
										<td><div class="title-table text-left">Biaya</div></td>
										<td class="text-right">Rp <span class="total_harga">00</span></td>
									</tr>
									<tr class="ada-ppn">
										<td><div class="title-table text-left">PPN 10%</div></td>
										<td class="text-right">Rp <span class="total_ppn">00</span></td>
									</tr>
									<tr>
										<td><div class="title-table text-left">Total Biaya</div></td>
										<td class="text-right"><b>Rp <span class="jumlah_total" style="font-size:18px;font-weight: 700;">00</span></b></td>
									</tr>
								</tbody>
							</table>
							<p class="small" style="color:#fff"><em><strong>KHUSUS</strong> bundling virtual office, harga sudah termasuk PPh Final 4 (2) dan PPN.</em></p>
						</div>
					</div>
					<h6 class="link" style="color:#fff">Data Proposal</h6>
					<div class="input-group">
						<input type="text" name="nama_pemohon" class="form-control" id="fullname" placeholder="Nama" required="">
					</div>
					<div class="input-group">
						<input type="email" name="email_pemohon" class="form-control" id="email" placeholder="Email" required="">
					</div>
					<div class="input-group">
						<input type="text" name="hp_pemohon" class="form-control" id="handphone" placeholder="Handphone" required="">
					</div>
						<input type="hidden" name="notes" id="notes-field">
					<input type="hidden" name="harga" id="harga">
					<input type="hidden" name="ppn" id="ppn">
					@csrf
					<button type="submit" class="btn btn--medium btn--secondary btn--icon-right full-width"><i class="icon-ok"></i> Submit<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: 253.5px; top: -12px; background-color: rgb(67, 73, 84); transform: scale(2.83688);"></div><div class="ripple ripple-on ripple-out" style="left: 339.5px; top: -11px; background-color: rgb(61, 67, 79); transform: scale(2.83688);"></div></div></button>
				</form>
			</div>
		</div>
	</div>
</div>