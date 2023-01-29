<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "balmon_ukuradio";
$koneksi = mysqli_connect($host, $user, $password, $database);
if ($koneksi->connect_error) {
	die("Koneksi gagal");
}
