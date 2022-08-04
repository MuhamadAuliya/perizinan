<?php
$db = __database();
?>
<div class="card">
    <div class="card-header">
        <h4>Form Mahasiswa</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=mahasiswa&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                NPM
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="npm" class="form-control" />
                </div>
    </div>
    <div class="mb-3">
        <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
        Nama
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12">
            <input type="text" name="nama" class="form-control" />
        </div>
    </div>
    <div class="mb-3">
        <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
        Semester
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12">
            <select name="kd_semester" id="kd_semester" class="form-select">
                <option value="">Pilih Semester</option>
                <?php
                $db == __database();
                $semester_data = __ambil($db, "semester", "*", $where);
                while ($s = $semester_data->fetch_array()) {
                    ?>
                    <option value="<?php echo $s['kd_semester']; ?>"><?php echo $s['semester']; ?></option>
                    <?php
                }
                ?>
                </select>
        </div>
    </div>
    <div class="mb-3">
        <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
        Prodi
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12">
            <select name="kd_prodi" id="kd_prodi" class="form-select">
                <option value="">Pilih Prodi</option>
                <?php
                $where_prodi = [
                    'kd_prodi' => $_SESSION['id']
                ];
                $prodi_data = __ambil($db, "prodi", "*", $where);
                while ($r = $prodi_data->fetch_array()) {
                    ?>
                        <option value="<?php echo $r['kd_prodi']; ?>"><?php echo $r['nama_prodi']; ?></option>
                        <?php
                }
                ?>
                </select>
        </div>
    </div>

    <div class="mb-3">
        <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
        Password
        </label>
        <div class="col-md-6 col-sm-6 col-lg-12">
            <input type="password" name="password" class="form-control" />
        </div>
    </div>

    <div class="mb-3">
        <div class="col-md-6 col-sm-6 col-lg-12">
            <input type="submit" class="btn btn-success btn-sm" value="Simpan">
            <a class="btn btn-danger btn-sm" href="admin.php?target=mahasiswa">Kembali</a>
        </div>
    </div>
</form>
</div>
    </div>