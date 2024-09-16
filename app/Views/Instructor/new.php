<?= $this->extend('layouts/default') ?>

<?= $this->section('css') ?>
    <style>
        body {
            display: flex;
            align-items: center;
            background-image: url('/assets/img/abstract-envelope.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .card-body {
            background-color: rgba(255, 255, 255, 0.2) !important;
        }

        .btn-primary {
            background-color: #fd575d;
            border: none;
        }

        .btn-primary:hover,
        .btn-primary:active {
            background-color: #fd575dc7 !important;
        }

        a {
            color: #fd575dc7 !important;
        }
    </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <main role="main" class="container">
        <div class="container d-flex justify-content-center p-5">
            <div class="card col-12 col-md-5 shadow-sm">
                <div class="card-body text-center">
                    <img src="/assets/img/logo.webp" class="w-50 mb-5" alt="Logo">
                    <h5 class="card-title">Zarejestruj się jako instruktor</h5>

                    <?php if (session('error') !== null) : ?>
                        <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                    <?php elseif (session('errors') !== null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php if (is_array(session('errors'))) : ?>
                                <?php foreach (session('errors') as $error) : ?>
                                    <?= $error ?>
                                    <br>
                                <?php endforeach ?>
                            <?php else : ?>
                                <?= session('errors') ?>
                            <?php endif ?>
                        </div>
                    <?php endif ?>

                    <?php if (session('message') !== null) : ?>
                        <div class="alert alert-success" role="alert"><?= session('message') ?></div>
                    <?php endif ?>

                    <form action="<?= url_to('instructor_create') ?>" method="post">
                        <?= $this->include('Instructor/form') ?>

                        <div class="d-grid col-12 col-md-8 mx-auto m-3">
                            <button type="submit" class="btn btn-primary btn-block">Potwierdź rejestrację jako
                                instruktor
                            </button>
                        </div>
                    </form>
                    <p><a href="<?=url_to('/')?>">Powrót do strony głównej</a></p>
                </div>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>