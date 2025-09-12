<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>
        <label>Foto (nama file di folder img/):</label><br>
        <input type="text" name="foto" placeholder="contoh: amel.jpg" required><br>
        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br>
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>No HP:</label><br>
        <input type="text" name="nohp" required><br><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];

    $query = mysqli_query($koneksi, "INSERT INTO siswa (nama, foto, kelas, jurusan, email, nohp) 
                                     VALUES ('$nama','$foto','$kelas','$jurusan','$email','$nohp')");
    if ($query) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data!";
    }
}
?>
</body>
</html>