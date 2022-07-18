<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <title>Hsuratkerja</title>
</head>
<body>
    <script src="../assets/js/sweet.js"></script>
</body>
</html>
<?php 
include 'sess_check.php';
$id = $_GET['id_keperluan'];

$ss = mysqli_query($xx,"DELETE FROM tbl_keperluan WHERE id_keperluan= '$id'");
if($ss){
    echo "<script>swal({
    type: 'success',
    title: 'Data Berhasil Di Hapus!',
    showConfirmButton: false,
    backdrop: 'rgba(0,0,123,0.5)',
    });
    window.setTimeout(function(){
        window.location.replace('surat.php');
    } ,1500); </script>";
}else{
    echo "<script>swal({
        type: 'error',
        title: 'Maaf Data Gagal Dihapus!',
        showConfirmButton: false,
        backdrop: 'rgba(123,0,0,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('surat.php');
        } ,1500); </script>";
}
?>