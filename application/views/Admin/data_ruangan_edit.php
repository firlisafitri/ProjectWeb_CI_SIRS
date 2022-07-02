 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Edit Data Ruangan</h4>
                            </div>
                            <div class="card-body">


                            <?php foreach ($tbl_ruangan as $ruangan) { ?>

                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_edit_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kode ruangan</label>
                                                    <input type="hidden" class="form-control" name="id_ruangan" value="<?php echo $ruangan->id_ruangan ?>">
                                                    <input type="text" class="form-control" name="kd_ruangan" value="<?php echo $ruangan->kd_ruangan ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama ruangan</label>
                                                    <input type="text" class="form-control" name="nm_ruangan" value="<?php echo $ruangan->nm_ruangan ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tipe Kamar</label>
                                                    <select class="form-control" name="tipe_kamar">
                                                    <option value="<?php echo $ruangan->tipe_kamar ?>">~<?php echo $ruangan->tipe_kamar ?>~</option>
                                                    <option value="VIP">VIP</option>
                                                    <option value="Reguler">Reguler</option>
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