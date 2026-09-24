<?php
require "koneksi.php";

$sql = "SELECT * FROM data_mahasiswa";
$result = $pdo->query($sql);
$data_mahasiswa = $result->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];

    $sql = "INSERT INTO data_mahasiswa (nama, alamat) VALUES (:nama, :alamat)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nama' => $nama,
        ':alamat'=> $alamat
    ]);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Belajar Laragon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-3 bg-primary text-white text-center">
  <h1>DATA MAHASISWA</h1>
</div>
  
<div class="container mt-5 bg-red">
<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST">            
        <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nama:</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Alamat :</label>
                <input type="text" class="form-control" name="alamat">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="tambahData">Tambah</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    <table class="table table-striped">
        <thead>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
        </thead>
        <tbody>
        <?php foreach ($data_mahasiswa as $mahasiswa) : ?>
            <tr>
                <td><?= $mahasiswa['nim'];?></td>
                <td><?= $mahasiswa['nama']?></td>
                <td><?= $mahasiswa['alamat']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>