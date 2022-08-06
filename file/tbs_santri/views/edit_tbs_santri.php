<?php
$db = __database();
$where = [
    'nis' => $_GET['id']
];
$query  = __ambil($db, "tbs_santri", "*", $where);
// menampilkan hasil query dalam bentuk object
// anda bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll

$rows  = $query->fetch_object();
// print_r($rows);
?>
<div class="card">
    <div class="card-header">
        <h4>edit  member</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=tbs_santri&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->NIS; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    NAMA
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nama" value="<?php echo $rows->NAMA; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    JENIS KELAMIN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="jenis_kelamin" value="<?php echo $rows->JENIS_KELAMIN; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TANGGAL LAHIR
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="date" name="tanggal_lahir" value="<?php echo $rows->TANGGAL_LAHIR; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    ASRAMA
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="asrama" value="<?php echo $rows->ASRAMA; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="submit" class="btn btn-success btn-sm" value="simpan">
                        <a class="btn  btn-danger btn-sm" href="admin.php?taarget=tbs_santri">kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>