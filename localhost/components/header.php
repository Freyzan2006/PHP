<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
    <title><?= $title ?></title>
</head>
<body>


<header data-bs-theme="dark">
    <div class="text-bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                        <span class="fs-4">LOGO</span>
                    </a>
                </div>

                <div class="col-sm-4 offset-md-1 py-4">
                    <h4>Меню</h4>
                    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/">Главная страница</a>
                        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/about.php">О нас</a>
                        
                        <?php if($_COOKIE['user'] == "Да"): ?>
                            <a class="me-3 py-2 link-body-emphasis text-decoration-none btn btn-primary" href="#!">Профиль</a>
                            <a class="me-3 py-2 link-body-emphasis text-decoration-none btn btn-primary" href="/auth.php">Выйти</a>
                        <?php else: ?>
                            <a class="me-3 py-2 link-body-emphasis text-decoration-none btn btn-primary" href="/auth.php">Войти</a>
                        <?php endif; ?>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <h2>LOGO</h2>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </div>
</header>

<div class="container">