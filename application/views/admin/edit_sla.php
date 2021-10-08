<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit SLA</h4>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                             <div class="col-12">
                                            <div class="col-md-6" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="sla_id" value="<?= $sla['sla_id']; ?>">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jenis SLA</label>
                                                    <input type="text" class="form-control" name="jenis" value="<?= $sla['jenis']; ?>" placeholder="Jenis SLA">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Durasi</label>
                                                    <input type="text" class="form-control" name="durasi" placeholder="durasi" value="<?= $sla['durasi']; ?>">
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