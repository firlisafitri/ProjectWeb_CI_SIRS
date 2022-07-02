
 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-edit"></i> &nbsp;&nbsp;&nbsp;Form Input Data Dokter</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo base_url().'index.php/Admin/Admin/data_dokter_input_aksi' ?>" method="POST">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NI Dokter</label>
                                                    <input type="text" class="form-control" placeholder="NI Dokter" name="ni_dokter">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Dokter</label>
                                                    <input type="text" class="form-control" placeholder="Nama Dokter" name="nm_dokter">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Spesialis</label>
                                                    <input type="text" class="form-control" placeholder="Spesialis" name="spesialis">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label><br>
                                                    <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="custom1" name="gender" value="Laki-Laki">
                                                    <label class="custom-control-label" for="custom1">Laki-Laki</label>
                                                    </div>&nbsp;&nbsp;
                                                    
                                                    <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="custom2" name="gender" value="Perempuan">
                                                    <label class="custom-control-label" for="custom2">Perempuan</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>No Handphone</label>
                                                    <input type="text" class="form-control" placeholder="No Handphone" name="nohp">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" rows="3" placeholder="Alamat Dokter..." name="alamat"></textarea>
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