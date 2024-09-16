<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <header id="main" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center py-6">
                    <div>
                        <div>
                            <img src="/assets/img/logo.webp" alt="Logo" class="w-50 mb-2">
                        </div>
                        <p class="header-text">Znajdź nauczyciela i rozpocznij naukę języka, dopasowaną do Twoich
                            potrzeb oraz poziomu zaawansowania. Wybierz mentora, który pomoże Ci w szybkim opanowaniu
                            podstaw, doskonaleniu gramatyki czy rozwijaniu płynności w mowie.</p>
                        <div class="d-flex justify-content-center">
                            <?php if (auth()->loggedIn()): ?>
                                <?php if ($instructor): ?>
                                    <div class="mx-2">
                                        <a href="<?= url_to('instructor_edit') ?>" class="btn btn-success btn-rounded">Edytuj
                                            profil instruktora</a>
                                    </div>
                                <?php else: ?>
                                    <div class="mx-2">
                                        <a href="<?= url_to('instructor_new') ?>" class="btn btn-success btn-rounded">Zapisz
                                            się jako nauczyciel
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="mx-2">
                                    <a href="/logout" class="btn btn-secondary btn-rounded">Wyloguj się
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="mx-2">
                                    <a href="/login" class="btn btn-success btn-rounded">Zaloguj
                                        się
                                    </a>
                                </div>
                                <div class="mx-2">
                                    <a href="/register" class="btn btn-secondary btn-rounded">Utwórz
                                        konto
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="/assets/img/undraw_around_the_world_re_rb1p.svg">
                </div>
            </div>
        </div>
    </header>
    <section id="languages-list" class="p-4">
        <div class="text-center w-75 m-auto">
            <h2>Jakiego języka chcesz się dziś nauczyć?</h2>
            <div class="row mt-5">
                <?php foreach ($languages as $language): ?>
                    <div class="col-sm-3 mb-5">
                        <div>
                            <a class="text-black" href="<?= url_to('language', $language['name']) ?>">
                                <div><img src="<?= $language['image_path'] ?>" class="w-50 rounded-circle"></div>
                                <p><?= $language['name'] ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="last-teachers" class="text-center p-4">
        <div class="container">
            <h2>Ostatnio dodani nauczyciele</h2>

            <?php foreach($latestInstructors as $instructor): ?>
            <div class="card flex-row mb-4">
                <div class="card-body">
                    <h4 class="card-title h5 h4-sm"><?=$instructor['username']?></h4>
                    <?php if (auth()->loggedIn()): ?>
                        <small>Numer kontaktowy: <a href="tel:<?=$instructor['phone']?>"><?=$instructor['phone']?></a></small>
                    <?php else: ?>
                        <small>Numer kontaktowy dostępny tylko dla zalogowanych</small>
                    <?php endif; ?>
                    <p class="card-text"><?=$instructor['description']?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!--    <header id="main">-->
    <!--        <div class="text-center w-75">-->
    <!--            <div class="text-center mb-5">-->
    <!--                <img src="/assets/img/logo.png" alt="Logo" class="w-25">-->
    <!--            </div>-->
    <!---->
    <!--            <h1>Witaj</h1>-->
    <!--            <h2>Jakiego języka chcesz się dziś nauczyć?</h2>-->
    <!--            <div class="row mt-5">-->
    <!--                --><?php //foreach ($languages as $language): ?>
    <!--                    <div class="col-sm-3 mb-5">-->
    <!--                        <div>-->
    <!--                            <div><img src="--><?php //=$language['image_path']?><!--" class="w-50 rounded-circle"></div>-->
    <!--                            <p>--><?php //= $language['name'] ?><!--</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                --><?php //endforeach; ?>
    <!--            </div>-->
    <!--        </div>-->
    <!--    </header>-->

<?= $this->endSection() ?>