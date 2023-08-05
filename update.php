<?php 
include "config.php"; 
// TUGAS PEMROG WEB LANJUT
// NAMA : YUSUF BACHTIAR
// NPM 202043500096
// KELAS : Y6D
$id = $_GET['id']; 
 
$Id = $_POST['Id'];
$Nama = $_POST['Nama'];
$Jenis = $_POST['Jenis'];
$ExDate = $_POST['ExDate'];
 
$query=mysqli_query ($mysqli, "UPDATE obat SET Id='$Id', Nama='$Nama', 
Jenis='$Jenis', ExDate='$ExDate' WHERE id='$id'")or die (mysqli_error(mysqli)); 
 
if($query) { 
?>
<script language="JavaScript"> 
 document.location='index.php'</script> 
<?php 
} 
?>