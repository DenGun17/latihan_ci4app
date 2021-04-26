<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>
<div class="container my-5 col-4">
    <div class="card">
    <h3 class="card-header text-center">Login</h3>
    <div class="card-body">
        <!-- slot flash message -->
        <div class="row">
            <div class="col mx-auto">
                <form action="<?= base_url('login/proses'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required>
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <br>
                    <input type="submit" value="Login" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<?= $this->endSection(); ?>