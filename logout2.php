<?php
//function start lagi
session_start();

//cek apakah session terdaftar
if(($_SESSION["email"])){

//session terdaftar, saatnya logout
session_unset();
session_destroy();
}
echo"<script>alert('Terimakasih telah berkunjung ke website kami!');</script>";
echo "<script>location='index.php';</script>";
?>