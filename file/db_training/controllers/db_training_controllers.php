<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'id_user' => $_POST['id_user'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'jabatan' => $_POST['jabatan']
    ];
    $simpan = __simpan($db, "db_user", $data);
    if ($simpan) {
        ?>
        <script>
            window.location.href = 'admin.php?target=db_user';
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
        'id_user' => $_GET['id']
    ];
    $delete = __delete($db, "db_user", $where);
    if ($delete) {
        ?>
        <script>
            window.location.href ='admin.php?target=db_user';
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
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'jabatan' => $_POST['jabatan']
    ];
    $where = [
        'id_user' => $_POST['id']
    ];
    $update = __update($db, "db_user", $data, $where);
    if ($update) {
        ?>
        <script>
            window.location.href = 'admin.php?target=db_user';
        </script>
    <?php
    } else {
        echo "gagal update" . $db->error;
    }
}
// end kondisi update
?>