<?php 
include "config.php"; 
// TUGAS PEMROG WEB LANJUT
// NAMA : YUSUF BACHTIAR
// NPM 202043500096
// KELAS : Y6D
$id = $_GET['id']; 
 
$query=mysqli_query($mysqli, "SELECT * FROM obat WHERE id='$id'");
while ($row=mysqli_fetch_array($query)){ 
 
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Jenis = $_POST['Jenis'];
$ExDate = $_POST['ExDate'];
 
echo "<html>"; 
echo "<body>"; 
echo "<font face='tahoma' color='green' size=4><b>Perbaiki Data Obat</b></font>"; 
echo "<table align='left'>"; 
echo "<form method=\"post\" action=\"update.php?id=$id\" enctype='multipart/form-data'>"; 
echo "<br>"; 
echo "<tr><td><font face='Tahoma' color='black' size=2>Id </font></td><td>:</td><td><input type='text' name='id' value='$id' size='30'>&nbsp;
</td></tr>"; 

echo "<tr><td><font face='Tahoma' color='black' size=2>Nama </font></td><td>:</td><td><input type='text' name='Nama' value='$Nama' size='30'>&nbsp;
</td></tr>";

echo "<tr><td><font face='Tahoma' color='black' size=2>Jenis</font></td><td>:</td><td><input type='text' name='Jenis' value='$Jenis' size='30'>&nbsp;
</td></tr>";

echo "<tr><td><font face='Tahoma' color='black' size=2>ExDate</font></td><td>:</td><td><input type='text' name='ExDate' value='$ExDate' size='30'>&nbsp;
</td></tr>"; 
 
echo "<tr><td></td><td></td><td><font size='2'><input type='submit' name='submit' value='Update'/></font></td></tr>";
echo "<tr><td></td><td></td><td></td></tr>"; 
echo "<tr><td></td><td></td><td></td></tr>"; 
echo "<tr><td></td><td></td><td></td></tr>"; 
echo "<tr><td></td><td></td><td></td></tr>"; 
echo "<tr><td></td><td></td><td></td></tr>"; 
echo "<tr><td></td><td></td><td><font face='Algerian'color='blue' size=2> Yusuf Bachtiar|202043500096|Y6D </font></td></tr>";
echo " ";
echo "</table></form></body></html>"; 


} 
?>