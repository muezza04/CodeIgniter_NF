<?php
  //if($this->session->has_userdata('ROLE')=='public'){
    //redirect(base_url().'index.php/home');
  //}
?>

<div class="container mt-4 mb-5">
  <!-- <div class="row mb-3">
    <div class="col-md-12">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/admin')?>">Data User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View Komentar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View Wisata</a>
        </li>
      </ul>
    </div>
  </div> -->
  <div class="row">
    <div class="col-md-12 ">
      <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?=$title?></h3>
          </div>
          <div class="card-body">
          <?php $hidden = ['idedit'=>$usr_edit->id] ?>
          <?php echo form_open('update/input_data','',$hidden) ?>
          <div class="form-group row">
            <label for="username" class="col-4 col-form-label">Username</label> 
               <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="username" value="<?=$usr_edit->username?>" name="username" placeholder="Masuka Username" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </div>
                    </div> 
                    <input id="password" value="<?=$usr_edit->password?>" name="password" placeholder="Masukan Password" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-envelope"></i>
                    </div>
                    </div> 
                    <input id="email" value="<?=$usr_edit->email?>" name="email" placeholder="Masukan Email" type="email" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-4 col-form-label">Status</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-info-circle"></i>
                    </div>
                    </div> 
                    <input id="status" value="<?=$usr_edit->status?>" name="status" placeholder="Masukan Status" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-4">Role</label> 
                <div class="col-8">
                    <?php 
                    $check_1 = ($usr_edit->role=="administrator")?"checked":" ";
                    $check_2 = ($usr_edit->role=="public")?"checked":" ";
                    ?>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="role" id="radio_0" type="radio" class="custom-control-input" value="administrator" <?=$check_1?>> 
                    <label for="radio_0" class="custom-control-label">Administrator</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="role" id="radio_1" type="radio" class="custom-control-input" value="public" <?=$check_2?>> 
                    <label for="radio_1" class="custom-control-label">Public</label>
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <?php echo form_close()?>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
      </section>
    </div>
  </div>
</div>