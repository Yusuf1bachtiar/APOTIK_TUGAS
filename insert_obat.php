<?php 
include "config.php"; 
// TUGAS PEMROG WEB LANJUT
// NAMA : YUSUF BACHTIAR
// NPM 202043500096
// KELAS : Y6D
$Id = $_POST['Id'];
$Nama = $_POST['Nama'];
$Jenis = $_POST['Jenis'];
$ExDate = $_POST['ExDate'];
$query=mysqli_query($mysqli, "INSERT INTO obat (Id, Nama, Jenis, ExDate)
VALUES ('$Id', '$Nama', '$Jenis', '$ExDate')")or die (mysqli_error($mysqli)); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.php'</script> 
<?php 
} 
?>