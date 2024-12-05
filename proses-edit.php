<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    if(!empty($_FILES['foto']['name'])){
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        unlink("images/".$data['foto']);
        $path = "gambar/".$foto;

        if(move_uploaded_file($tmp, $path)){
            $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', foto='$foto', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id='$id'";
            $query = mysqli_query($db, $sql);
        }
    }else{
        $foto = $_FILES['foto'];
        $tmp = $_FILES['foto'];
        $path = "gambar/".$foto;

        if(move_uploaded_file($tmp, $path)){
            $sql = "INSERT INTO calon_siswa (foto) VALUE ('$foto')";
            $query = mysqli_query($db, $sql);
        }
    }

    if( $query ) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>