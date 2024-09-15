<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->renderSection('title') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



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
            background-color: rgba(255,255,255,0.1);
        }

        .background-main-color {
            background-color: ;
        }

        input {
            background-color: rgba(255,255,255, 0.4) !important;
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
            color: #fd575d;
        }

        a:hover {
            color: #fd575dc7;
        }

        .x-card-color {
            background-color: rgba(255,255,255,0.6);
        }
    </style>
</head>

<body>

<main role="main" class="container">
    <?= $this->renderSection('main') ?>
</main>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
