<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<strong><center><h1>Tambah Data</h1></center></strong>
    <form action="tambah2.php" method="post">
        <div class="form-group">
            <label>Nama Barang:</label>
            <input type="text" name="namabarang" class="form-control" placeholder="Nama Produk" />
        </div>
    
    <div class="form-group">
            <label>Keterangan Barang :</label>
            <input type="text" name="keteranganbarang" class="form-control" placeholder="Keterangan Produk" />
        </div>
        
    <div class="form-group">
            <label>Harga Barang :</label>
            <input type="text" name="hargabarang" class="form-control" placeholder="Harga Produk" />
        </div>
        
    <div class="form-group">
            <label>Jumlah Barang :</label>
            <input type="text" name="jumlahbarang" class="form-control" placeholder="Jumlah Produk" />
        </div>
        <br>

        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        <a class="btn btn-danger" href="index.php">Kembali</a>

    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>