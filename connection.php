<?php
$conn = mysqli_connect("localhost", "root", "", "sgp1");

if (!$conn) {
    die('error' . mysqli_error($conn));
}
?>