<?= $this->extend('layouts/default') ?>


<?= $this->section('content') ?>

<header id="language_header">
    <div id="bar-container" class="text-center p-2">
        <a href="/">
            <img class="img-fluid logo" src="/assets/img/logo.webp" alt="Logo">
        </a>
    </div>
    <h1 class="p-5 text-center m-0"><?= $language['name'] ?></h1>
</header>

<section id="last-teachers" class="text-center p-4">
    <div class="container">
        <?php if ($instructors): ?>
            <?php foreach ($instructors as $instructor): ?>
                <div class="card flex-row mb-4">
                    <img class="card-img-left example-card-img-responsive" src="/postboot/assets/img/thumbnail.jpg"/>
                    <div class="card-body">
                        <h4 class="card-title h5 h4-sm"><?= $instructor['username'] ?></h4>
                        <p class="card-text"><?= $instructor['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
        <p>Brak instruktorów</p>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>
