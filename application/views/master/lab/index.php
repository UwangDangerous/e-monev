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

            <a href="<?= MYURL; ?>master/lab/tambah" class="btn btn-primary">Tambah Data</a>

            <div class="table-responsive text-nowrap mt-3">
                <table class="table table-sm table-borders table-small-text text-center" id="tabel">
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Laboratorium</th>
                            <th>Nama Lain</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ; ?>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nama_lab']; ?></td>
                                <td><?= $row['nama_lain']; ?></td>
                                <td>
                                    <a href="<?= MYURL ;?>master/lab/ubah/<?= $row['id_lab'] ;?>" class="badge badge-success" data-toggle="tooltip" title="Ubah Data"><i class="fa fa-edit"></i></a>
                                    <a href="<?= MYURL ;?>master/lab/hapus/<?= $row['id_lab'] ;?>" class="badge badge-danger" onclick="return confirm('yakin?')" data-toggle="tooltip" title="Ubah Data"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>