<?php
$db = __database();
$where = [
    'id_user' => $_GET['id']
];
$query  = __ambil($db, "db_user", "*", $where);
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
        <form method="post" action="admin.php?target=db_user&action=update" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="id" value="<?php echo $rows->ID_USER; ?>">
            <div class="mb-3">
                 <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                     USERNAME
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="username" id="username" class="form-control" value="<?php echo $rows->USERNAME;?>" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                     PASSWORD
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="password" id="password" class="form-control" value="<?php echo $rows->PASSWORD;?>" />
                 </div>
             </div>
             <div class="mb-3">
                 <label class="control=label col-md-3 col-sm-3 col-lg-12" for="first-name">
                     JABATAN
                 </label>
                 <div class="col-md-6 col-sm-6 col-lg-12">
                     <input type="text" name="jabatan" id="jabatan" class="control-label col-md-3 col-sm-3 col-lg-12" value="<?php echo $rows->JABATAN;?>" />
                 </div>
             </div>
                <div class="mb-3">
                    <div class="col-md-6 col-sm-6 col-lg-12">
                        <input type="submit" class="btn btn-success btn-sm" value="simpan">
                        <a class="btn  btn-danger btn-sm" href="admin.php?taarget=prodi">kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>