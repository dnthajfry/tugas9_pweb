<?php

$server = "localhost";
$user = "admin";
$password = "jefryudhi098";
$nama_database = "pendaftaran_smk";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>