<?php

    include "connection.php";

    // Untuk membaca data dari tabel 'pengalaman' dalam database
    $result = $db->query("SELECT * FROM pengalaman");

?>