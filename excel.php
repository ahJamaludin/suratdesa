<?php
include 'koneksi.php';
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 2;$i < count($sheetData);$i++)
	{
        $no_kk			= $sheetData[$i]['1'];
        $nama_kk		= $sheetData[$i]['2'];
        $nik			= $sheetData[$i]['3'];
        $jenis_kelamin	= $sheetData[$i]['4'];
        $tempat_lahir	= $sheetData[$i]['5'];
        $tanggal_lahir	= $sheetData[$i]['6'];
        $agama			= $sheetData[$i]['7'];
        $pendidikan		= $sheetData[$i]['8'];
        $pekerjaan		= $sheetData[$i]['9'];
        $status_perkawinan = $sheetData[$i]['10'];
        $hubungan_keluarga		= $sheetData[$i]['11'];
        $warga			= $sheetData[$i]['12'];
        $ayah			= $sheetData[$i]['13'];
        $ibu			= $sheetData[$i]['14'];
        $alamat			= $sheetData[$i]['15'];
        $rt				= $sheetData[$i]['16'];
        $rw				= $sheetData[$i]['17'];
        mysqli_query($xx,"INSERT INTO tbl_penduduk (id,no_kk,nama_kk,nik,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,pendidikan,pekerjaan,status_perkawinan,hubungan_keluarga,warga,ayah,ibu,alamat,rt,rw) VALUES ('','$no_kk','$nama_kk','$nik','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$agama','$pendidikan','$pekerjaan','$status_perkawinan','$hubungan_keluarga','$warga','$ayah','$ibu','$alamat','$rt','$rw')");
    }
    header("Location: admin/DataPenduduk.php"); 
}
?>