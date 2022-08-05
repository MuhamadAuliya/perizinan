<div class="card">
    <div class="card-header">
        <h4>User</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?target=db_user&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>NO</th><th>ID_USER</th><th>USERNAME</th><th>PASSWORD</th><th>JABATAN</th><th>ACTION</th>
            </tr>
            </thead>
            <tbody>";
        // ambil data dari database
        $q = __ambil($db, "db_user");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
                <td>" . $no . "</td>
                <td>" . $r['ID_USER'] . "</td>
                <td>" . $r['USERNAME'] . "</td>
                <td>" . $r['PASSWORD'] . "</td>
                <td>" . $r['JABATAN'] . "</td>
                <td>
                    <a class='btn btn-success btn-sm' href='admin.php? target=db_user&action=edit&id=" . $r['ID_USER'] . "'>edit</a>
                    <a class='btn btn-danger btn-sm' href='admin.php? target=db_user&action=delete&id=" . $r['ID_USER'] . "'>hapus</a>
                </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>