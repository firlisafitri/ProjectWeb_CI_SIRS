
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Data Jadwal Priksa</h4>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Hari & Jam</th>
                                                <th>Dokter</th>
                                                <th>Spesialis</th>
                                                <th>Ruangan</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Hari & Jam</th>
                                                <th>Dokter</th>
                                                <th>Spesialis</th>
                                                <th>Ruangan</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_jadwal as $jadwal) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $jadwal->hari ?> / <?php echo $jadwal->jam ?></td>
                                                <td><?php echo $jadwal->nm_dokter ?></td>
                                                <td><?php echo $jadwal->spesialis ?></td>
                                                <td><?php echo $jadwal->nm_ruangan ?></td>
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