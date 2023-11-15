<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="form" action="/insertuser" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="nd" class="form-control" name="nama_depan" />
                                <label class="form-label" for="typeNamaDepan">Nama Depan</label>
                                <div class="invalid-feedback" id="errornd"></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="nb" class="form-control" name="nama_belakang" />
                                <label class="form-label" for="typeNamaDepan">Nama Belakang</label>
                                <div class="invalid-feedback" id="errornb"></div>
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
                    <div class="form-outline mb-4">
                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin :</label>

                        <input type="radio" id="inlineRadio1" class="form-check-input" value="Laki-Laki" name="Laki-Laki" />
                        <label class="form-check-label" for="Laki-Laki">Laki Laki</label>

                        <input type="radio" id="inlineRadio2" class="form-check-input" value="Perempuan" name="Perempuan" />
                        <label class="form-check-label" for="Perempuan">Perempuan</label>
                    </div>

                    <!-- Telepon input -->
                    <div class="form-outline mb-4">
                        <input type="tel" id="typeNumber" class="form-control" name="telepon" />
                        <label class="form-label" for="typeNumber">Telepon</label>
                    </div>


                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="typeUsername" class="form-control" name="username" required minlength="5" />
                        <label class="form-label" for="typeUsername">Username</label>
                        <div class="invalid-feedback" id="errorUsername"></div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="typeEmail" class="form-control" name="email" required />
                        <label class="form-label" for="typeEmail">Email</label>

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="typePassword" class="form-control" name="password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" />
                        <label class="form-label" for="typePassword">Password</label>
                        <div class="invalid-feedback" id="errorPassword"></div>
                    </div>

                    <!-- Confirm Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="typeConfirmPassword" class="form-control" name="confirm_password" required />
                        <label class="form-label" for="typeConfirmPassword">Confirm Password</label>
                        <div class="invalid-feedback" id="errorConfirmPassword"></div>
                    </div>

                    <!-- Avatar input -->
                    <label class="form-label" for="avatar">Avatar :</label>
                    <div class="form-outline mb-4">
                        <input type="file" class="form-control" id="avatar" name="avatar" />
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Tambah Data</button>
                </form>

            </div>

        </div>
    </div>
</div>