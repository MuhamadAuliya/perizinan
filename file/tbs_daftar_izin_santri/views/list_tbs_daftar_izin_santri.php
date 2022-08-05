<div class="card">
    <div class="card-header">
        <h4>Izin Santri</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?target=tbs_daftar_izin_santri&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>NO</th><th>ID_IZIN</th><th>TANGGAL_IZIN</th><th>KETERANGAN_IZIN</th>LAMA<th>TUJUAN</th><th>TANGGAL_KEMBALI</th>
            </tr>
            </thead>
            <tbody>";
        // ambil data dari database
        $q = __ambil($db, "tbs_daftar_izin_santri");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
                <td>" . $no . "</td>
                <td>" . $r['ID_IZIN'] . "</td>
                <td>" . $r['TANGGAL_IZIN'] . "</td>
                <td>" . $r['KETERANGAN_IZIN'] . "</td>
                <td>" . $r['LAMA'] . "</td>
                <td>" . $r['TUJUAN'] . "</td>
                <td>" . $r['TANGGAL_KEMBALI'] . "</td>
                <td>
                    <a class='btn btn-success btn-sm' href='admin.php? target=tbs_daftar_izin_santri&action=edit&id=" . $r['ID_IZIN'] . "'>edit</a>
                    <a class='btn btn-danger btn-sm' href='admin.php? target=tbs_daftar_izin_santri&action=delete&id=" . $r['ID_IZIN'] . "'>hapus</a>
                </td>
            </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>