<?php 
require_once 'latihan5.php';

$data = new buku('ips','200','biru','bahrudin');

echo 'judul buku = '.$data->judulbuku."<br>";
echo 'jumlaha halaman = '.$data->halaman."<br>";
echo 'warna buku = ' .$data->warna."<br>";
echo ' pengarang = '.$data->pengarang."<br>";
 ?>