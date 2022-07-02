 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
							<div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Input Data Ruangan</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_ruangan_input_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kode Ruangan</label>
                                                    <input type="text" class="form-control" placeholder="Kode Ruangan" name="kd_ruangan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <input type="text" class="form-control" placeholder="Nama Ruangan" name="nm_ruangan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Tipe Kamar</label>
                                                    <select class="form-control" name="tipe_kamar">
                                                    <option value="">~Pilih Tipe Kamar~</option>
                                                    <option value="VIP">VIP</option>
                                                    <option value="Reguler">Reguler</option>
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