
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Form Pendaftaran</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_pendaftaran_input' ?>" class="btn btn-primary">Tambah Data Pendaftaran</a><p></p>


                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pendaftaran</th>
                                                <th>Nama Pasien</th>
                                                <th>Nama Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Perawatan</th>
                                                <th>Ruangan Tujuan</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pendaftaran</th>
                                                <th>Nama Pasien</th>
                                                <th>Nama Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Perawatan</th>
                                                <th>Ruangan Tujuan</th>
                                                <th>Jenis Pembayaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_pendaftaran as $pendaftaran) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pendaftaran->kd_pendaftaran ?></td>
                                                <td><?php echo $pendaftaran->nm_pasien ?></td>
                                                <td><?php echo $pendaftaran->penyakit ?></td>
                                                <td><?php echo $pendaftaran->gender ?></td>
                                                <td><?php echo $pendaftaran->usia ?></td>
                                                <td><?php echo $pendaftaran->alamat ?></td>
                                                <td><?php echo $pendaftaran->nohp ?></td>
                                                <td><?php echo $pendaftaran->perawatan ?></td>
                                                <td><?php echo $pendaftaran->ruangan_tujuan ?></td>
                                                <td><?php echo $pendaftaran->jenis_bayar ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/data_pendaftaran_edit/'.$pendaftaran->id_pendaftaran.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_pendaftaran_delete/'.$pendaftaran->id_pendaftaran.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
            </div>