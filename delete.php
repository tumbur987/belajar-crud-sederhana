<?php

    include "connection.php";

    if(isset($_POST)) {
        $id    = $_POST["id"];

        $query = "DELETE FROM pengalaman WHERE pengalaman.id = '$id'";

        mysqli_query($db, $query);
        
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    }

?>