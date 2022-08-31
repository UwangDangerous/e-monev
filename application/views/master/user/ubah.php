<div class="card p-3 mt-3">
    <form action="" method="post">
        <div class="row">

            <div class="col-lg-6">
                <label for="kode">Kode / NIP <i class="text-danger">*</i></label>
                <input type="text" name="kode" id="kode" class='form-control mb-3' value="<?= $data["kode"] ;?>">
                <input type="hidden" name="kode_lama" value="<?= $data['kode'] ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('kode'); ?></small>
            </div>

            <div class="col-lg-6">
                <label for="nama">Nama<i class="text-danger">*</i></label>
                <input type="text" name="nama" id="nama" class='form-control mb-3' value="<?= $data["nama"] ;?>">
                <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>

            <?php if($data['id_level'] == 1) : ?>
                <input type="hidden" name="id_level" value="<?= $data['id_level'] ;?>">
            <?php else : ?>
                <div class="col-lg-6">
                    <label for="id_level">Level User<i class="text-danger">*</i></label>
                    <select name="id_level" id="id_level" class='form-control mb-3'>
                        <option value="">--pilih--</option>
                        <?php foreach ($level as $l) : ?>
                            <?php if($l['id_level'] == $data['id_level']) : ?>
                                <option selected value="<?= $l['id_level'];?>"><?= $l['nama_level']; ?></option>
                            <?php else : ?>
                                <option value="<?= $l['id_level'];?>"><?= $l['nama_level']; ?></option>
                            <?php endif ; ?>
                        <?php endforeach ; ?>
                    </select>
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('id_level'); ?></small>
                </div>
            <?php endif ; ?>

            <div class="col-lg-12">
                <button class="btn btn-primary" type="submit">
                    Ubah
                </button>
            </div>

        </div>
    </form>
</div>