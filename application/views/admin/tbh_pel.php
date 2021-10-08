
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                                <h4 class="card-title">Tambah Pelanggan</h4>
                                <form action="<?= base_url('admin/pelanggan/prosestambahpel') ?>" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> No Agenda </label>
                                                    <input type="text" class="form-control" name="no_agenda" placeholder="No Agenda">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Id Pelanggan </label>
                                                    <input type="text" class="form-control" name="id_pel" placeholder="Id Pelanggan">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Nama Pelanggan </label>
                                                    <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label>Alamat</label><br>
                                                    <textarea name="alamat" style="width: 450px; height: 150px;"></textarea>
                                                </div>
                                            </div> 
                                            </div> 
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Jenis SLA </label>
                                                    <select class="form-control" id="jenis" name="jenis" onchange="changeValue(this.value)">
                                                        <option value="0">-Jenis SLA-</option>
                                                        <?php $jsArray = "var data = new Array();\n";   ?>
                                                        <?php foreach ($jenis as $js) : ?>
                                                            <option value="<?= $js['jenis'] ?>"><?= $js['jenis'] ?></option>
                                                            
                                                            <?php
                                                            $jsArray .= "data['" . $js['jenis'] . "'] = {durasi:'" . addslashes($js['durasi']) . "'};\n";
                                                            ?>

                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                             <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Durasi <small>(hari)</small></label>
                                                    <input type="text" class="form-control" name="durasi_sla" id="durasi" readonly="readonly">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Jenis transaksi </label>
                                                    <select class="form-control" id="jenis_transaksi" name="jenis_transaksi">
                                                        <option>-Jenis transaksi-</option>
                                                        <option value="Pasang Baru">Pasang Baru</option>
                                                        <option value="Perubahan Daya">Perubahan Daya</option>
                                                        <option value="Pasang Kembali">Pasang Kembali</option>
                                                        <option value="PDR">PDR</option>
                                                        <option value="Bongkar">Bongkar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Tarif Lama </label>
                                                    <input type="text" class="form-control" name="tarif_lama" placeholder="Tarif Lama">
                                                </div>
                                            </div>
                                            </div> 
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Tarif Baru </label>
                                                    <input type="text" class="form-control" name="tarif_baru" placeholder="Tarif Baru">
                                                </div>
                                            </div>
                                            </div> 
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Daya Lama </label>
                                                    <input type="text" class="form-control" name="daya_lama" placeholder="Daya Lama">
                                                </div>
                                            </div>
                                            </div> 
                                             <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Daya Baru </label>
                                                    <input type="text" class="form-control" name="daya_baru" placeholder="Daya Baru">
                                                </div>
                                            </div>
                                            </div> 
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Tanggal Bayar </label>
                                                     <input type="date" class="form-control" name="tgl_bayar">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                     <label> Unit </label>
                                                    <select class="form-control" name="unit">
                                                        <option>-Pilih Unit-</option>
                                                        <option>UP3 Banten Selatan</option>
                                                        <option>ULP Rangkasbitung</option>
                                                        <option>ULP Pandeglang</option>
                                                        <option>ULP Labuan</option>
                                                        <option>ULP Malingping</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                            <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <form method="post" action="<?= base_url('import_excel/unggah')?>" enctype="multipart/form-data">
                                    <input type="file" name="file" class="form-control" id="file" /><br><br>
                                    <button type="submit" class="btn btn-success">UPLOAD</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>

 <script type="text/javascript">
       <?php echo $jsArray; ?> 
        function changeValue(jenis){ 
        document.getElementById('durasi').value = data[jenis].durasi; 
        }; 
 </script>