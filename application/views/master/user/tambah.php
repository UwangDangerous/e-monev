<div class="card p-3 mt-3">
    <form action="" method="post">
        <div class="row">

            <div class="col-lg-6">
                <label for="kode">Kode / NIP <i class="text-danger">*</i></label>
                <input type="text" name="kode" id="kode" class='form-control mb-3' value="<?= set_value("kode") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('kode'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="nama">Nama<i class="text-danger">*</i></label>
                <input type="text" name="nama" id="nama" class='form-control mb-3' value="<?= set_value("nama") ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="id_level">Level User<i class="text-danger">*</i></label>
                
                <select name="id_level" id="id_level" class='form-control mb-3'>
                    <option value="">--pilih--</option>
                    <?php foreach ($level as $l) : ?>
                        <option value="<?= $l['id_level'];?>"><?= $l['nama_level']; ?></option>
                    <?php endforeach ; ?>
                </select>
                <small id="emailHelp" class="form-text text-danger"><?= form_error('id_level'); ?></small>
            </div>

            <div class="col-lg-12">
                <button class="btn btn-primary" type="submit">
                    Simpan
                </button>
            </div>

        </div>
    </form>
</div>