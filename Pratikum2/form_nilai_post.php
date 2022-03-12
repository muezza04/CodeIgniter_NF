<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sistem Penilaian</a>
</nav>
<h4 class="ml-3 mt-3">Form Nilai Siswa</h4>
<hr/>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-8">
      <form method="POST" action="nilai_siswa.php">
        <div class="form-group row">
          <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
          <div class="col-8">
            <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
          <div class="col-8">
            <select id="select" name="matkul" class="custom-select">
              <option value="DDP">Dasar-Dasar Pemograman</option>
              <option value="BD">Basis Data 1</option>
              <option value="PW">Pemrograman Web</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
          <div class="col-4">
            <input id="text1" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-4">
            <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="text3" class="col-4 col-form-label">Nilai Tugas/Pratikum</label> 
          <div class="col-4">
            <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <input name="proses" value="Simpan" type="submit" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
<footer class="bg-dark text-light fixed-bottom">
  <h6 class="ml-3 pb-1 pt-3">by @nuzurwan</h6>
</footer>
</html>