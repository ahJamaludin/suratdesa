<?php
// Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)
function Indonesia2Tgl($tanggal){
	$namaBln = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
					 
	$tgl=substr($tanggal,8,2);
	$bln=substr($tanggal,5,2);
	$thn=substr($tanggal,0,4);
	$tanggal ="$tgl ".$namaBln[$bln]." $thn";
	return $tanggal;
}
 include'../admin/sess_check.php';
 $haries = array("Sunday" => "Minggu", "Monday" => "Senin", "Tuesday" => "Selasa", "Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jum'at", "Saturday" => "Sabtu");
 $mont = array("01" => "Januari", "02" => "Februari", "03" => "Maret", "04" => "April", "05" => "Mei", "06" => "Juni", 
 "07" => "Juli", "08" => "Agustus", "09" => "September", "10" => "Oktober", "11" => "November", "12" => "Desember");
$t = date('Y');
$hari = $haries[date('l')];
$m = $mont[date('m')];
$day = date('d');
date_default_timezone_set("Asia/Jakarta");

$id_surat = $_GET['id_surat'];
$surat = mysqli_query($xx, "SELECT * FROM tbl_surat WHERE id_surat = '$id_surat'");
$s = mysqli_fetch_assoc($surat);

$sqli = mysqli_query($xx,"SELECT * FROM tbl_desa ORDER BY id_desa DESC");
$d = mysqli_fetch_assoc($sqli);
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Surat Keterangan Usaha</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: center;
			font-size: 17px;
		}
		table tr .text {
			text-align: center;
			font-size: 15px;
		}
		table tr td {
			font-size: 15px;
		}

	</style>
</head>
<body>
	<center>
		<table width="650">
			<tr>
				<td><img src="../assets/img/jepara.png" width="90" height="90"></td>
				<td>
				<center>
					<font size="5"><b>PEMERINTAH KABUPATEN <?= strtoupper($d['kabupaten'])  ?></b></font><br>
					<font size="5"><b>KECAMATAN <?= strtoupper($d['kecamatan'])  ?></b></font><br>
					<font size="5"><b>PETINGGI <?=strtoupper($d['nama_desa'])  ?></b></font><br>
					<font size="3"><b>Alamat : Jl. Raya Dongos Kedung, Kedung Jepara Provinsi Jawa Tengah</b></font><br>
					<font size="3"><b>Kode Pos 59463 Email : balaidesadongos@gmail.com</b> </font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr size="5px" style="background-color: black;"></td>
			</tr>
		<table>
			<tr>
				<td class="text2"><b>SURAT KETERANGAN</b></td>
			</tr>
            <tr>
				<td><hr width="100%" style="margin-top: -5px; background-color:#000000;" size="4px"></td>
			</tr>
            <tr>
                <td>Nomer: </td>
            </tr>
		</table>
		</table>
		<br>
		<table width="650">
			<tr>
		       <td>
			       <font size="2" class="text">Yang bertanda tangan dibawah ini saya:</font>
		       </td>
		    </tr>
		</table>
		<table width="650">
        <tr class="text2">
				<td>Nama</td>
				<td width="500">: <b><?= $s['ttd'] ?></b></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td width="500">: <?= $s['jabatan'] ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td width="500">: Dongos RT.002 RW.004 Kecamatan Kedung Kabupaten Jepara</td>
			</tr>
		</table>
        <br>
		<table width="650">
			<tr>
		       <td>
			       <font size="2" class="text">Atas Nama Petinggi Desa <?= $d['nama_desa'] ?>, Kecamatan <?= $d['kecamatan'] ?> Kabupaten <?= $d['kabupaten'] ?> dengan ini menerangkan,</font>
		       </td>
		    </tr>
			<tr>
		       <td>
			       <font size="2" class="text">Bahwa:</font>
		       </td>
		    </tr>
		</table>
		<table width="650">
        <tr class="text2">
				<td>Nama</td>
				<td width="500">: <?= $s['nama_warga'] ?></td>
			</tr>
			<tr>
				<td>Tempat,Tanggal Lahir</td>
				<td width="500">: <?= $s['tempat_lahir'] ?>,<?php echo Indonesia2Tgl($s['tgl_lahir']) ?></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td width="500">: <?= $s['NIK'] ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td width="500">: <?= $s['jk'] ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td width="500">: <?= $s['agama'] ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td width="500">: <?= $s['status'] ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td width="500">: <?= $s['pekerjaan'] ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td width="500">: <?= $s['alamat'] ?></td>
			</tr>
			<tr>
				<td>Keperluan</td>
				<td width="500">: <?= $s['keperluan'] ?></td>
			</tr>
		</table>
		<br>
		<table width="650">
			<tr>
		       <td>
			       <font size="2" class="text">&emsp;&emsp;Dan kemudian dapat kami terangkan bahwa yang bersangkutan tersebut diatas benar-benar Penduduk Desa <?= $s['alamat'] ?> Kecamatan Kedung Kabupaten Jepara.</font>
		       </td>
		    </tr>
			<tr>
		       <td align="center">
			       <font size="2" class="text">Demikian surat keterangan ini kami buat untuk digunakan sebagaimana mestinya.</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="650">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">Jepara, <?= $hari; ?> <?= $day; ?> <?= $m; ?> <?=$t; ?>  <br><br><?= $s['jabatan'] ?> Dongos<br><br><br><br><?= $s['ttd'] ?></td>
			</tr>
	     </table>
	</center>
    <script>window.print();</script>
    
</body>
</html>