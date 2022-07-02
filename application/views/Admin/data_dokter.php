
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Profile Dokter</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_dokter_input' ?>" class="btn btn-primary">Tambah Data Dokter</a><p></p>


                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NI Dokter</th>
                                                <th>Nama Dokter</th>
                                                <th>Spesialis</th>
                                                <th>Gender</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NI Dokter</th>
                                                <th>Nama Dokter</th>
                                                <th>Spesialis</th>
                                                <th>Gender</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_dokter as $dokter) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $dokter->ni_dokter ?></td>
                                                <td><?php echo $dokter->nm_dokter ?></td>
                                                <td><?php echo $dokter->spesialis ?></td>
                                                <td><?php echo $dokter->gender ?></td>
                                                <td><?php echo $dokter->alamat ?></td>
                                                <td><?php echo $dokter->nohp ?></td>
                                                <td><a href="<?php echo base_url().'index.php/Admin/Admin/data_dokter_edit/'.$dokter->id_dokter.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_dokter_delete/'.$dokter->id_dokter.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Delete</a>
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