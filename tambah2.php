<?php
//Include file koneksi ke database
include "koneksi.php";

	if (isset($_POST['submit'])) {
  	$nama_produk = $_POST['namabarang'];
  	$ket_produk = $_POST['keteranganbarang'];
  	$harga_barang = $_POST['hargabarang'];
  	$jumlah_barang = $_POST['jumlahbarang'];
  }

//Query input menginput data kedalam tabel anggota
  $sql = "insert into produk (nama_produk,keterangan,harga,jumlah) values
		('$nama_produk','$ket_produk','$harga_barang','$jumlah_barang')";

//Mengeksekusi/menjalankan query diatas	
  $hasil = mysqli_query($koneksi, $sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil == TRUE) {
	include "alert.php";
	exit;
  }else {
	echo "<script type='text/javascript'>alert('Data Gagal Ditambahkan');</script')";
	exit;
}  

	?>