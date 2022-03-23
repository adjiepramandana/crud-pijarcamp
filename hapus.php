<?php
	include "koneksi.php";

	$id = $_GET['id'];

	mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'") or die ("<script type='text/javascript'>alert('Gagal Hapus');</script>");

	header('Location: index.php');

