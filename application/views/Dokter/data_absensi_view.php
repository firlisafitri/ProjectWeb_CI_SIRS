 <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fas fa-user"></i> &nbsp;&nbsp;&nbsp;Absensi Dokter</h4>
                            </div>
                            <div class="card-body">
                                 <?php foreach ($tbl_absensi as $absensi1) ?>
                                 <a href="<?php echo base_url().'index.php/Dokter/Dokter/cetak_data_absensi/'.$absensi1->id_jadwal.'' ?>" target="_blank" class="btn btn-success">Cetak Absensi Dokter</a>
                                 <p></p>
                                

                                    <div class="table-responsive">    
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NI Dokter</th>
                                                <th>Nama Dokter</th>
                                                <th>Kehadiran</th>
                                                <th>Tanggal</th>
                                                <th>Absensi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NI Dokter</th>
                                                <th>Nama Dokter</th>
                                                <th>Kehadiran</th>
                                                <th>Tanggal</th>
                                                <th>Absensi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_absensi as $absensi) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $absensi->ni_dokter ?></td>
                                                <td><?php echo $absensi->nm_dokter ?> </td>
                                                <td><?php echo $absensi->kehadiran ?> </td>
                                                <td><?php echo $absensi->tgl ?> </td>
                                                <td><?php echo $absensi->absensi ?> </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- order table -->
            </div>
    </div>