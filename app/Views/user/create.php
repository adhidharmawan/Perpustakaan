<?php echo $this->extend('layout/main'); ?>

<?php echo $this->section('container'); ?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <section class="mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h5 class="mb-0 text-center"><strong>Hello,<?= $nama ?> !</strong></h5>
                </div>
                <div class="card-body">
                    <h3>Tambah Anggota</h3>
                    <form method="POST" action="/insertuser" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="typeNamaDepan" class="form-control" name="nama_depan" required />
                                    <label class="form-label" for="typeNamaDepan">Nama Depan</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="typeNamaBelakang" class="form-control" name="nama_belakang" required />
                                    <label class="form-label" for="typeNamaDepan">Nama Belakang</label>
                                </div>
                            </div>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="typeAlamat" rows="4" name="alamat"></textarea>
                            <label class="form-label" for="typeAlamat">Alamat Rumah</label>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="typeTempatLahir" class="form-control" name="tempat_lahir" />
                                    <label class=" form-label" for="typeTempatLahir">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="date" id="tanggalLahir" class="form-control" name="tanggal_lahir" />
                                    <label class="form-label" for="tanggalLahir">Tanggal Lahir</label>
                                </div>
                            </div>
                        </div>

                        <!-- Jenis Kelamin input -->
                        Jenis Kelamin : <div class="form-check form-check-inline mb-4 mx-3">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Laki Laki" checked />
                            <label class="form-check-label" for="flexRadioDefault1"> Laki-laki </label>
                        </div>
                        <div class="form-check form-check-inline mb-4 mx-3">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="Perempuan" />
                            <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
                        </div>

                        <!-- Telepon input -->
                        <div class="form-outline mb-4">
                            <input type="tel" id="typeNumber" class="form-control" name="telepon" />
                            <label class="form-label" for="typeNumber">Telepon</label>
                        </div>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="username" id="typeUsername" class="form-control" name="username" required />
                            <label class="form-label" for="typeUsername">Username</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="typeEmail" class="form-control" name="email" required />
                            <label class="form-label" for="typeEmail">Email</label>

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="typePassword" class="form-control" name="password" required />
                            <label class="form-label" for="typePassword">Password</label>
                        </div>

                        <!-- Password Confirm -->
                        <div class="form-outline mb-4">
                            <input type="password" id="typePassword" class="form-control" name="passconf" required />
                            <label class="form-label" for="typePassword">Password</label>
                        </div>

                        <!-- Avatar input -->
                        Avatar : <div class="form-outline mb-4">
                            <input type="file" id="avatar" name="avatar" class="form-control" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Tambah Data</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- Section: Main chart -->
    </div>
</main>
<?php echo $this->endSection(); ?>