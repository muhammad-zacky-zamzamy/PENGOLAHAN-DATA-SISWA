<?php
foreach ($data['user'] as $row) {
}
?>
<div class="container">
    <h2 class="my-3">Edit User</h2>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= BASEURL ?>/user/editData" method="POST">
                <input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username*</label>
                    <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password*</label>
                    <input type="password" name="password" class="form-control" value="<?= $row['password'] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?= BASEURL ?>/user" name="save" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>

<?php include '../footer.php' ?>