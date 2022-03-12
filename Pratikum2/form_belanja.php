<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container-fluid">
		<div class="row mt-4">
			<div class="col-md-8">
				<h3>Belanja Online</h3><hr/>
				<form method="POST" action="form_belanja.php">
					<div class="form-group row">
						<label for="text" class="col-3 col-form-label">Customer</label> 
						<div class="col-6">
							<input id="text" name="customer" placeholder="Nama Customer" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Pilih Produk</label> 
						<div class="col-9">
							<div class="custom-control custom-radio custom-control-inline">
								<input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
								<label for="radio_0" class="custom-control-label">TV</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
								<label for="radio_1" class="custom-control-label">KULKAS</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
								<label for="radio_2" class="custom-control-label">MESIN CUCI</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="text1" class="col-3 col-form-label">Jumlah</label> 
						<div class="col-3">
							<input id="text1" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
						</div>
					</div> 
					<div class="form-group row">
						<div class="offset-3 col-9">
							<input name="proses" type="submit" value="Kirim" class="btn btn-success"/>
						</div>
					</div>	
				</form>
			</div>
			<div class="col-md-4">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action text-white bg-success">Daftar Harga</a>
					<div class="list-group-item">
						TV : 4.200.000
					</div>
					<div class="list-group-item">
						Kulkas : 3.100.000
					</div>
					<div class="list-group-item">
						MESIN CUCI : 3.800.000
					</div>
						<a href="#" class="list-group-item list-group-item-action text-white bg-success">Harga Dapat Berubah Setiap Saat</a>
				</div>
			</div>
		</div>
		<hr/>
	<?php
		$proses = $_POST['proses'];
		$customer = $_POST['customer'];
		$produk = $_POST['produk'];
		$jumlah = $_POST['jumlah'];

		$tv = 4200000;
		$kulkas = 3100000;
		$mes = 3800000;
		$hasil;

		if($produk == "TV"){
			$hasil = $jumlah * $tv; 
		}elseif($produk == "KULKAS"){
			$hasil = $jumlah * $kulkas;
		}else{
			$hasil = $jumlah * $mes;
		}

		echo '<br/>Nama Customer: '.$customer;
		echo '<br/>Produk Pilihan : '.$produk;
		echo '<br/>Jumlah Beli : '.$jumlah;
		echo '<br/>Total Belanja : '.$hasil;
	?>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
