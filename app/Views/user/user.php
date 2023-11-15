<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <div id="viewmodal">
            <?php echo $this->include('user/modal'); ?>
        </div>
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="mb-0 text-center">Nama Mahasiswa</h2>
                </div>
                <div class="card-body">
                    <h3>Daftar Anggota</h3>


                    <div class="card-body">
                        <div id="tabeluser"></div>

                    </div>

                </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<script>
    function tampilData() {
        $.ajax({
            type: "get",
            url: "<?= base_url('/user/getdata') ?>",
            dataType: "json",
            success: function(response) {
                $('#tabeluser').html(response.data);
            }
        });
    }

    $(document).ready(function() {
        tampilData();
    });
</script>

<?php echo $this->endSection(); ?>