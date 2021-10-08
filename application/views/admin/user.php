 
<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data User</h4>
                                <div class="table-responsive">
                                 <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                           <tr>
                                                <th>No</th>
                                                <th>Nip</th>
                                                <th>Password</th>
                                                <th>Nama Lengkap</th>
                                                <th>Level</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $i = 1;
                                             foreach ($user as $dat) : ?>

                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $dat['nip']; ?></td>
                                                <td><?= $dat['pass']; ?></td>
                                                <td><?= $dat['nama_lengkap']; ?></td>
                                                <td><?= $dat['level']; ?></td>
                                                <td>
                                                      <a href="<?= base_url('admin/user/hapususer/') . $dat['user_id'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                                      <a href="<?= base_url('admin/user/edituser/') . $dat['user_id'] ?>" class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>

                                             <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>
    </div>
</div>

 <!-- modal tambah user -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah user</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/user/tambahuser') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NIP" name="nip" id="nip" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="password" placeholder="Password" name="password" id="password" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Lengkap" name="nama_lengkap" id="nama_lengkap" required>
                  </div> 
                  <div class="form-group">
                  <label>Level</label><br>
                     <input type="radio" name="level" id="level" value="admin">admin
                     <input type="radio" name="level" id="level" value="up3">up3
                     <input type="radio" name="level" id="level" value="ulp">ulp
                  </div> 
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
