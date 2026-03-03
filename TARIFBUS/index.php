<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARIF BUS</title>
</head>
<body>
   <center>
    <h1>PROGRAM TARIF BUS</h1>

    <p>
        <form action="" method="post">
            Nama Bus <input type="text" name="nama"> <br>
            Jurusan <select name="Jurusan" id="">
                <option value="JAKARTA">JAKARTA</option>
                <option value="MEDAN">MEDAN</option>
            </select><br>
            <input type="submit" value="PROSES" name="proses">
        </form>
        <?php
        IF(@$_POST['proses']) {
           $namabus = @$_POST['nama'];
           $jurusan = @$_POST['Jurusan'];

           if ($jurusan == "JAKARTA") {
            $tarif = 7500000;
              } else if ($jurusan == "MEDAN") {
                $tarif = 5000000; 
           }



        echo "Nama Bus : " .$namabus;
        echo "<br>";
        echo "Jurusan : " .$jurusan;
        echo "<br>";
        echo "Tarif :  " .$tarif;
        }
        ?>
    </p>
   </center> 
</body>
</html>