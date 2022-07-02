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
<font size="5"><center><u>Laporan Data Absensi Dokter</u></center></font>
<p>&nbsp;</p>
<?php foreach ($tbl_absensi as $absensi1) ?>
<font size="3">Nama Dokter : <?php echo $absensi1->nm_dokter ?></font><br>
<font size="3">Spesialis : <?php echo $absensi1->spesialis ?></font><br>

<table width="90%" align="center" cellpadding="0" cellspacing="0">
	<tr align="center">
		<td style="border-right: 1px solid #000; border-left: 1px solid #000;border-top: 1px solid #000; padding: 3px 5px;">No.</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">NI Dokter</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Nama Dokter</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Kehadiran</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Tanggal</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Absensi</td>
	</tr>
	<tr>
											<?php
                                            $no = 1;
                                            foreach ($tbl_absensi as $absensi) {
                                            ?>

    	<td style="border-right: 1px solid #000; border-left: 1px solid #000;border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $no++ ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $absensi->ni_dokter ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $absensi->nm_dokter ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $absensi->kehadiran ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $absensi->tgl ?></td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000;padding: 3px 5px;"><?php echo $absensi->absensi ?></td>
	</tr>	
	<?php } ?>
</table>

<p style="text-align: right; font-size: 18px;">Cirebon, <?php echo date("d M Y") ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p style="text-align: right; font-size: 18px;">Kepala Rumah Sakit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: right; font-size: 18px;">Prof. Dr. Nina Susana, M.M</p>

</body>