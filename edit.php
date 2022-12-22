<?php

    include "connection.php";

    $id = $_GET["xxx"];

    $before_edit_query = "SELECT * FROM pengalaman WHERE pengalaman.id = '$id'";

    $before_edit_result = mysqli_query($db, $before_edit_query);
    
    $data = $before_edit_result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
</head>
<body>
    <div style="padding: 10px; border: solid 1px; margin-top: 10px">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <label for="posisi">
                Posisi
                <input type="text" name="posisi" id="posisi" value=" <?= $data['posisi'] ?> ">
            </label>
            <br>
            <label for="instansi">
                Instansi
                <input type="text" name="instansi" id="instansi" value="<?= $data['instansi'] ?>">
            </label>
            <br>
            <label for="durasi">
                Durasi
                <input type="number" name="durasi" id="durasi" value="<?= $data['durasi'] ?>">
            </label>
            <br>
            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>