<?php
$db = __database();
$where = [
    'kd_prodi' => $_GET['id']
];
$query  = __ambil($db, "prodi", "*", $where);
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
        <form method="post" action="admin.php?target=tbs_daftar_izin_santri&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_IZIN; ?>">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TANGGAL IZIN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="tanggal_izin" value="<?php echo $rows->TANGGAL_IZIN; ?>"/>
                </div>
            </div>
                <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    KETERANGAN IZIN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="keterangan_izin" value="<?php echo $rows->KETERANGAN_IZIN; ?>"/>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    LAMA
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="lama" value="<?php echo $rows->LAMA; ?>"/>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TUJUAN
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="tujuan" value="<?php echo $rows->TUJJUAN; ?>"/>
                </div>
            </div>
            <div class="mb-3">
            <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    TANGGAL KEMBALI
                </label>
                <div class="col=md-6 col-sm-6 col-lg-12">
                    <input type="text" name="tanggal_kembali" value="<?php echo $rows->TANGGAL_KEMBALI; ?>"/>
                </div>
            </div>
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="submit" class="btn btn-success btn-sm" value="simpsn">
                        <a class="btn  btn-danger btn-sm" href="admin.php?taarget=prodi">kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>