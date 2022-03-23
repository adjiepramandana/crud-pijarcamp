<?php

	$dbhost = "localhost";
	$dbname = "pijarcamp";
	$dbuser = "root";
	$dbpass = "";

   
	$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("gagal, database tidak ditemukan");

	mysqli_select_db($koneksi,$dbname) or die ("Koneksi Ke Database Error!");


    
?>
