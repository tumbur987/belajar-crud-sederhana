<?php

    include "connection.php";

    if(isset($_POST)) {
        $pos   = $_POST["posisi"];
        $ins   = $_POST["instansi"];
        $drs   = $_POST["durasi"];

        $query = "INSERT INTO pengalaman (posisi, instansi, durasi) VALUE ('$pos', '$ins', '$drs')";

        mysqli_query($db, $query);

        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    }

?>