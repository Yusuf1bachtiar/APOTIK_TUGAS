<?php 
include "config.php"; 
// TUGAS PEMROG WEB LANJUT
// NAMA : YUSUF BACHTIAR
// NPM 202043500096
// KELAS : Y6D

$query=mysqli_query ($mysqli, "SELECT * FROM obat")or die (mysqli_error()); 
$jumlah = mysqli_num_rows($query); 
echo "<html>"; 
echo "<head>"; 
echo "<link href='style.css' type='text/css' rel='stylesheet'>"; 
echo "</head>"; 
echo "<title>Daftar Obat</title>"; 
echo "<body>"; 
echo "<font color='darkmagenta' face='Arial' size=3><b><br>Daftar Obat Apotik Sehat Selalu</b></font><br><br>"; 
echo "<a href='add.php' style=\"text-decoration: none\"><font face='tahoma' size='2'>Masukkan Obat Baru</font></a><br>"; 
echo "<br><table  border=\"0\" cellpadding=\"1\" cellspacing=\"1\" bordercolor=\"blue\" bgcolor=\"white\"> 
<tr bgcolor='blue' height=\"30\"><font color='white'>  
     <th align='center'><font color='white' face='Arial' size=2>Id</font></th>         
     <th align='center'><font color='white' face='Arial' size=2>Nama Obat</font></th>         
     <th align='center'><font color='white' face='Arial' size=2>Jenis</font></th>
     <th align='center'><font color='white' face='Arial' size=2>ExDate</font></th>   
     <th align='center'><font color='yellow' face='Arial' size=2>Ubah?</font></th> 
</tr>";  
$j=0; 
while ($row=mysqli_fetch_array($query)) {     
    echo "<tr>";
    echo "<font face='Arial' size=1>";
    echo"</font>";
    echo"</td>";     
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["Id"];
    echo"</font>";
    echo"</td>";     
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["Nama"];
    echo"</font>";
    echo"</td>";  
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["Jenis"];
    echo"</font>";
    echo"</td>";
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Arial' size=1>";
    echo $row["ExDate"];
    echo"</font>";
    echo"</td>";    
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo "<a href='delete.php?id=".$row['Id']."' style=\"text-decoration: none\" title=\"Hapus\"><font face='tahoma' size='1'>Hapus</font></a>   
    <a href='edit.php?id=".$row['Id']."' style=\"text-decoration: none\" title=\"Edit\"><font face='tahoma' size='1'>Edit</font></a>"; $j++; } 
echo"</table>"; 
echo "</body>"; 
echo "</html>"; 
?>
