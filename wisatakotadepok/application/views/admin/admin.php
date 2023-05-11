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
            <h3 class="card-title">Data Users</h3>
          </div>
          <div class="card-body">
              <table class="table table-striped mt-2">
                  <thead class="thead-dark">
                      <tr  class="text-center">
                          <th>No</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Create At</th>
                          <th>Last Login</th>
                          <th>Status</th>
                          <th>Role</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody class="thead-light">
                  <?php
                  $no = 1;
                  foreach($list_user as $row){
                  ?>
                      <tr>
                        <td><?=$no?></td>
                        <td><?=$row->username?></td>
                        <td><?=$row->email?></td>
                        <td><?=$row->created_at?></td>
                        <td><?=$row->last_login?></td>
                        <td class="text-center"><?=$row->status?></td>
                        <td><?=$row->role?></td>
                        <td>
                          <a href="admin/update?id=<?=$row->id?>">Update</a>|
                          <a href="admin/delete?id=<?=$row->id?>"
                          onclick="if(!confirm('Anda Yakin Hapus Data User <?=$row->username ?>?')) {return false}"
                          >Delete</a>
                        </td>
                      </tr>
                  <?php
                  $no++;
                  }
                  ?>
                  </tbody>
              </table>
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