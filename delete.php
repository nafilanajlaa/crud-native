<?php

include 'koneksi.php';

$id = $GET['id'];

mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");

header("location:read.php");


?>