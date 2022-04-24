<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>BMI</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Layout</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Pasien</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-address-card"></i>
                        </div>
                      </div> 
                      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-th"></i>
                        </div>
                      </div> 
                      <input id="kode" name="kode" placeholder="Ex:3231" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Jenis Kelamin</label> 
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
                      <label for="jk_0" class="custom-control-label">Laki - Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
                      <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tgl" class="col-4 col-form-label">Tanggal Periksa</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div> 
                      <input id="tgl" name="tgl" placeholder="01-02-2022" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="berba" class="col-4 col-form-label">Berat Badan (kg)</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-user-md"></i>
                        </div>
                      </div> 
                      <input id="berba" name="berba" placeholder="30.5" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tiba" class="col-4 col-form-label">Tinggi Badan (cm)</label> 
                  <div class="col-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-user-o"></i>
                        </div>
                      </div> 
                      <input id="tiba" name="tiba" placeholder="166.3" type="text" class="form-control">
                    </div>
                  </div>
                </div> 
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Proses</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Pasien</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Kode Pasien</th>
                    <th scope="col">Tanggal Periksa</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Berat(kg)</th>
                    <th scope="col">Tinggi(cm)</th>
                    <th scope="col">Hasil</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // include_once "class_BMI.php";
                  // require_once "class_BMIpasien.php";
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Table
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
</div>