<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h2 class="mb-0 text-center"><strong><?php echo ucwords($user['nama']); ?></strong></h2>
                </div>
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-md-8">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Nama</th>
                                    <td><?php echo $user['nama'] ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><?php echo $user['jenis_kelamin'] ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><?php echo $user['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <th>Tempat Tanggal Lahir</th>
                                    <td><?php echo $user['tempat_lahir'] . "/ " . $user['tanggal_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $user['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>Telepon</th>
                                    <td><?php echo $user['telepon'] ?></td>
                                </tr>
                                <tr>
                                    <th>Terdaftar Sejak</th>
                                    <td><?php echo $user['created_at'] ?></td>
                                </tr>
                                <tr>
                                    <th>Terakhir Update</th>
                                    <td><?php echo $user['updated_at'] ?></td>
                                </tr>

                            </table>
                        </div>
                        <div class="col col-4 d-flex justify-content-center">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="/img/<?= $user['avatar'] ?>" class="img-fluid" style="max-width: 100%;" width="300px">
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-warning" type="button">Edit</button>
                                        <button class="btn btn-danger" type="button">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    </section>
    <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>