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
                <strong>RENCANA PEMENUHAN SRL OBAT</strong> <br>
                Berikut Standar Ruang Lingkup Obat <strong><?= $this->session->userdata('monev_name'); ?></strong> yang Belum Terpenuhi <br><small>Klik pada kolom <strong>AKSI</strong> untuk menambahkan data pemenuhan standar ruang lingkup</small>

                <div class="table-responsive mt-2 mb-2 mt-3">
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
                                <?php 
                                    $ready = $this->Standar_model->getDataObat($row['id_srl'])->row_array() ;
                                    if($ready) {
                                        $ada = 'style="background-color:rgb(235, 255, 245)"' ;
                                    }else{
                                        $ada = '' ;
                                    }
                                ?>
                                <tr <?= $ada; ?>>
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
                                                <?php if($ready == null) : ?>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"data-bs-target="#modalCenter_<?= $row['id_srl'] ;?>">
                                                        <i class="bx bx-edit-alt me-1"></i>Input Rencana Pemenuhan SRL
                                                    </a>
                                                <?php else : ?>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ubah_rencana_<?= $row['id_srl'] ;?>"><i class="bx bx-edit me-1">
                                                        </i>Ubah Data Realisasi Pemenuhan SRL
                                                    </a> 
    
                                                    <a class="dropdown-item" href="<?= MYURL; ?>standar/obat/hapusRencana/<?= $ready['id_obat'] ;?>" onclick="return confirm('Data rencana dan realisasi akan di hapus secara permanen, Yakin hapus rencana?')">
                                                        <i class="bx bx-trash me-1"></i> Hapus Data Realisasi Pemenuhan
                                                    </a>
                                                <?php endif ; ?>
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
                                    
                                    <?php if($ready) : ?>
                                        
                                        <!-- modal ubah rencana -->
                                        <div class="modal fade" id="ubah_rencana_<?= $row['id_srl'] ;?>" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">Ubah Data Rencana Pemenuhan</h5>
                                                        <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                        ></button>
                                                    </div>
                                                    <form action="<?= MYURL; ?>standar/obat/ubahRencana/<?= $ready['id_obat'];?>" method="post">
    
                                                        <div class="modal-body">
                                                            <div class="row g-2">
                                                                <div class="col mb-0">
                                                                    <label class="form-label" for="tahun">Tahun Pemenuhan</label>
                                                                    <select class="form-select" id="tahun" name="tahun">
                                                                        <?php foreach ($tahun as $t) : ?> 
                                                                            <?php if($t['tahun'] == $ready['tahun']) : ?>
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
                                                                            <?php if($ready['tw'] == $t['tw']) : ?>
                                                                                <option selected value="<?= $t ['tw'];?>"><?= $t ['tw'];?></option>
                                                                            <?php else : ?>
                                                                                <option value="<?= $t ['tw'];?>"><?= $t ['tw'];?></option>
                                                                            <?php endif ; ?>
                                                                        <?php endforeach ; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                                                        </div>
    
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endif ; ?>
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
            
            <?php if($this->session->flashdata('pesan_realisasi')) : ?>
                <div class="alert alert-<?= $this->session->flashdata('warna_realisasi'); ?> alert-dismissible fade show mb-3" role="alert">
                    <?= $this->session->flashdata('pesan_realisasi'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <?php endif ; ?>
            
            <div class="table-responsive mt-2 mb-2 mt-3">
                <table class="table table-borders table-small-text text-center" id="tabel2">
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
                                    <?php $realisasi = $this->Standar_model->getDataRealisasiObat($row['id_obat']) ; ?>
                                    <?php if($realisasi != null) : ?>
                                        <?php if($realisasi['link'] != null) : ?>
                                            <a href="<?= $realisasi['link'];?>" class="m-2" target="_blank" data-toggle="tooltip" title="Klik Untuk Menuju Link">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        <?php endif ; ?>
                                        <?php if($realisasi['berkas'] != null) : ?>
                                            <a href="<?= base_url() ;?>doc/obat/<?= $realisasi['berkas'];?>" class="m-2" target="_blank" data-toggle="tooltip" title="Tampilkan Berkas">
                                                <i class="fa fa-file"></i>
                                            </a>
                                        <?php endif ; ?>
                                    <?php else : ?>
                                        <i class="text-danger">n/a</i>
                                    <?php endif ; ?>
                                </td>
                                <td class="align-middle"><?= $row['tahun']; ?></td>
                                <td class="align-middle"><?= $row['tw']; ?></td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <?php if($realisasi == null) : ?>
                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#realisasi_<?= $row['id_obat'] ;?>"><i class="bx bx-edit-alt me-1">
                                                    </i>Input Realisasi Pemenuhan SRL
                                                </a> 
                                            <?php else : ?>
                                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#ubah_realisasi_<?= $row['id_obat'] ;?>"><i class="bx bx-edit me-1">
                                                    </i>Ubah Data Realisasi Pemenuhan SRL
                                                </a> 

                                                <a class="dropdown-item" href="<?= MYURL; ?>standar/obat/hapusRealisasi/<?= $realisasi['id_realisasi'] ;?>" onclick="return confirm('Data akan di hapus permanen, Yakin hapus realisasi?')">
                                                    <i class="bx bx-trash me-1"></i> Hapus Data Realisasi Pemenuhan
                                                </a>
                                            <?php endif ; ?>

                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- modal input realisasi -->
                                <div class="modal fade" id="realisasi_<?= $row['id_obat'] ;?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Data Dukung Realisasi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
                                            </div>
                                            <form action="<?= MYURL ;?>standar/obat/tambahRealisasi/<?= $row['id_obat'] ;?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="row g-2">
                                                        <div class="col mb-0">
                                                            <label class="form-label" for="link">Link Data Dukung</label>
                                                            <input class="form-control me-2" id="" id="link" name="link" />
                                                        </div>
                                                        <small>atau</small>
                                                        <div class="col mb-0">
                                                            <label for="berkas" class="form-label">Upload File</label>
                                                            <input class="form-control me-2" type="file" id="berkas" name="berkas" />
                                                            <small id="emailHelp" class="form-text text-danger">*pdf, doc, docx, xls, xlsx</small>
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

                            <!-- modal ubah realisasi -->
                            <?php if($realisasi) : ?>
                                <div class="modal fade" id="ubah_realisasi_<?= $row['id_obat'] ;?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Data Dukung Realisasi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
                                            </div>
                                            <form action="<?= MYURL ;?>standar/obat/ubahRealisasi/<?= $realisasi['id_realisasi'] ;?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="row g-2">
                                                        <div class="col mb-0">
                                                            <label class="form-label" for="link">Link Data Dukung</label>
                                                            <input class="form-control me-2" id="" id="link" name="link" value="<?= $realisasi['link'];?>" />
                                                        </div>
                                                        <small>atau</small>
                                                        <div class="col mb-0">
                                                            <label for="berkas" class="form-label">
                                                                Upload File
                                                                <?php if($realisasi['berkas'] != null) : ?>
                                                                    <i class="text-success">*</i>
                                                                    <input type="hidden" name="berkas_lama" value="<?= $realisasi['berkas']; ?>">
                                                                <?php else : ?>
                                                                    <input type="hidden" name="berkas_lama" value="">
                                                                <?php endif ; ?>
                                                            </label>
                                                            <input class="form-control me-2" type="file" id="berkas" name="berkas" />
                                                            <small id="emailHelp" class="form-text text-danger">*pdf, doc, docx, xls, xlsx</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ; ?>
                            <!-- tutup modal input realisasi -->
                        <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>

            <div class="mt-5"></div>

            <?php if($this->session->flashdata('pesan_catatan')) : ?>
                <div class="alert alert-<?= $this->session->flashdata('warna_catatan'); ?> alert-dismissible fade show mb-3" role="alert">
                    <?= $this->session->flashdata('pesan_catatan'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif ; ?>

            <?php if($catatan->num_rows() > 0) : ?>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#isi_catatan" aria-expanded="false" aria-controls="isi_catatan">
                    Tampilkan Catatan
                </button>
                
                <div class="collapse" id="isi_catatan">
                    <div class="table-responsive mt-2 mb-2">
                        <table class="table table-borders text-center" id="tabel3">
                            <thead>
                                <tr class="table-primary">
                                    <th>No</th>
                                    <th>Isi</th>
                                    <th>Tanggal</th>
                                    <th>Tanggapan</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ; ?>
                                <?php foreach ($catatan->result_array() as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['isi']; ?></td>
                                        <td><?= $this->Utility_model->formatTanggal($row['tgl1']); ?></td>
                                        <td>
                                            <?php if($row['balasan'] == '') : ?>
                                                -
                                            <?php else : ?>
                                                <?= $row['balasan']; ?>
                                            <?php endif ; ?>
                                        </td>
                                        <td>
                                            <?php if($row['tgl2'] == '0000-00-00') : ?>
                                                -
                                            <?php else : ?>
                                                <?= $this->Utility_model->formatTanggal($row['tgl2']); ?>
                                            <?php endif ; ?>
                                        </td>
                                    </tr>
                                <?php endforeach ; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <br>
            <?php endif ; ?>

            <form action="<?= MYURL ;?>standar/obat/tambahCatatan" method="post">
                <label for="catatan">CATATAN UNTUK VERIFIKATOR</label>
                <textarea name="catatan" id="catatan" cols="10" rows="10" class="form-control mb-3"></textarea> <br>
                <button class="btn btn-primary" type="submit">
                    Ajukan Verifikasi
                </button>
            </form>
        </div>
    </div>
</div>


<script>
    $("#tabel2").dataTable() ;
    $("#tabel3").dataTable() ;
</script>

<script src="<?= base_url() ;?>assets/tinymce/js/jquery.tinymce.min.js"></script>
<script src="<?= base_url() ;?>assets/tinymce/js/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector : '#catatan',
        plugins: 'lists',
        toolbar: 'undo redo | link image | code | numlist | bullist | bold | italic | underline | superscript | subscript | align | charmap | preview',
    });
</script>