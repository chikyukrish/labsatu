<?php

session_start();
session_destroy();

echo "<script>alert('Anda Sudah Logout') </script>";
header("Location: MFSG22LOBI======.php");

