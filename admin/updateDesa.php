<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/js/sweet.js">
    <title>Update Desa</title>
</head>
<body>
    <script src="../assets/js/sweet.js"></script>
    
</body>
</html>

<?php 
include 'sess_check.php';

$id_desa = $_POST['id_desa'];
$nama_desa = $_POST['nama_desa'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$Carik = $_POST['Carik'];
$Petinggi = $_POST['Petinggi'];

$ole = mysqli_query($xx,"UPDATE tbl_desa SET nama_desa='$nama_desa', kecamatan='$kecamatan', kabupaten='$kabupaten', Carik='$Carik', Petinggi='$Petinggi'");
if($ole){
    echo "<script>swal({
        type: 'success',
        title: 'Data Berhasil Di ubah!',
        showConfirmButton: false,
        backdrop: 'rgba(0,0,123,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('pengaturan.php');
        } ,1500); </script>";
}else{
    echo "<script>swal({
        type: 'error',
        title: 'Data Gagal Di ubah!',
        showConfirmButton: false,
        backdrop: 'rgba(123,0,0,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('pengaturan.php');
        } ,1500); </script>";
}
?>