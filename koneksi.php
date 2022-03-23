<?php

	$dbhost = "localhost";
	$dbname = "jie_pijarcamp";
	$dbuser = "jie_hooh";
	$dbpass = "@@server@@";

   
	$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("gagal, database tidak ditemukan");

	mysqli_select_db($koneksi,$dbname) or die ("Koneksi Ke Database Error!");


    
?>