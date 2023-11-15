<a type="button" class="btn btn-success" href="#" id="tambah">Tambah Mahasiswa</a>
<?php if (session()->getflashdata('sukses') != '') { ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getflashdata('sukses'); ?>
    </div>
<?php } ?>
<table class="table" id="usertabel">
    <thead>
        <tr>
            <th>No</th>
            <th>Avatar</th>
            <th>Username</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($user as $u) { ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="/img/<?= $u['avatar'] ?>" class="img-fluid" style="width: 100px" alt="Avatar"></td>
                <td><?php echo $u['username'] ?></td>
                <td><?php echo $u['email'] ?></td>
                <td>
                    <a class="btn btn-primary" href="<?php echo "/user/" . $u['id']; ?>"> Detail</a></button>
                    <a href="#" id="edit" onclick="edit(<?= $u['id'] ?>)" class="btn btn-info">Edit</a>
                    <a href="#" id="edit" onclick="hapus(<?= $u['id'] ?>)" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    function edit(id) {
        $.ajax({
            url: "<?= base_url('/user/form') ?>/" + id,
            dataType: "json",
            success: function(response) {
                $('#viewmodal').html(response.data).show();
                $('#editmodal').modal('show');
            }
        });
    }

    function hapus(id) {
        Swal.fire({
            title: 'Hapus Data',
            text: `Apakah Anda yakin akan menghapus data dengan ID=${id}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "delete",
                    url: "<?= base_url('/user') ?>/" + id,
                    dataType: "json",
                    success: function(response) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.sukses,
                            icon: 'success',
                            confirmButtonText: 'Ok'
                        });
                        tampilData();
                    }
                });
            }
        });
    }


    $(document).ready(function() {
        new DataTable('#usertabel')


        $('#tambah').click(function(e) {
            e.preventDefault();
            $('#formModal').modal('show');
        });
        $('#form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: new FormData(this),
                contentType: false,
                processData: false,

                success: function(response) {
                    if (response.error) {
                        if (response.error.errornamadepan) {
                            $('#nd').addClass('is-invalid');
                            $('#errornd').html(response.error.errornamadepan);
                        } else {
                            $('#nd').removeClass('is-invalid');
                            $('#errornd').html('');
                        }

                        if (response.error.errornamabelakang) {
                            $('#nb').addClass('is-invalid');
                            $('#errornb').html(response.error.errornamabelakang);
                        } else {
                            $('#nb').removeClass('is-invalid');
                            $('#errornb').html('');
                        }
                    } else {
                        alert('berhasil input data');
                        $('#formModal').modal('hide');
                        tampilData();
                    }
                }
            });
        });
    });
</script>