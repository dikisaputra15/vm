<script src="<?= base_url('vendor/jquery.min.js'); ?>"></script>

<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Pelanggan Selesai Dieksekusi</h4></center>
                                <div class="table-responsive">
            
                                <form action="<?= base_url('admin/pelangganselesai/tombolpelsel'); ?>" method="POST">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No Agenda</th>
                                                <th>Id Pelanggan</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Alamat</th>
                                                <th>Jenis SLA</th>
                                                <th>Durasi SLA</th>
                                                <th>Jenis Transaksi</th>
                                                <th>Tarif Lama</th>
                                                <th>Tarif Baru</th>
                                                <th>Daya Lama</th>
                                                <th>Daya Baru</th>
                                                <th>Tgl Bayar</th>
                                                <th>unit</th>
                                                <th>Durasi</th>
                                                <th>Persentase</th>
                                                <th>Status</th>
                                                <th>
                                                  Action<br>
                                                   <input type="checkbox" id="checkall"><small>Check All</small>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                              <?php
                                 $i = 1;
                                 foreach ($pelsel as $dat) : ?>

                                  <tr>
                                       <td><?= $i++; ?></td>
                                       <td><?= $dat['no_agenda']; ?></td>
                                       <td><?= $dat['id_pel']; ?></td>
                                       <td><?= $dat['nama_pelanggan']; ?></td>
                                       <td><?= $dat['alamat']; ?></td>
                                       <td><?= $dat['jenis_sla']; ?></td>
                                       <td><?= $dat['durasi_sla']; ?></td>
                                       <td><?= $dat['jenis_transaksi']; ?></td>
                                       <td><?= $dat['tarif_lama']; ?></td>
                                       <td><?= $dat['tarif_baru']; ?></td>
                                       <td><?= $dat['daya_lama']; ?></td>
                                       <td><?= $dat['daya_baru']; ?></td>
                                       <td><?= $dat['tgl_bayar']; ?></td>
                                       <td><?= $dat['unit']; ?></td>
                                       <td><?= $dat['durasi']; ?></td>
                                       <td><?= $dat['persentase']; ?> %</td>
                                       <td><?= $dat['status']; ?></td>
                                       <td>
                                         <input type="checkbox" name="proses[]" value="<?php echo $dat['no_agenda']; ?>" class="checkitem">
                                       </td>
                                    </tr>

                                 <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                  <input type="submit" name="hapus" class="btn btn-danger" value="Hapus">
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
      </div>
</div>

<script>
    $(document).ready(function () {
    $('#example1').DataTable({
    "scrollX": true
    });
    $('.dataTables_length').addClass('bs-select');
  });

   $("#checkall").change(function(){
      $(".checkitem").prop("checked", $(this).prop("checked"))
    })
    // berfungsi untuk mengubah beberapa item checkbox terpilih(checklist) semua atau tidak terpilih (unchecklist)
    $(".checkitem").change(function(){
      if($(this).prop("checked")==false){
        $("#checkall").prop("checked",false)
      }
      // saat beberapa item terpilih dan hampir semua maka akan pada checkbox yang memiliki id CHECKALL terchecklist
      if($(".checkitem:checked").length == $(".checkitem").length){
        $("#checkall").prop("checked",true)
      }
    })  

  </script>

 