<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <title>Csurat</title>
</head>
<body>
    <script src="assets/js/sweet.js"></script>
</body>
</html>
<?php 
include 'koneksi.php';
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
$keterangan      = "Belum Dilihat";
$ttd      = "Belum Ada";
$jabatan      = "Belum Ada";

$ss = mysqli_query($xx,"INSERT INTO tbl_surat VALUES('','$no_kk','$nama_warga','$tempat_lahir','$tgl_lahir','$NIK','$jk','$agama','$status','$pekerjaan','$alamat','$keperluan','$keterangan','$ttd','$jabatan')");
if($ss){
    echo "<script>swal({
        type: 'success',
        title: 'Permintaan Surat Berhasil',
        showConfirmButton: false,
        backdrop: 'rgba(0,0,123,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('data_penduduk.php');
        } ,1500); </script>";
}else{
    echo "<script>swal({
        type: 'error',
        title: 'Permintaan Surat Gagal!',
        showConfirmButton: false,
        backdrop: 'rgba(0,0,123,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('data_penduduk.php');
        } ,1500); </script>";
}
?>