
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Ruangan Rumah Sakit Pelita</h4>
                            </div>
                            <div class="card-body">
                                
                                <a href="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_input' ?>" class="btn btn-primary">Tambah Data Ruangan</a><p></p>


                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode ruangan</th>
                                                <th>Nama ruangan</th>
                                                <th>Tipe Kamar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode ruangan</th>
                                                <th>Nama ruangan</th>
                                                <th>Tipe Kamar</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_ruangan as $ruangan) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $ruangan->kd_ruangan ?></td>
                                                <td><?php echo $ruangan->nm_ruangan ?>
                                                <td><?php echo $ruangan->tipe_kamar ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_pasien/'.$ruangan->id_ruangan.'' ?>" class="btn btn-warning">Input Pasien</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_pasien_view/'.$ruangan->id_ruangan.'' ?>" class="btn btn-primary">View</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_edit/'.$ruangan->id_ruangan.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_delete/'.$ruangan->id_ruangan.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Delete</a>
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