	<?php 
	    include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Data Produk</title>
  </head>
  <body>

    <br>
    <center><strong><h1>Edit Data Produk</h1></strong></center>
    
    <br>
    
    <?php
	$id = $_GET['id'];
	$all = "SELECT * FROM produk WHERE id='$id'";
	$data = mysqli_query($koneksi, $all);
	while($d = mysqli_fetch_array($data)){
		?>
    
    <form method="post">
	<table>
		<tr>			
			<td>Nama Produk</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				<input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>">
			</td>
		</tr>
		<tr>
			<td>Keterangan Produk</td>
			<td><input type="text" name="ket_produk" value="<?php echo $d['keterangan']; ?>"></td>
		</tr>
		<tr>
			<td>Harga Produk</td>
			<td><input type="number" name="harga_produk" value="<?php echo $d['harga']; ?>"></td>
		</tr>
		<tr>
			<td>Jumlah Produk</td>
			<td><input type="number" name="jumlah_produk" value="<?php echo $d['jumlah']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td>
			    
			    <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
			    <a class="btn btn-warning" href="javascript:window.location.href='index.php';">Kembali</a>
			
			</td>
		</tr>		
	</table>
</form>

	<?php 
	}
	// menangkap data yang di kirim dari form
        if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $namaprod = $_POST['nama_produk'];
        $ketprod = $_POST['ket_produk'];
        $hargaprod = $_POST['harga_produk'];
        $jumprod = $_POST['jumlah_produk'];
        }
        // update data ke database
        $query = "UPDATE produk SET nama_produk = '$namaprod', keterangan = '$ketprod', harga = '$hargaprod', jumlah = '$jumprod' WHERE id = '$id'";
        $hasil = mysqli_query($koneksi, $query);
        
          if ($hasil) {
             echo "<script>alert('Data Berhasil Di Ubah')</script>";
  	        echo "<script>window.location.href='index.php';</script>";
            exit;
          }else {
        	echo "<script type='text/javascript'>alert('Data Gagal Di Ubah');</script')";
        } 
	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>