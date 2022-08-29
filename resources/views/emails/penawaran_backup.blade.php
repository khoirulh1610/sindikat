<!DOCTYPE html>
<html>

<head>

	<title>sindikat.co.id</title>

</head>

<body>
	<h1>sindikat.co.id</h1>
	<h1>Nomor  {{ $data['id'] ?? ''}}, </h1>
	<h1>Dear {{ $data['name'] ?? ''}}, </h1>
	<h1>Phone {{ $data['phone'] ?? ''}}, </h1>
	<h1>Email {{ $data['email'] ?? ''}}, </h1>
	<p>
	<h2>Terimakasih telah menghubungi kami</h2>
	</p>
	<p>Harga : Rp. {{ number_format($data['harga']) ?? 0 }}</p>
	<p>PPN : Rp. {{ number_format($data['ppn']) ?? 0 }}</p>
	<p>Description:  {{ $data['keterangan'] ?? '' }}</p>
	<p>
	<h3>Kami akan segera menghubungi anda</h3>
	<h3>Salam,</h3>
	<h3>sindikat.co.id</h3>
	</p>

	<div
		style="background-color:#f3f4f5;box-sizing:border-box;color:#838994;font-family:'Open Sans',sans-serif;font-size:14px;font-weight:400;line-height:20px;margin:0; margin-top: 20px">
		<table
			style="background-color:#fff;border:1px solid #dbdee2;border-spacing:0;margin:40px auto 24px;width:600px">
			<tbody>
				<tr>
					<td style="padding:16px 32px;padding-top:32px!important">
						<p style="margin:0">
							<strong>sindikat.co.id</strong>
						</p>
					</td>
				</tr>
				<tr>
					<td style="padding:16px 32px">
						<p style="margin:0">Hai {{$data->name ?? ''}}, <strong style="color:#52565e;font-weight:800"></strong></p>
						<h1
							style="color:#52565e;font-size:20px;font-weight:800;line-height:26px;margin:0;margin-bottom:16px;margin-top:16px">
							<strong style="color:#52565e;font-weight:800">Proposal Sindikat Bisnis</strong>
						</h1>
						<p style="margin:0">Terima kasih telah mempercayakan Sindikat untuk membantu urusan
							bisnis kamu. <b style="color:#52565e;font-weight:800">Proposal penawaran ini hanya berlaku
								hingga 14 hari kedepan</b>.</p>

					</td>
				</tr>
				<tr>
					<td style="padding:0px 32px">
						<table style="background-color:#f3f4f5;border-radius:12px;padding:16px;width:100%">
							<tbody>
								<tr>
									<td width="40%" style="padding:4px">Nama Pemesan:</td>
									<td width="60%" style="padding:4px"><b
											style="color:#52565e;font-weight:normal">{{ $data['name'] ?? ''}}</b>
									</td>
								</tr>
								<tr>
									<td width="40%" style="padding:4px">Handphone:</td>
									<td width="60%" style="padding:4px"><b
											style="color:#52565e;font-weight:normal">{{ $data['phone'] ?? ''}}</b>
									</td>
								</tr>
								<tr>
									<td width="40%" style="padding:4px">Email:</td>
									<td width="60%" style="padding:4px"><b
											style="color:#52565e;font-weight:normal">{{ $data['email'] ?? ''}}</b>
									</td>
								</tr>
								<tr>
									<td width="40%" style="padding:4px">No. Referensi:</td>
									<td width="60%" style="padding:4px"><b
											style="color:#52565e;font-weight:normal">{{ $data['id'] ?? ''}}</b>
									</td>
								</tr>
								<tr>
									<td width="40%" style="padding:4px">Metode Pembayaran</td>
									<td width="60%" style="padding:0px">
										<img src="https://ci4.googleusercontent.com/proxy/-A2L26vtcqWsFSXHR0ojmdrzcZaiGtp9A_2smvdZwmMNRvLx0hJA_WxWJo8uA6a8MZEitSmJqre5HH_Lsx_q=s0-d-e1-ft#https://ecs7.tokopedia.net/img/bca-va.png"
											alt="BANK BCA"
											class="m_7542038432730549501m_5250122922972993298m_-579046523019365308m_7439885493929164509CToWUd m_7542038432730549501m_5250122922972993298m_-579046523019365308CToWUd m_7542038432730549501m_5250122922972993298CToWUd m_7542038432730549501CToWUd CToWUd"
											width="60"><br><span style="
                      font-weight: bold;
                      color: #6b6b6b;
                      font-size: 14px;
                      line-height: 0.5;
                      padding: 0;
                    ">No 0353 252 400</span>

										<br><span style="
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.5;
                      padding: 0;
                    ">KCU Sudirman</span>

										<br><span style="
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.5;
                      padding: 0;
                    ">PT Infiniti Global Ventura</span>
									</td>
								</tr>
							</tbody>
						</table>
						<h2
							style="color:#52565e;font-size:18px;font-weight:800;line-height:24px;margin:0;margin-bottom:16px; margin-top: 20px">
							Detail Proposal</h2>
						<table style="
              width: 90%;
              padding-bottom: 0px;
              margin-top: 16px;
              margin-bottom: 0px;
              border-bottom: 1px solid #e0e0e0;
              margin-left: 15px;
            ">
							<tbody>
								<tr></tr>
								<tr>
									<td style="vertical-align: top">
										<p style="
                      
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                    ">
											{{ $data->packet->name_packet ?? '' }}<br>
										</p>
									</td>

									<td style="vertical-align: top; text-align: right; width: 140px">
										<span style="
                      float: left;
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                    ">
											Rp
										</span>

										<p style="
                      
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                      text-align: right;
                    ">
											<span>Rp. {{ number_format($data['harga']) ?? 0 }}</span><br>
										</p>
									</td>
								</tr>

								<tr>
									<td style="vertical-align: top">
										<p style="
                      
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                    ">
											PPh 4 ayat (2) & Deposit (if any)
										</p>
									</td>

									<td style="vertical-align: top; text-align: right; width: 140px">
										<span style="
                      float: left;
                      
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                    ">
											Rp
										</span>

										<p style="
                     
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                      text-align: right;
                    ">
											<span>[pph]</span><br>
										</p>
									</td>
								</tr>

								<tr>
									<td style="vertical-align: top">
										<p style="
                      
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                    ">
											PPN Virtual Office (if any) 
										</p>
									</td>

									<td style="vertical-align: top; text-align: right; width: 140px">
										<span style="
                      float: left;
                      
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                    ">
											Rp. {{ number_format($data['ppn']) ?? 0 }}
										</span>

										<p style="
                      
                      font-weight: normal;
                      color: #999;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                      text-align: right;
                    ">
											<span>[tax]</span><br>
										</p>
									</td>
								</tr>
							</tbody>
						</table>

						<table style="
              width: 90%;
              margin-top: 18px;
              margin-bottom: 0px;
              padding-bottom: 18px;
              margin-left: 15px;
            ">
							<tbody>
								<tr style="margin-bottom: 6px">
									<td style="vertical-align: top">
										<p style="
                      
                      font-weight: 900;
                      color: #666;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                    ">
											Total Pembayaran
										</p>
									</td>

									<td style="vertical-align: top; text-align: right; width: 140px">
										<span style="
                      float: left;
                      
                      font-weight: bold;
                      color: orange;
                      font-size: 14px;
                      line-height: 1.6;
                    ">Rp</span>

										<p style="
                      
                      font-weight: bold;
                      color: orange;
                      font-size: 14px;
                      line-height: 1.6;
                      margin: 0 0 10px;
                      padding: 0;
                      text-align: right;
                    ">
											<span>[total_payment]</span><br>
										</p>
									</td>
								</tr>
							</tbody>
						</table>
						<p style="margin:0;padding-bottom:16px!important;padding-top:0px!important"><small
								style="font-size:14px">Lihat informasi lebih detail tentang <b>detail layanan,
									persyaratan, form setup</b> dengan klik tombol dibawah ini</small>
						</p><a
							style="background-color:#ff4e40;border-radius:8px;box-sizing:border-box;color:#fff;display:inline-block;font-weight:800;padding:12px 24px;text-align:center;text-decoration:none;width:100%; margin-bottom: 30px"
							target="_blank" href="https://infiniti.id/jasa-pembuatan-pt">Lihat Halaman Layanan</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

</body>

</html>