<?= $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>
<p class="login-box-msg">Accedi</p>

<form action="<?= route_to('login') ?>" method="post">
    <?= csrf_field() ?>
    <div class="input-group mb-1">
        <div class="form-floating">
            <input id="loginEmail" name="email" type="email" class="form-control" value="" placeholder="" />
            <label for="loginEmail">Email</label>
        </div>
        <div class="input-group-text">
            <span class="bi bi-envelope"></span>
        </div>
    </div>
    <div class="input-group mb-1">
        <div class="form-floating">
            <input id="loginPassword" name="password" type="password" class="form-control" placeholder="" />
            <label for="loginPassword">Password</label>
        </div>
        <div class="input-group-text">
            <span class="bi bi-lock-fill"></span>
        </div>
    </div>
    <!--begin::Row-->
    <div class="row">
        <div class="col-8 d-inline-flex align-items-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault"> Ricordami </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!--end::Row-->
</form>
<!-- /.login-card-body -->

<?= $this->endSection() ?>