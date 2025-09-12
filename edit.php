<?php include "koneksi.php"; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br>
        <label>Foto (nama file di folder img/):</label><br>
        <input type="text" name="foto" value="<?= $row['foto']; ?>" required><br>
        <img src="img/<?= $row['foto']; ?>" width="60"><br>
        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="<?= $row['kelas']; ?>" required><br>
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?= $row['jurusan']; ?>" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $row['email']; ?>" required><br>
        <label>No HP:</label><br>
        <input type="text" name="nohp" value="<?= $row['nohp']; ?>" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];

    $update = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', foto='$foto', kelas='$kelas', jurusan='$jurusan', email='$email', nohp='$nohp' WHERE id='$id'");

    if ($update) {
        header("Location: index.php");
    } else {
        echo "Gagal update data!";
    }
}
?>
</body>
</html>