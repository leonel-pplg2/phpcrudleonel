 <?php 

// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$keterangan = $_POST['keterangan'];

// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('$id','$nis','$nama','$jk','$tgl_lahir','$kelas','$jurusan','$keterangan')");

// mengalihkan halaman kembali ke siswa.php
header("location:siswa.php");

?>   