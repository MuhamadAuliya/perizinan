<div class="card">
    <div class="card-header">
        <h4></h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?target=db_atribut&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>ID_ATRIBUT</th>
            <th>NAMA_ATRIBUT</th>
            <th>NILAI_IZIN</th>
            <th>ACTION</th>
            </tr>
            </thead>
            <tbody>";
        // ambil data dari database
        $q = __ambil($db, "db_atribut");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
                <td>" . $no . "</td>
                <td>" . $r['ID_ATRIBUT'] . "</td>
                <td>" . $r['NAMA_ATRIBUT'] . "</td>
                <td>
                    <a class='btn btn-success btn-sm' href='admin.php? target=db_atribut&action=edit&id=" . $r['ID_ATRIBUT'] . "'>edit</a>
                    <a class='btn btn-danger btn-sm' href='admin.php? target=db_atribut&action=delete&id=" . $r['ID_ATRIBUT'] . "'>hapus</a>
                </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>