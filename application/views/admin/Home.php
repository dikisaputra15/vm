<meta http-equiv="refresh" content="120" />

<div class="page-wrapper">
<marquee><h3>SISTEM INFORMASI PANTAUAN DAFTAR TUNGGU PELANGGAN (SI-PENTUNG)</h3></marquee>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card oh">
                            <div class="card-body">
                                <div class="d-flex m-b-30 align-items-center no-block">
                                    <h5 class="card-title ">Grafik Pantauan Sistem Informasi Daftar Tunggu</h5>
                                   <!--  <div class="ml-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-info"></i> Iphone</li>
                                            <li><i class="fa fa-circle text-primary"></i> Ipad</li>
                                        </ul>
                                    </div> -->
                                </div>
                                <canvas id="myChart"></canvas>


                            <script>
                            <?php 
                                $count1 = $this->db->query("SELECT status FROM tb_pelanggan where status='Terlewat SLA Langsung Eksekusi'");
                                $hasilcount1 = $count1->num_rows();

                                $count2 = $this->db->query("SELECT status FROM tb_pelanggan where status='Segera Eksekusi'");
                                $hasilcount2 = $count2->num_rows();

                                 $count3 = $this->db->query("SELECT status FROM tb_pelanggan where status='Waspada'");
                                $hasilcount3 = $count3->num_rows();

                                $count4 = $this->db->query("SELECT status FROM tb_pelanggan where status='Hati-Hati'");
                                $hasilcount4 = $count4->num_rows();

                                $count5 = $this->db->query("SELECT status FROM tb_pelanggan where status='selesai'");
                                $hasilcount5 = $count5->num_rows();
                            ?>

                                var ctx = document.getElementById('myChart');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ["Terlewat SLA (<?php echo $hasilcount1; ?>)", "Segera Eksekusi (<?php echo $hasilcount2; ?>)", "Waspada (<?php echo $hasilcount3; ?>)", "Hati-Hati (<?php echo $hasilcount4; ?>)"],
                                        datasets: [{
                                            label: 'Grafik',
                                            data: [<?php echo $hasilcount1; ?>, <?php echo $hasilcount2; ?>, <?php echo $hasilcount3; ?>, <?php echo $hasilcount4; ?>],
                                            backgroundColor: [
                                                'rgba(0, 0, 0, 0.5)',
                                                'rgba(255, 0, 0, 0.5)',
                                                'rgba(255, 210, 80, 0.5)',
                                                'rgba(255, 255, 80, 0.5)'
                                            ],
                                            borderColor: [
                                                'rgba(0, 0, 0, 1)',
                                                'rgba(255, 0, 0, 1)',
                                                'rgba(255, 210, 80, 1)',
                                                'rgba(255, 255, 80, 1)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>

                            </div>
                           <!--  <div class="card-body bg-light">
                                <div class="row text-center m-b-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">6000</h2><span class="text-muted">Total sale</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">4000</h2><span class="text-muted">Iphone</span>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h2 class="m-b-0 font-light">2000</h2><span class="text-muted">Ipad</span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
            
            </div>
</div>