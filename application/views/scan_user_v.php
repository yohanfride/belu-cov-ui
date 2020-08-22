                <div class="card no-b">

                    <div class="card-body">
                        <div class="card-title">
                            <h4>Data Covid-19 <?php if($user_now->level != 'pusat'){ echo '- Kecamatan '.$user_now->level; } ?></h4> 
                        </div>
                        <br/>
                        <div style="overflow-y: auto; padding-bottom: 10px;">
                            <table class="table table-bordered table-hover data-tables" >
                                <thead>
                                    <tr>
                                        <th width="10%">Aksi</th>
                                        <th>Nama</th>
                                        <th>Jenis kelamin</th>
                                        <th>No. Telp</th>
                                        <th>Kelompok</th>
                                        <th>Status</th>
                                        <?php if($user_now->level == 'pusat' ){ ?>
                                        <th>Kecamatan</th>
                                        <?php } ?>
                                        <th>Kelurahan</th>
                                        <th>Tanggal Lahir</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Aksi</th>
                                        <th>Nama</th>
                                        <th>Jenis kelamin</th>
                                        <th>No. Telp</th>
                                        <th>Kelompok</th>
                                        <th>Status</th>
                                        <?php if($user_now->level == 'pusat' ){ ?>
                                        <th>Kecamatan</th>
                                        <?php } ?>
                                        <th>Kelurahan</th>
                                        <th>Tanggal Lahir</th>
                                    </tr>
                                </tfoot>

                                <tbody>
                                    <?php foreach ($data as $s) { ?>
                                    <tr>
                                        <td>
                                           <button onclick="pilih_pasien(<?= $s->_id;?>)" type="button" class="btn btn-primary r-20"><i class="icon-check"></i> Pilih</button>
                                        </td>
                                        <td><?= $s->nama ?></td>
                                        <td><?= $s->jenis_kelamin ?></td>
                                        <td><?= $s->phone ?></td>
                                        <td style="text-align: center;">
                                            <?php if(strtoupper($s->level) == "KONFIRMASI"){ ?>
                                            <span class="badge badge-danger r-20" style="font-size: 12px;">Konfirmasi Positif - <?= (!empty($s->konfirmasi_gejala))?$s->konfirmasi_gejala:''; ?></span>
                                            <?php } else if(strtoupper($s->level) == "SUSPEK"){ ?>
                                            <span class="badge badge-warning r-20" style="font-size: 12px;">Suspek</span>
                                            <?php } else if(strtoupper($s->level) == "PROBABLE"){ ?>
                                            <span class="badge badge-info r-20" style="font-size: 12px;">Probable</span>
                                            <?php } else if(strtoupper($s->level) == "KONTAK_ERAT"){ ?>
                                            <span class="badge badge-success r-20" style="font-size: 12px;">Kontak Erat</span>
                                            <?php } ?>
                                        </td>
                                        <td><?= $s->level_status ?></td>
                                        <?php if($user_now->level == 'pusat'){ ?>
                                        <td><?= $s->kecamatan ?></td>
                                        <?php } ?>
                                        <td><?= $s->kelurahan ?></td>
                                        <td><?= date( "Y-m-d", strtotime( $s->tgl_lahir)) ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <br/>
                        </div>

                    </div>
                    