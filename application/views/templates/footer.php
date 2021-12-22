<!-- Footer -->
<footer>
    <div class="ft">
        <img src="<?php echo base_url()?>assets/img/vector 2.png">
        <h4>StartPlant</h4>
    </div>
    <div class="xx">
        <h3>Sekarang, Semua orang bisa menanam tumbuhan mereka sendiri</h3>
    </div>
    <div class ="grs1"></div>
    <div class="vv">
        <h4>Artikel</h4>
        <p>Email Penjualan Campaigns</p>
    </div>
    <div class="vs">    
        <h4>Tentang</h4>
        <p> Cerita Kami Manfaat</p>
    </div>    
    <div class="lk">
        <h4>Ikuti Kami</h4>
        <a class="xx" href ="#"><img src="<?php echo base_url()?>assets/img/ffcc.png"></a>
        <a class="xx" href ="#"><img src="<?php echo base_url()?>assets/img/instg.png"></a>
    </div> 
    <p class = "oo">Copyright © 2021. StarPlant BY Kelompok 4</p>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin 
mau keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah jika 
kamu yakin sudah selesai.</div>
           <div class="modal-footer">
                <button class="btn btn-secondary" type="button"
data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?=
base_url('autentifikasi/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); 
?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); 
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
 
    $(document).ready(function() {
        $("#table-datatable").dataTable();
    });
    $('.alert-message').alert().delay(3500).slideUp('slow');
</script>

</body>


</html>