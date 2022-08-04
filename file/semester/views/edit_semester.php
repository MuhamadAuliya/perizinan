<?php
$db = __database();
$where = [
    'kd_semester' => $_GET['id']
];
$query  = __ambil($db, "semester",  "*", $where);
// menampilkan hasil query dalam bentuk object
// anda juga bisa menggunakan mysql_fetch_assoc atau  mysql_fetch_array dll

$rows  = $query->fetch_object();
// print_r($rows);
?>
<div  class="card-header">
    <div class="card-header">
        <h4>edit member</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=semester&action=update" data-parsley-validate class="form-horizontal form-label-left">
        <input type="hidden" name="id" value="<?php echo $rows->kd_semester; ?>">
        <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="frist-name">
            semester
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
                <input type="text" name="semester" class="from-control" value="<?php echo $rows->semester; ?>" />
            </div>
        </div>
        <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
            sebaran
            </label>
            <div class="col-md-6 col-sm-6col-lg-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sebaran_semester" id="sebaran_semester_ganjil" value="ganjil" <?php echo $rows->sebaran_semester == "ganjil" ? "checked" : ""; ?>>
                    <label class="form-check-label" for="sebaran_semester_ganjil">
                    ganjil
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sebaran_semester" id="sebaran_semester_genap" value="genap" <?php echo $rows->sebaran_semester == "genap" ? "checked" : ""; ?>>
                    <label  class="form-check-label" for="sebaran_semester_genap">
                    genap
                    </label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
            prodi
            </label>
            <div class="col-md-6 col-sm-6 col-lg-12">
                <select name="kd_prodi" id="kd_prodi" class="form-select">
                    <option value="">pilih prodi</option>
                    <?php
                    $db = __database();
                    $prodi_data = __ambil($db, "prodi");
                    while ($r = $prodi_data->fetch_array()) {
                        ?>
                            <option value="<?php echo $r['kd_prodi']; ?>" <?php echo $rows->kd_prodi == $r['kd_prodi'] ? "selected" : ""; ?>><?php echo $r['nama_prodi']; ?><?option>
                    <?php
                }
                    ?>
                </select>
            </div>
        </div>
        <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="submit" class="btn btn-success btn-sm" value="simpan">
                    <a class="btn btn-danger btn-sm" href="admin.php? target=semester">kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
