<?php require_once 'head-html.php' ?>
<body>
    <header>
        <div class="add-item">
            <a href="/admin">
                <img src="/img/add.png" alt="">
            </a>
        </div>
        <?php require_once 'logo-html.php'?>
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
<?php require_once 'end-html.php'?>