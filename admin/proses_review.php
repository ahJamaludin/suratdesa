<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <title>Proses Proview</title>
</head>
<body>
    <script src="../assets/js/sweet.js"></script>
</body>
</html>
<?php 
include 'sess_check.php';
$id_surat = $_POST['id_surat'];
$no_kk      = $_POST['no_kk'];
$nama_warga      = $_POST['nama_warga'];
$tempat_lahir     = $_POST['tempat_lahir'];
$tgl_lahir     = $_POST['tgl_lahir'];
$NIK      = $_POST['NIK'];
$jk     = $_POST['jk'];
$agama   = $_POST['agama'];
$status      = $_POST['status'];
$pekerjaan      = $_POST['pekerjaan'];
$alamat      = $_POST['alamat'];
$keperluan      = $_POST['keperluan'];
$keterangan      = $_POST['keterangan'];
$ttd      = $_POST['ttd'];
$jabatan      = $_POST['jabatan'];

$ss = mysqli_query($xx, "UPDATE tbl_surat SET keterangan='$keterangan', ttd='$ttd', jabatan='$jabatan' WHERE id_surat='$id_surat'");
if($ss){
    echo "<script>swal({
        type: 'success',
        title: 'Data Berhasil Di ubah!',
        showConfirmButton: false,
        backdrop: 'rgba(0,0,123,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('permintaan.php');
        } ,1500); </script>";
}else{
    echo "<script>swal({
        type: 'error',
        title: 'Data Gagal Di ubah!',
        showConfirmButton: false,
        backdrop: 'rgba(123,0,0,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('permintaan.php');
        } ,1500); </script>";
}
?>