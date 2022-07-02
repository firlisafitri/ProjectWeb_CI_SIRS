 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                    
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Absensi Dokter</h4>
                            </div>
                            <div class="card-body">

                                    <form action="<?php echo base_url().'index.php/Dokter/Dokter/data_absensi_input_aksi' ?>" method="POST">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kehadiran</label>
                                                    <?php
                                                    foreach ($tbl_jadwal as $jadwal) {
                                                    ?>
                                                    <input type="hidden" class="form-control" name="id_jadwal" value="<?php echo $jadwal->id_jadwal ?>" >
                                                    <?php } ?>
                                                    <input type="text" class="form-control" name="kehadiran" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tanggal Kehadiran</label>
                                                    <input type="date" class="form-control" name="tgl" >
                                                </div>
                                            </div>
                                        </div>

                                    <div class="table-responsive">    
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NI Dokter</th>
                                                <th>Nama Dokter</th>
                                                <th>Pilih</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NI Dokter</th>
                                                <th>Nama Dokter</th>
                                                <th>Pilih</th>
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
                                                <td><?php echo $dokter->nm_dokter ?> </td>
                                                <td>
                                                    <input type="Checkbox" name="id_dokter[]" checked="checked" hidden="hidden" value="<?php echo $dokter->id_dokter ?>">

                                                    <select name="absensi[]" class="form-control">
                                                        <option value="Hadir">Hadir</option>
                                                        <option value="Alfa">Alfa</option>
                                                        <option value="Sakit">Sakit</option>
                                                    </select>
                                                </td>
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