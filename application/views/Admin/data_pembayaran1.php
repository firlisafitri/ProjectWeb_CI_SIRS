
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Pembayaran</h4>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pendaftaran</th>
                                                <th>Nama Pasien</th>
                                                <th>Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pendaftaran</th>
                                                <th>Nama Pasien</th>
                                                <th>Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
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
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/data_pembayaran1_input/'.$pendaftaran->id_pendaftaran.'' ?>" class="btn btn-success">Input Pembayaran</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_pembayaran1_view/'.$pendaftaran->id_pendaftaran.'' ?>" class="btn btn-info">View pembayaran</a>
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