<?php
$host = "localhost";
$username ="root";
$password =""; 
$database = "bukutamu";

$koneksi = new mysqli($host,$username,$password,$database) or die(mysqli_error($koneksi));
if (!$koneksi) {
    echo "invalid";
} else {
    echo "valid";
}