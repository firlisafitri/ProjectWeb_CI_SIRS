 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Data Ruangan Pasien</h4>
                            </div>
                            <div class="card-body">


                            <?php foreach ($tbl_ruangan as $ruangan) { ?>

                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kode Ruangan</label>
                                                    <input type="text" class="form-control" name="kd_ruangan" readonly="readonly" value="<?php echo $ruangan->kd_ruangan ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="nm_ruangan" value="<?php echo $ruangan->nm_ruangan ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tipe Kamar</label>
                                                    <input type="text" class="form-control" readonly="readonly" name="tipe_kamar" value="<?php echo $ruangan->tipe_kamar ?>">
                                                </div>
                                            </div>
                                        </div>      

                            <?php } ?>

                            </div>
                        </div>
                    
                

                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Pilih Ruangan Pasien</h4>
                            </div>
                            <div class="card-body">

                                    <form action="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_pasien_aksi' ?>" method="POST">
                                    <div class="table-responsive">    
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Nama Penyakit</th>
                                                <th>Pilih</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Nama Penyakit</th>
                                                <th>Pilih</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_pendaftaran as $pendaftaran) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo "$pendaftaran[nm_pasien]" ?></td>
                                                <td><?php echo "$pendaftaran[penyakit]" ?> </td>
                                                <td>
                                                    <input type="hidden" class="form-control" name="id_ruangan" readonly="readonly" value="<?php echo $ruangan->id_ruangan ?>">
                                                    
                                                    <input type="Checkbox" name="id_pendaftaran[]" value="<?php echo "$pendaftaran[id_pendaftaran]" ?>"></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <p></p>
                                <div class="form-actions">
                                        <div class="text-left">
                                            <input type="submit" class="btn btn-info" value="Simpan Data">
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- order table -->
            </div>












    </div>