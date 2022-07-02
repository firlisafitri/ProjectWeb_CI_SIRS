<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Input Data Pasien</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_pasien_input_aksi' ?>" method="POST">
                                    <div class="form-body">
                                        

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <select class="form-control" name="id_pendaftaran">
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
                                                <label>Nama Penyakit</label>
                                                <select class="form-control" name="id_pendaftaran">
                                                <?php
                                                foreach ($tbl_pendaftaran as $pendaftaran) {
                                                ?>
                                                <option value="<?php echo $pendaftaran->id_pendaftaran ?>"><?php echo $pendaftaran->penyakit ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control" name="id_pendaftaran">
                                                <?php
                                                foreach ($tbl_pendaftaran as $pendaftaran) {
                                                ?>
                                                <option value="<?php echo $pendaftaran->id_pendaftaran ?>"><?php echo $pendaftaran->gender ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Usia</label>
                                                <select class="form-control" name="id_pendaftaran">
                                                <?php
                                                foreach ($tbl_pendaftaran as $pendaftaran) {
                                                ?>
                                                <option value="<?php echo $pendaftaran->id_pendaftaran ?>"><?php echo $pendaftaran->usia ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Alamat</label>
                                                <select class="form-control" name="id_pendaftaran">
                                                <?php
                                                foreach ($tbl_pendaftaran as $pendaftaran) {
                                                ?>
                                                <option value="<?php echo $pendaftaran->id_pendaftaran ?>"><?php echo $pendaftaran->alamat ?></option>
                                                <?php } ?>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>No Handphone</label>
                                                <select class="form-control" name="id_pendaftaran">
                                                <?php
                                                foreach ($tbl_pendaftaran as $pendaftaran) {
                                                ?>
                                                <option value="<?php echo $pendaftaran->id_pendaftaran ?>"><?php echo $pendaftaran->nohp ?></option>
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