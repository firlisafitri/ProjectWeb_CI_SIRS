 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Input Data Jadwal Praktek</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_jadwal_input_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label>Hari Praktek</label>
                                                <select class="form-control" name="hari">
                                                    <option value="">~Pilih Hari~</option>
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
                                                    <input type="time" class="form-control" name="jam">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <select class="form-control" name="id_pendaftaran">
                                                <option value="">~Pilih Nama Pasien~</option>
                                                <?php
                                                foreach ($tbl_pendaftaran as $pendaftaran) {
                                                ?>
                                                <option value="<?php echo $pendaftaran->id_pendaftaran ?>"><?php echo $pendaftaran->nm_pasien ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nama ruangan</label>
                                                <select class="form-control" name="id_ruangan">
                                                <option value="">~Pilih Nama ruangan~</option>
                                                <?php
                                                foreach ($tbl_ruangan as $ruangan) {
                                                ?>
                                                <option value="<?php echo $ruangan->id_ruangan ?>"><?php echo $ruangan->nm_ruangan ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nama Dokter</label>
                                                <select class="form-control" name="id_dokter">
                                                <option value="">~Pilih Nama Dokter~</option>
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
                                                <option value="">~Pilih Spesialis~</option>
                                                <?php
                                                foreach ($tbl_dokter as $dokter) {
                                                ?>
                                                <option value="<?php echo $dokter->id_dokter ?>"><?php echo $dokter->spesialis ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                            	    
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <input type="submit" class="btn btn-info" value="Simpan Data">
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>