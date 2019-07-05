<main>
    <div class="container">
        <h1 class="display-4">Daftar Karyawan</h1>
        <a href="tambah.php">+ Tambah Data Karyawan</a>
        <table class="table">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NRP</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Jabatan</th>
            </tr>

            <?php $i = 1 ?>
            <?php foreach( $data['mhs'] as $row ) : ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $row["nrp"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jabatan"] ?></td>
            </tr>

            <?php $i++ ?>
            <?php endforeach ?>
        </table>
    </div>
</main>