
<div class="container">
    <h2 class="my-3">Add User</h2>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= BASEURL ?>/user/tambahData" method="post">
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username*</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password*</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <button type="submit" name="save" class="btn btn-primary">Save</button>
                <a href="<?= BASEURL ?>/user" name="save" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
