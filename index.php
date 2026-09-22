<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mahasiswa = [
        [
            "nama" => "Nanda",
            "jurusan" => "Informatika",
            "nilai" => 90
        ],
        [
            "nama" => "Budi",
            "jurusan" => "Sistem Informatika",
            "nilai" => 60
        ],
        [
            "nama" => "siti",
            "jurusan" => "Informatika",
            "nilai" => 90
        ],

    ];

    ?>
    <!--<form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" id="">
        <button type="submit"> INPUT</button>
    </form>
    <br><br>-->

    <?php
    foreach ($mahasiswa as $data) {
        //tampilkan data 
        echo "Nama saya: " . $data["nama"] . "<br>";
        echo "Nama saya: " . $data["jurusan"] . "<br>";
        echo "Nama saya: " . $data["nilai"] . "<br>";
    }
        
        /*pengunaan if else
       if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nilai = $_POST['nilai'];

        if ($nilai >= 75) {
            echo "Nilai: " . $nilai . "<br>";
            echo "Status: LULUS";
        } else {
            echo "Nilai: " . $nilai . "<br>";
            echo "Status: BELUM LULUS";
        }

       }*/
    ?>
    
</body>
</html>
