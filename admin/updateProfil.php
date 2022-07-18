<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <title>Update Profil</title>
</head>
<body>
    
    <script src="../assets/js/sweet.js"></script>
</body>
</html>
<?php 
include 'sess_check.php';
$id_adm = $_POST['id_adm'];
$nama_adm = $_POST['nama_adm'];
$email_adm = $_POST['email_adm'];
$password = $_POST['password'];

$ss = mysqli_query($xx, "UPDATE tbl_admin SET nama_adm='$nama_adm', email_adm='$email_adm',  password='$password'");
if($ss){
    echo "<script>swal({
        type: 'success',
        title: 'Data Berhasil Di ubah!',
        showConfirmButton: false,
        backdrop: 'rgba(0,0,123,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('profil.php');
        } ,1500); </script>";
}else{
    echo "<script>swal({
        type: 'error',
        title: 'Data Gagal Di ubah!',
        showConfirmButton: false,
        backdrop: 'rgba(123,0,0,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('profil.php');
        } ,1500); </script>";
}
?>