
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Pasien RS Cendekia</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_pasien_input' ?>" class="btn btn-primary">Tambah Data Pasien</a><p></p>


                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Perawatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Penyakit</th>
                                                <th>Gender</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Perawatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_pasien as $pasien) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pasien->nm_pasien ?></td>
                                                <td><?php echo $pasien->penyakit ?></td>
                                                <td><?php echo $pasien->gender ?></td>
                                                <td><?php echo $pasien->usia ?></td>
                                                <td><?php echo $pasien->alamat ?></td>
                                                <td><?php echo $pasien->perawatan ?></td>
                                                <td><?php echo $pasien->nohp ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/data_pasien_edit/'.$pasien->id_pasien.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_pasien_delete/'.$pasien->id_pasien.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Delete
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