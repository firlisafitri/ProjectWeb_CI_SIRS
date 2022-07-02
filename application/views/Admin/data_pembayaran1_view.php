 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Rincian Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <?php foreach ($tbl_pembayaran1 as $pembayaran1) ?>
                                <a href="<?php echo base_url().'index.php/Admin/Admin/cetak_data_pembayaran/'.$pembayaran1->id_pembayaran1.'' ?>" target="_blank" class="btn btn-success">Cetak Pembayaran Pasien</a>
                                <p></p>

                                    <div class="table-responsive">    
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pembayaran</th>
                                                <th>Nama Pasien</th>
                                                <th>Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Lama Inap</th>
                                                <th>Harga Kamar</th>
                                                <th>Harga Rawat</th>
                                                <th>Harga Periksa</th>
                                                <th>Harga Obat</th>
                                                <th>Total Pembayaran</th>
                                                <th>Jenis Bayar</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>No</th>
                                                <th>Kode Pembayaran</th>
                                                <th>Nama Pasien</th>
                                                <th>Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Lama Inap</th>
                                                <th>Harga Kamar</th>
                                                <th>Harga Rawat</th>
                                                <th>Harga Periksa</th>
                                                <th>Harga Obat</th>
                                                <th>Total Pembayaran</th>
                                                <th>Jenis Bayar</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
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
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pembayaran->kd_pembayaran ?></td>
                                                <td><?php echo $pembayaran->nm_pasien ?></td>
                                                <td><?php echo $pembayaran->penyakit ?></td>
                                                <td><?php echo $pembayaran->gender ?></td>
                                                <td><?php echo $pembayaran->usia ?></td>
                                                <td><?php echo $pembayaran->alamat ?></td>
                                                <td><?php echo $pembayaran->nohp ?></td>
                                                <td><?php echo $pembayaran->tgl_masuk ?></td>
                                                <td><?php echo $pembayaran->tgl_keluar ?></td>
                                                <td><?php echo $lama_inap." hari" ?></td>
                                                <td><?php echo $pembayaran->hrg_ruang ?></td>
                                                <td><?php echo $pembayaran->hrg_rawat ?></td>
                                                <td><?php echo $pembayaran->hrg_periksa ?></td>
                                                <td><?php echo $pembayaran->hrg_obat ?></td>
                                                <td><?php echo $total ?></td>
                                                <td><?php echo $pembayaran->jenis_bayar ?></td>

                                                <td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- order table -->
            </div>
    </div>