<?php

session_start();

include 'koneksi.php';

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$insert = mysqli_query($conn, "INSERT INTO guestbook (id, tanggal, nama, pesan) VALUES(NULL, NOW(), '{$nama}', '{$pesan}')");

if ($insert) {
	echo "<script> 
            alert('Pesan Berhasil di Kirim');
            document.location.href = 'gb.php';
        </script>
    ";
}


