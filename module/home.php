<?php
$database = new Database();
$data = $database->main("tb_lab6");
?>
<div class="main">
    <a class="tambah" href="add">tambah</a>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach($data as $row) {
        ?>
            <tr>
            <td><?=$row['nim']; ?></td>
            <td><?=$row['nama']; ?></td>
            <td><?=$row['kelas']; ?></td>
            <td><?=$row['prodi']; ?></td>
            <td>
              <a href="update?nim=<?= $row['nim']; ?>"><button>update</button></a>
              <a href="hapus?nim=<?= $row['nim']; ?>"><button>hapus</button></a>
            </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>