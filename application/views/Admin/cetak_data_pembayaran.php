<body onload="javascript: window.print()" style="margin: auto; width:90%">
<div style="margin-left: 10px; margin-right: 10px;"></div>

<p>&nbsp;</p>

<table width="90%" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3"><div align="center"><img src="<?php echo base_url().'assets/assets/images/cic.png' ?>" width="250" height="150"></div></td>
		<td><div align="center"><font size="5">LEMBAGA RUMAH SAKIT</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="6">RUMAH SAKIT CENDEKIA</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="3">Jl. Kesambi No. 202 Cirebon - 45133, Telp. (0231) 220250</font></div></td>
	</tr>
</table>
<hr>
<p>&nbsp;</p>
<font size="5"><center><u>Rincian Pembayaran</u></center></font>
<p>&nbsp;</p>
<?php foreach ($tbl_pembayaran1 as $pembayaran1) ?>
<font size="3">Nama Pasien : <?php echo $pembayaran1->nm_pasien ?></font><br>
<font size="3">Jenis Kelamin : <?php echo $pembayaran1->gender ?></font><br>
<font size="3">Alamat : <?php echo $pembayaran1->alamat ?></font><br>

<table width="90%" align="center" cellpadding="0" cellspacing="0">
	<tr align="center">
		<td style="border-right: 1px solid #000; border-left: 1px solid #000;border-top: 1px solid #000; padding: 3px 5px;">No.</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Nama Pasien</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Tanggal Masuk</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Tanggal Keluar</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Lama Inap</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Harga Kamar</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Harga Rawat</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Harga Periksa</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Harga Obat</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Total Pembayaran</td>
	</tr>
	<tr>
											<?php
                                            $no = 1;
                                            foreach ($tbl_pembayaran1 as $pembayaran) {
                                                $tgl_masuk = new DateTime("$pembayaran->tgl_masuk");
                                                $tgl_keluar = new DateTime("$pembayaran->tgl_keluar");
                                                $lama_inap = $tgl_keluar->diff($tgl_masuk)->days + 1;
                                                $hrg_rawat = ($lama_inap * $pembayaran->hrg_rawat);
                                                $hrg_ruang = ($pembayaran->hrg_ruang);
                                                $hrg_periksa = ($pembayaran->hrg_periksa);
                                                $hrg_obat = ($pembayaran->hrg_obat);
                                                $total = ($hrg_rawat + $hrg_ruang + $hrg_periksa + $hrg_obat)* $lama_inap;
                                            ?>
    	<td style="border-right: 1px solid #000; border-left: 1px solid #000;border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $no++ ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $pembayaran->nm_pasien ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $pembayaran->tgl_masuk ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $pembayaran->tgl_keluar ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $lama_inap." hari" ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $pembayaran->hrg_ruang ?></td> ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $pembayaran->hrg_rawat ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $pembayaran->hrg_periksa ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $pembayaran->hrg_obat ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $total ?></td>
	</tr>	
	<?php } ?>
</table>

<p style="text-align: right; font-size: 18px;">Cirebon, <?php echo date("d M Y") ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p style="text-align: right; font-size: 18px;">Kepala Rumah Sakit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: right; font-size: 18px;">Prof. Dr. Nina Susana, M.M</p>

</body>