
<?php
    include "read.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr> <!-- tr = table row -->
                <th>No.</th>
                <th>Posisi</th>
                <th>Instansi</th>
                <th>Durasi (tahun)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row["posisi"] ?></td>
                    <td><?= $row["instansi"] ?></td>
                    <td><?= $row["durasi"] ?></td>
                    <td>
                        <a href="edit.php?xxx=<?= $row['id'] ?>">Ubah</a>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
    <div style="padding: 10px; border: solid 1px; margin-top: 10px">
        <form action="create.php" method="POST">
            <label for="posisi">
                Posisi
                <input type="text" name="posisi" id="posisi">
            </label>
            <br>
            <label for="instansi">
                Instansi
                <input type="text" name="instansi" id="instansi">
            </label>
            <br>
            <label for="durasi">
                Durasi
                <input type="number" name="durasi" id="durasi">
            </label>
            <br>
            <button type="submit">Simpan Data</button>
        </form>
    </div>
</body>
</html>