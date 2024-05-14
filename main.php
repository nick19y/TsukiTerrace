<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tsuki Terrace</title>
</head>
<body>
    <header>
        <div class="add-item">
            <a href="/admin">
                <img src="/img/add.png" alt="">
            </a>
        </div>
        <div class="logo">
            <img src="/img/logo64.png" alt="">
            <h1>TsukiTerrace</h1>
            <p class="slogan">Onde a comida é uma arte</p>
        </div>
    </header>
    <main class="main-page">
        <div class="bootstrap-carousel">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/slide1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slide2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slide3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="menu">
            <h1 class="menu-title">Cardápio</h1>
            <ul class="menu-options">
                <li class="menu-item">
                    <img src="/img/sushi.webp" alt="" class="img-menu">
                    <h3 class="item-title">Sushi</h3>
                    <p class="description">Fatias de peixe cru sobre arroz temperado.</p>
                    <h4 class="price">R$ 12,99</h4>
                </li>
                <li class="menu-item">
                    <img src="/img/sashimi.webp" alt="" class="img-menu">
                    <h3 class="item-title">Sashimi</h3>
                    <p class="description">Fatias finas de peixe cru servidas sem arroz.</p>
                    <h4 class="price">R$ 14,99</h4>
                </li>
                <li class="menu-item">
                    <img src="/img/tempura.jpg" alt="" class="img-menu">
                    <h3 class="item-title">Tempurá</h3>
                    <p class="description">Vegetais ou frutos do mar fritos em massa crocante.</p>
                    <h4 class="price">R$ 10,99</h4>
                </li>
                <li class="menu-item">
                    <img src="/img/uramaki.jpg" alt="" class="img-menu">
                    <h3 class="item-title">Uramaki</h3>
                    <p class="description">Sushi enrolado ao contrário com arroz por fora.</p>
                    <h4 class="price">R$ 9,99</h4>
                </li>
                <li class="menu-item">
                    <img src="/img/gyoza.jpg" alt="" class="img-menu">
                    <h3 class="item-title">Gyoza</h3>
                    <p class="description">Pastéis japoneses recheados com carne ou vegetais.</p>
                    <h4 class="price">R$ 8,99</h4>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>