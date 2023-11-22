<?php
    include "connection.php";

    if (isset($_POST['score'])) {
        $nama = $_POST['nama'];
        $score = $_POST['score'];

        $sql = "INSERT INTO score (no, nama, score) VALUES (NULL, '$nama', '$score')";

        if ($conn->query($sql) === TRUE) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
    }
?>