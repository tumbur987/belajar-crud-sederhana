<?php

    include "connection.php";

    if(isset($_POST)) {
        $id    = $_POST["id"];
        $pos   = $_POST["posisi"];
        $ins   = $_POST["instansi"];
        $drs   = $_POST["durasi"];

        $query = "UPDATE pengalaman SET posisi = '$pos', instansi = '$ins', durasi = '$drs' WHERE pengalaman.id = '$id'";

        mysqli_query($db, $query);
        

        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    }

?>