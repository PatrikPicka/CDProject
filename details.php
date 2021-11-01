<?php
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

if (!isset($url[1]) || intval($url[1]) === 0 || $url[1] === "") {
    Router::redirect(WEB_URL . "products");
} else {
    $id = $url[1];
    $ph = new Products();
    $product = $ph->getOneById($id);
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
    <link rel="stylesheet" href="<?= WEB_URL ?>css/main.css">
</head>

<body>


    <script src="<?= WEB_URL ?>js/bootstrap.js"></script>
    <script src="<?= WEB_URL ?>js/jquery.js"></script>
    <script>

    </script>
</body>

</html>