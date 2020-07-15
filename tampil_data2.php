<?php 	
include('koneksi2.php');
$db = new database();
$data_barang = $db->tampil_data();
?>



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

<p align="center"><strong>DATA PENGUNJUNG </strong></p>
<table width="576" border="1" align="center" bordercolor="#000000">
		<tr>
			<th width="28"><div align="center">No</div></th>
			<th width="66"><div align="center">Lokasi</div></th>
			<th width="50"><div align="center">Jumblah Orang</div></th>
			<th width="86"><div align="center">No KTP</div></th>
			<th width="109"><div align="center">BPJS</div></th>
			<th colspan="2"><div align="center">Action</div></th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?>
			      <div align="center"></div></td>
				<td><?php echo $row['nama_barang']; ?>
			      <div align="center"></div></td>
				<td><?php echo $row['stok']; ?>
			      <div align="center"></div></td>
				<td><?php echo $row['harga_beli']; ?>
			      <div align="center"></div></td>
				<td><?php echo $row['harga_jual']; ?>
			      <div align="center"></div></td>
				<td width="58">
					<div align="center"><a href="edit.php?id=<?php echo $row['id_barang']; ?>"class="btn btn-lg btn-success btn-block">Update</a>
					      
			        </div></td>
			    <td width="133"><div align="center"><a href="proses_barang.php?action=delete&id=<?php echo $row['id_barang']; ?>"class="btn btn-lg btn-success btn-block">Delete</a></div></td>
			</tr>
			<?php }?>
</table>
	
	<br> <p><a href="tambah_data.php" class="btn btn-lg btn-success btn-block">Tambah Data</a></p>
</main>
    <p>&nbsp;</p>
    <p>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </p>
</body>
</html>