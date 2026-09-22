<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nama = "Nanda";
        $jurusan = "Informatika";
        $kampus = "ITB AAS Indonesia";

        echo "Nama saya: " . $nama . "<br>";
        echo "Jurusan: " . $jurusan . "<br>";
        echo "Kampus: " . $kampus . "<br>";
    ?>
    <form action="" method="post">
        <label for="">Nilai</label>
        <input type="number" name="nilai" id="">
        <button type="submit"></button>
    </form>
    <br><br>

    <?php
        //pengunaan if else
       if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nilai = $_POST['nilai'];
        
        if ($nilai >= 75) {
            echo "Nilai: " . $nilai . "<br>";
            echo "Status: LULUS";
        } else {
            echo "Nilai: " . $nilai . "<br>";
            echo "Status: BELUM LULUS";
        }

       }
    ?>
    
</body>
</html>
