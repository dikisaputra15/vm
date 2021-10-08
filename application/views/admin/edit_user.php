<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit User</h4>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                             <div class="col-12">
                                            <div class="col-md-6" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="user_id" value="<?= $user['user_id']; ?>">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NIP</label>
                                                    <input type="text" class="form-control" name="nip" value="<?= $user['nip']; ?>" placeholder="NIP">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" name="password" value="<?= $user['pass']; ?>" placeholder="Password">
                                                </div>
                                            </div> 
                                            </div> 
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= $user['nama_lengkap']; ?>">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                              <label>level</label><br>
                                                <input type="radio" name="level" id="level" value="admin" <?php if($user['level']=='admin') echo 'checked' ?>>admin
                                                <input type="radio" name="level" id="level" value="up3" <?php if($user['level']=='up3') echo 'checked' ?>>up3
                                                <input type="radio" name="level" id="level" value="ulp" <?php if($user['level']=='ulp') echo 'checked' ?>>ulp
                                           </div>
                                           </div>
                                           </div> 
                                        </div>
                                    </div>
                                   <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
</div>