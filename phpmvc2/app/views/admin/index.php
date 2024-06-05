
<div class="container">
    <h2 class="my-3">Master Admin</h2>
    <a href="<?= BASEURL ?>/admin/tambah" class="btn btn-primary btn-sm">Add Data</a>
    <div class="row my-2">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <table class="table table-hover mt-5">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $n = 1;
            foreach ($data['admin'] as $row) {
            ?>
                    <tr>
                        <th scope="row"><?= $n++ ?></th>
                        <td><?= $row['username'] ?></td>
                        <td>
                            <a href="<?= BASEURL ?>/admin/edit/<?= $row['id_admin'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= BASEURL ?>/admin/deleteData/<?= $row['id_admin'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
