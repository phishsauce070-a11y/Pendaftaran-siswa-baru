<?php
$nama = $_POST['nama'];
$tempat = $_POST['tempattinggal'];
$tanggal = $_POST['tanggallahir'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$sekolah = $_POST['sekolah'];
$nilai = $_POST['nilai'];
echo "<p>Nama Lengkap: $nama<p>";
echo "<p>Tempat Lahir: $tempat<p>";
echo "<p>Tanggal Lahir: $tanggal<p>";
echo "<p>Alamat Rumah: $alamat<p>";
echo "<p>Jenis Kelamin: $kelamin<p>";
echo "<p>Asal Sekolah: $sekolah<p>";
echo "<p>Nilai UAN: $nilai<p>";
?>