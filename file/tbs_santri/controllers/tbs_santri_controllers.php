<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'nis' => $_POST['nis'],
        'nama' => $_POST['nama'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'tanggal_lahir' => $_POST['tanggal_lahir'],
        'asrama' => $_POST['asrama']
    ];
    $simpan = __simpan($db, "tbs_santri", $data);
    if ($simpan) {
        ?>
        <script>
            window.location.href = 'admin.php?target=tbs_santri';
        </script>
    <?php
    } else {
        echo "gagal simpan " . $db->error;
    }
}
// end kondisi input
// start  kondisi delete
elseif ($opsi == "delete") {
    $where = [
        'nis' => $_GET['id']
    ];
    $delete = __delete($db, "tbs_santri", $where);
    if ($delete) {
        ?>
        <script>
            window.location.href ='admin.php?target=tbs_santri';
        </script>
    <?php
    } else {
        echo "gagal hapus" . $db->error;
    }
}
// end kondisi delete
// start kondisi update
elseif ($opsi == "update") {
    $data = [
        'nama' => $_POST['nama'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'tanggal_lahir' => $_POST['tanggal_lahir'],
        'asrama' => $_POST['asrama']
    ];
    $where = [
        'nis' => $_POST['id']
    ];
    $update = __update($db, "tbs_santri", $data, $where);
    if ($update) {
        ?>
        <script>
            window.location.href = 'admin.php?target=tbs_santri';
        </script>
    <?php
    } else {
        echo "gagal update" . $db->error;
    }
}
// end kondisi update
?>