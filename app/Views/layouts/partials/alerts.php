<?php if (session('error') !== null) : ?>
    <div class="alert alert-danger" role="alert"><?= esc(session('error')) ?></div>
<?php elseif (session('errors') !== null) : ?>
    <div class="alert alert-danger" role="alert">
        <?php foreach (session('errors') as $error) : ?>
            <div><?= esc($error) ?></div>
        <?php endforeach ?>
    </div>
<?php endif ?>

<?php if (session('success') !== null) : ?>
    <div class="alert alert-success" role="alert"><?= esc(session('success')) ?></div>
<?php endif ?>