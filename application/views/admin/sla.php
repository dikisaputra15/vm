<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Jenis SLA</h4></center>
                                <div class="table-responsive">
                                <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>jenis SLA</th>
                                                <th>Durasi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($sla as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
                                       <td><?= $dat['jenis']; ?></td>
						                           <td><?= $dat['durasi']; ?></td>
						    
						                           <td>
						                              <a href="<?= base_url('admin/sla/hapussla/') . $dat['sla_id'] ?>" class="btn btn-danger tombol-hapus">Hapus</a>
						                              <a href="<?= base_url('admin/sla/editsla/') . $dat['sla_id'] ?>" class="btn btn-primary">Edit</a>
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
                
                 <!-- modal tambah kategori -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis SLA</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/sla/tambahsla') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Jenis SLA" name="jenis_sla" id="jenis_sla" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Durasi" name="durasi" id="durasi" required>
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