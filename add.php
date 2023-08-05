<html>
     <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <title>Tambah Obat Baru</title>
         <link href="style.css" type="text/css" rel="stylesheet">
     </head>
     <body>
        <! -- 
            // TUGAS PEMROG WEB LANJUT
            // NAMA : YUSUF BACHTIAR
            // NPM 202043500096
            // KELAS : Y6D
         -->
         <form action="insert_obat.php" method="POST">
             <font face="Tahoma" color="green" size="1"><b><br>Masukkan Obat Baru</b></font>
             <table align="left">
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Id</font></td>
                     <td>:</td>
                     <td><input type="text" name="Id" size="30"></td>
                 </tr> 
 
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Nama</font></td>
                     <td>:</td>
                     <td><input type="text" name="Nama" size="30"></td>
                 </tr> 
                 <tr>
                     <td><font face="Tahoma" color="black" size="2">Jenis</font></td>
                     <td>:</td>
                     <td><input type="text" name="Jenis" size="30"></td>
                 </tr> 
                <tr>
                     <td><font face="Tahoma" color="black" size="2">ExDate</font></td>
                     <td>:</td>
                     <td><input type="text" name="ExDate" size="30"></td>
                 </tr> 
                 <tr>
                     <td></td><td></td>
                     <td><input type="submit" value="Add">
                     <font face="Tahoma" color="green" size="2">
                     <a href="index.php" style="text-decoration:none">back</font></a>
                     </td>
                 </tr>
             </table>
         </form>
     </body>
 </html>