<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <title>Document</title>
</head>
<body>
    <script src="../assets/js/sweet.js"></script>
</body>
</html>
<?php 
session_start();
session_destroy();
echo "<script>swal({
    type: 'success',
    title: 'Logout Berhasil!',
    showConfirmButton: false,
    backdrop: 'rgba(0,0,123,0.5)',
    });
    window.setTimeout(function(){
        window.location.replace('login.php?loogout=Berhasil');
    } ,1500); </script>";
?>