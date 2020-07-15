<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Selamat Datang W Store Malang</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>

 <body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a href="#" class="navbar-brand"><strong>W_Store</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
 
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
        <a class="nav-link" href="home.php">Beranda <span class="sr-only">(current)</span></a>
      <li class="nav-item active">
		<a class="nav-link" href="profile.php">Profile WStore <span class="sr-only">(current)</span></a>
	 <li class="nav-item active">
		<a class="nav-link" href="tambah_data.php">Input Data Pengunjung <span class="sr-only">(current)</span></a>
	  <li class="nav-item active">
		<a class="nav-link" href="tampil_data2.php">Hasil Input Data Pengunjung <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    

    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>

  </div>
</nav>
<body>
<h3 align="center">Tambahkan Lokasi WIsata </h3>
<hr align="center"/>
<form method="post" action="proses_barang.php?action=add">
  <div align="center">
    <table>
	  <tr>
		  <td>Lokasi</td>
		  <td>:</td>
		  <td><input type="text" name="nama_barang"/></td>
	  </tr>
	  <tr>
		  <td>Jumblah Orang</td>
		  <td>:</td>
		  <td><input type="text" name="stok"/></td>
	  </tr>
	  <tr>
		  <td>no KTP </td>
		  <td>:</td>
		  <td><input type="text" name="harga_beli"/></td>
	  </tr>
	  <tr>
		  <td>BPJS</td>
		  <td>:</td>
		  <td><input type="text" name="harga_jual"/></td>
	  </tr>
	  <tr>
		  <td height="36"></td>
		  <td></td>
		  <td><input type="submit" name="tombol" value="Simpan"/></td>
	  </tr>
    </table>
  </div>
</form>
</body>
</html>