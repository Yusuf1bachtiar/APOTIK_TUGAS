<?php 
include "config.php";
// TUGAS PEMROG WEB LANJUT
// NAMA : YUSUF BACHTIAR
// NPM 202043500096
// KELAS : Y6D 
$id = $_GET['id']; 
 
$query = "DELETE FROM obat WHERE id = $id"; 
mysqli_query($mysqli, $query); 
 
?> 
<script language="JavaScript"> 
document.location='index.php'</script> 
<?php 
?>