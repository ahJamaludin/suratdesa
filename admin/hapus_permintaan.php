<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <title>hapus penduduk</title>
</head>
<body>
    <script src="../assets/js/sweet.js"></script>
</body>
</html>
<?php 
include 'sess_check.php';
$id = $_GET['id_surat'];

$ss = mysqli_query($xx,"DELETE FROM tbl_surat WHERE id_surat= '$id'");
if($ss){
    echo "<script>swal({
    type: 'success',
    title: 'Data Berhasil Di Hapus!',
    showConfirmButton: false,
    backdrop: 'rgba(0,0,123,0.5)',
    });
    window.setTimeout(function(){
        window.location.replace('permintaan.php');
    } ,1500); </script>";
}else{
    echo "<script>swal({
        type: 'error',
        title: 'Maaf Hapus Data Gagal!',
        showConfirmButton: false,
        backdrop: 'rgba(123,0,0,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('Permintaan.php');
        } ,1500); </script>";
}
?>