 <!-- <footer class="footer">
            © 2020 konstruksi banten selatan
        </footer> -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url('vendor/assets/node_modules/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?= base_url('vendor/assets/node_modules/popper/popper.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/assets/node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('vendor/html/dist/js/perfect-scrollbar.jquery.min.js'); ?>"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('vendor/html/dist/js/waves.js'); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('vendor/html/dist/js/sidebarmenu.js'); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('vendor/html/dist/js/custom.min.js'); ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?= base_url('vendor/assets/node_modules/raphael/raphael-min.js'); ?>"></script>
    <script src="<?= base_url('vendor/assets/node_modules/morrisjs/morris.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js'); ?>"></script>
    <!--c3 JavaScript -->
    <script src="<?= base_url('vendor/assets/node_modules/d3/d3.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/assets/node_modules/c3-master/c3.min.js'); ?>"></script>
    <!-- Chart JS -->
    <script src="<?= base_url('vendor/html/dist/js/dashboard1.js'); ?>"></script>

    <script src="<?= base_url('vendor/assets/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('vendor/assets/datatable/datatable-basic.init.js') ?>"></script>

    <script src="<?= base_url('assets/js/') ?>sweetalert2.all.min.js"></script>

    <script>
                const flashdata = $('.flash-data').data('flashdata');
                if(flashdata){
                   Swal.fire({
                      title: 'Data',
                      text: 'Berhasil ' + flashdata,
                      icon: 'success'
                   });
                }
                $('.tombol-hapus').on('click', function(e){
                   e.preventDefault();
                   const href = $(this).attr('href');

                   Swal.fire({
                     title: 'Anda Yakin?',
                     text: "Data Akan di Hapus!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     confirmButtonText: 'Hapus Data!'
                   }).then((result) => {
                     if (result.value) {
                       document.location.href = href;
                     }
                   })
                })
             
    </script>

</body>

</html>