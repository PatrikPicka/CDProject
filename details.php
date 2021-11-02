<?php
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

if (!isset($url[1]) || intval($url[1]) === 0 || $url[1] === "") {
    Router::redirect(WEB_URL . "products");
} else {
    $id = $url[1];
    $ph = new Products();
    $product = $ph->getOneById($id);
    $songs = explode(";", $product->songs);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product->title ?></title>
    <link rel="stylesheet" href="<?= WEB_URL ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= WEB_URL ?>css/main.css" media="screen">
    <link rel="stylesheet" href="<?= WEB_URL ?>css/printProduct.css" media="print">
</head>

<body>
    <section class="screenSection">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./" id="navBrand"><img src="<?= WEB_URL ?>img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="title text-center">
                <h1><?= $product->artist ?></h1>
                <h3><?= $product->title ?></h3>
            </div>
            <div class="row informations">
                <div class="col-md-6 d-flex flex-column mt-5 infoText">
                    <p><span><?= $product->description ?></span></p>
                    <p style="margin-bottom: 5px;">Seznam skladeb: </p>
                    <div class="border">
                        <?php foreach ($songs as $song) : ?>
                            <p><?= $song ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-5 colCDImg">
                    <img src="<?= WEB_URL . $product->img ?>" alt="<?= $product->title ?>" class="cdImage">
                    <div class="additional-info">
                        <h5>Informace</h5>
                        <p>Rok vydání: <span><?= $product->year ?></span></p>
                        <p>Hudební styl: <span><?= $product->genre ?></span></p>
                        <p>Album: <span><?= $product->album ?></span></p>
                        <p>Naše hodnocení: <span><?= $product->score ?>/5</span></p>
                        <p>Cena: <span><?= $product->price ?> Kč</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="printSection">
        <div class="header d-flex justify-content-center">
            <img src="<?= WEB_URL ?>img/logo.png" alt="CD-Stock">
        </div>
        <h3><?= $product->artist ?> - <?= $product->title ?></h3>
        <div class="d-flex justify-content-spaced-between">
            <div class="left-section-info">
                <h5>Informace</h5>
                <p>Rok vydání: <span><?= $product->year ?></span></p>
                <p>Hudební styl: <span><?= $product->genre ?></span></p>
                <p>Album: <span><?= $product->album ?></span></p>
                <p>Naše hodnocení: <span><?= $product->score ?>/5</span></p>
                <p>Cena: <span><?= $product->price ?> Kč</span></p>
            </div>
            <div class="right-section-info">
                <img src="<?= WEB_URL . $product->img ?>" alt="<?= $product->title ?>" style="width: 75%;">
            </div>
        </div>
        <div class="songs">
            <h5 style="margin-bottom: 5px;">Seznam skladeb: </h5>
            <div>
                <?php foreach ($songs as $song) : ?>
                    <p style="margin-bottom: 2px;"><?= $song ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <script src="<?= WEB_URL ?>js/bootstrap.js"></script>
    <script src="<?= WEB_URL ?>js/jquery.js"></script>
    <script>

    </script>
</body>

</html>