<?php
$active = "";
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

if (!isset($url[0])) {
    $active = "active";
} elseif (isset($url[0]) && $url[0] = "products") {
    $active = "active";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD-Stock</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./" id="navBrand"><img src="<?= WEB_URL ?>img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $active ?>" href="./">Home</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <input class="form-control me-3" type="search" id="searchMusic" placeholder="Search" aria-label="Search your music">
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="text-center" style="width: 100%; margin-top: 50px;">
            <h1 style="text-decoration: underline;">Naše CD</h1>
        </div>
        <div id="products" class="row">
            <div class="fullWidth text-center mt-5" id="loading">
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery.js"></script>
    <script>
        let products;
        $(window).on("load", () => {
            $.ajax({
                type: "GET",
                url: '<?= REQUEST_URL ?>products/products',
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(resp, textStatus, jqXHR) {
                    if (jqXHR.status === 200) {
                        products = resp;
                        $("#loading").css("display", "none");
                        products.forEach(element => {
                            //první varianta přes table
                            //$("#tableBody").append('<tr><th ><img class="tlbImg" src="<?= WEB_URL ?>' + element.img + '" alt="CD Image"></th><td>' + element.title + '</td><td>' + element.artist + '</td><td><a href="./details/' + element.id + '" class="btn btn-success">Details</a></td></tr>');
                            $("#products").append('<div class="generatedData" style="width: 288px; margin: 5px auto;"><div class="card" style="width: 288px; height: 400px; position: relative;"><img src="<?= WEB_URL ?>' + element.img + '" class="card-img-top albumImg" alt="' + element.title + '"><div class="card-body" style="color: black;"><h5 class="card-title text-center">' + element.title + '</h5><p class="card-text">' + element.description + '</p><a href="<?= WEB_URL ?>details/' + element.id + '" class="btn btn-success" style="width: 50%; margin-left: 25%; margin-top: 10px; position: absolute; bottom: 0; left: 0;">Podrobnosti</a></div></div></div>');
                        });
                    }
                }
            })
        });

        $("#searchMusic").on("input", () => {
            $(".generatedData").remove();
            let input = $("#searchMusic").val().toLowerCase();
            let rs = products.filter(product => {
                return product.description.toLowerCase().includes(input)
            });
            rs.forEach(element => {
                $("#products").append('<div class="generatedData" style="width: 288px; margin: 5px auto;"><div class="card" style="width: 288px; height: 400px; position: relative;"><img src="<?= WEB_URL ?>' + element.img + '" class="card-img-top albumImg" alt="' + element.title + '"><div class="card-body" style="color: black;"><h5 class="card-title text-center">' + element.title + '</h5><p class="card-text">' + element.description + '</p><a href="<?= WEB_URL ?>details/' + element.id + '" class="btn btn-success" style="width: 50%; margin-left: 25%; margin-top: 10px; position: absolute; bottom: 0; left: 0;">Podrobnosti</a></div></div></div>');
            })
        });
    </script>
</body>

</html>