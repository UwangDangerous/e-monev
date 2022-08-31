<div class="card p-3 mt-3">
    <div class="row">
        <div class="col">

            <?php if($this->session->flashdata('pesan')) : ?>
                <div class="alert alert-<?= $this->session->flashdata('warna'); ?> alert-dismissible fade show mb-3" role="alert">
                    <?= $this->session->flashdata('pesan'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <?php endif ; ?>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#id_collapse" aria-expanded="false" aria-controls="id_collapse">
                Input Rencana SRL-Obat
            </button>
            
            <div class="collapse" id="id_collapse">
                <div class="table-responsive mt-3">
                    <table class="table table-borders table-small-text text-center" id="tabel">
                        <thead>
                            <tr class="table-primary">
                                <th class="align-middle">KELAS TERAPI</th>
                                <th class="align-middle">ZAT AKTIF</th>
                                <th class="align-middle">JENIS SEDIAAN</th>
                                <th class="align-middle">BENTUK SEDIAAN</th>
                                <th class="align-middle">PUSTAKA ACUAN</th>
                                <th class="align-middle">PARAMETER UJI</th>
                                <th class="align-middle">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ; ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td class="align-middle"><?= $row['nama_kelas']; ?></td>
                                    <td class="align-middle"><?= $row['zat_aktif']; ?></td>
                                    <td class="align-middle"><?= $row['jenis_sedian']; ?></td>
                                    <td class="align-middle"><?= $row['bentuk_sedian']; ?></td>
                                    <td class="align-middle"><?= $row['pustaka']; ?></td>
                                    <td class="align-middle"><?= $row['parameter']; ?></td>
                                    <td class="align-middle">
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"data-bs-target="#modalCenter_<?= $row['id_srl'] ;?>">
                                                    <i class="bx bx-edit-alt me-1"></i>Input Rencana Pemenuhan SRL
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <!-- modal input rencana -->
                                    <div class="modal fade" id="modalCenter_<?= $row['id_srl'] ;?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Rencana Pemenuhan</h5>
                                                    <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                                    ></button>
                                                </div>
                                                <form action="<?= MYURL; ?>standar/obat/tambahRencana/<?= $row['id_srl'];?>" method="post">

                                                    <div class="modal-body">
                                                        <div class="row g-2">
                                                            <div class="col mb-0">
                                                                <label class="form-label" for="tahun">Tahun Pemenuhan</label>
                                                                <select class="form-select" id="tahun" name="tahun">
                                                                    <?php foreach ($tahun as $t) : ?>
                                                                        <?php if(date('Y') == $t['tahun']) : ?>
                                                                            <option selected value="<?= $t ['tahun'];?>"><?= $t ['tahun'];?></option>
                                                                        <?php else : ?>
                                                                            <option value="<?= $t ['tahun'];?>"><?= $t ['tahun'];?></option>
                                                                        <?php endif ; ?>
                                                                    <?php endforeach ; ?>
                                                                </select>
                                                            </div>
                                                            <div class="col mb-0">
                                                                <label for="tw" class="form-label">Triwulan</label>
                                                                <select class="form-select" id="tw" name="tw">
                                                                    <?php foreach ($tw as $t) : ?>
                                                                        <option value="<?= $t ['tw'];?>"><?= $t ['tw'];?></option>
                                                                    <?php endforeach ; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card p-3 mt-3">
    <div class="row">
        <div class="col">
            <strong>REALISASI PEMENUHAN SRL OBAT</strong> <br>
            Berikut Standar Ruang Lingkup Obat <strong><?= $this->session->userdata('monev_name'); ?></strong> yang Belum Terpenuhi <br><small>Klik pada kolom <strong>AKSI</strong> untuk menambahkan data pemenuhan standar ruang lingkup</small>
            <div class="table-responsive mt-3">
                    <table class="table table-borders table-small-text text-center">
                        <thead>
                            <tr class="table-primary">
                                <th class="align-middle" rowspan="2">KELAS TERAPI</th>
                                <th class="align-middle" rowspan="2">ZAT AKTIF</th>
                                <th class="align-middle" rowspan="2">JENIS SEDIAAN</th>
                                <th class="align-middle" rowspan="2">BENTUK SEDIAAN</th>
                                <th class="align-middle" rowspan="2">PUSTAKA ACUAN</th>
                                <th class="align-middle" rowspan="2">PARAMETER UJI</th>
                                <th class="align-middle" rowspan="2">REALISASI</th>
                                <th class="align-middle" colspan="2">RENCANA PEMENUHAN</th>
                                <th class="align-middle" rowspan="2">AKSI</th>
                            </tr>
                            <tr class="table-primary">
                                <th class="align-middle">Tahun</th>
                                <th class="align-middle">TW</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ; ?>
                            <?php foreach ($rencana as $row) : ?>
                                <tr>
                                    <td class="align-middle"><?= $row['nama_kelas']; ?></td>
                                    <td class="align-middle"><?= $row['zat_aktif']; ?></td>
                                    <td class="align-middle"><?= $row['jenis_sedian']; ?></td>
                                    <td class="align-middle"><?= $row['bentuk_sedian']; ?></td>
                                    <td class="align-middle"><?= $row['pustaka']; ?></td>
                                    <td class="align-middle"><?= $row['parameter']; ?></td>
                                    <td class="align-middle">
                                        <i class="text-danger">n/a</i>
                                    </td>
                                    <td class="align-middle"><?= $row['tahun']; ?></td>
                                    <td class="align-middle"><?= $row['tw']; ?></td>
                                    <td class="align-middle">
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#realisasi_<?= $row['id_srl'] ;?>"><i class="bx bx-edit-alt me-1">
                                                    </i>Input Realisasi Pemenuhan SRL
                                                </a> 
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="bx bx-trash me-1"></i> Hapus Data Realisasi Pemenuhan
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- modal input realisasi -->
                                    <div class="modal fade" id="realisasi_<?= $row['id_srl'] ;?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel2">Data Dukung Realisasi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
                                                </div>
                                                <form action="<?= MYURL ;?>standar/obat/tambahRealisasi/<?= $row['id_srl'] ;?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="row g-2">
                                                        <div class="col mb-0">
                                                            <label class="form-label" for="">Link Data Dukung</label>
                                                            <input class="form-control me-2" id="" placeholder=""/>
                                                        </div>
                                                        <small>atau</small>
                                                        <div class="col mb-0">
                                                            <label for="" class="form-label">Upload File</label>
                                                            <input class="form-control me-2" type="file" id="" />
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <!-- tutup modal input realisasi -->
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>