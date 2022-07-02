 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Update Data Jadwal Praktek </h4>
                            </div>
                            <div class="card-body">


                            <?php foreach ($tbl_jadwal as $jadwal) { ?>

                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_jadwal_edit_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label>Hari Praktek</label>
                                                <input type="hidden" class="form-control" name="id_jadwal" value="<?php echo $jadwal->id_jadwal ?>">
                                                <select class="form-control" name="hari">
                                                    <option value="<?php echo $jadwal->hari ?>">~<?php echo $jadwal->hari ?>~</option>
                                                    <option value="Senin">Senin</option>
                                                    <option value="Selasa">Selasa</option>
                                                    <option value="Rabu">Rabu</option>
                                                    <option value="Kamis">Kamis</option>
                                                    <option value="Jum'at">Jum'at</option>
                                                    <option value="Sabtu">Sabutu</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Jam Praktek</label>
                                                    <input type="time" class="form-control" value="<?php echo $jadwal->jam ?>" name="jam">
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nama Dokter</label>
                                                <select class="form-control" name="id_dokter">
                                                <option value="<?php echo $jadwal->id_dokter ?>">~<?php echo  $jadwal->nm_dokter ?>~</option>
                                                <?php
                                                foreach ($tbl_dokter as $dokter) {
                                                ?>
                                                <option value="<?php echo $dokter->id_dokter ?>"><?php echo $dokter->nm_dokter ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Spesialis</label>
                                                <select class="form-control" name="id_dokter">
                                                <option value="<?php echo $jadwal->id_dokter ?>">~<?php echo  $jadwal->spesialis ?>~</option>
                                                <?php
                                                foreach ($tbl_dokter as $dokter) {
                                                ?>
                                                <option value="<?php echo $dokter->id_dokter ?>"><?php echo $dokter->spesialis ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <select class="form-control" name="id_pendaftaran">
                                                <option value="<?php echo $jadwal->id_pendaftaran ?>">~<?php echo  $jadwal->nm_pasien ?>~</option>
                                                <?php
                                                foreach ($tbl_pendaftaran as $pendaftaran) {
                                                ?>
                                                <option value="<?php echo $pendaftaran->id_pendaftaran ?>"><?php echo $pendaftaran->nm_pasien ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nama Ruangan</label>
                                                <select class="form-control" name="id_ruangan">
                                                <option value="<?php echo $jadwal->id_ruangan ?>">~<?php echo  $jadwal->nm_ruangan ?>~</option>
                                                <?php
                                                foreach ($tbl_ruangan as $ruangan) {
                                                ?>
                                                <option value="<?php echo $ruangan->id_ruangan ?>"><?php echo $ruangan->nm_ruangan ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>

										    
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <input type="submit" class="btn btn-info" value="Update Data">
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>

                            <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>