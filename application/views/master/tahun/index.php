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

            <button  data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah Data</button>

            <div class="table-responsive text-nowrap mt-3">
                <table class="table table-sm table-borders table-small-text text-center" id="tabel">
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ; ?>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['tahun']; ?></td>
                                <td>
                                    <a href="<?= MYURL ;?>master/tahun/hapus/<?= $row['tahun'] ;?>" class="badge badge-danger" onclick="return confirm('yakin?')" data-toggle="tooltip" title="Ubah Data"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Tahun</h5>
                <button type="button"  class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= MYURL ;?>master/tahun/tambah" method="post">
                <div class="modal-body">
                    <label for="tahun">Tahun</label>
                    <input type="number" name="tahun" id="tahun" class='form-control mb-3'>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>