<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferty Mieszkań - Portal Aukcyjny Mieszkań</title>
    <link rel="stylesheet" href="/public/css/info_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript" src="/public/js/find-offer.js" defer></script>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><span class="highlight">DomAukcyjny</span> Mieszkania</h1>
        </div>
        <nav>
            <ul>
                <li><a href="about">O Portalu</a></li>
                <li><a href="addOffer">Wystaw Ofertę</a></li>
                <li><a href="contact">Kontakt</a></li>
                <li><a href="logout">wyloguj się</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container mt-5">
    <h2>Oferty Mieszkań</h2>
    <div class="row">
        <?php foreach ($offers as $offer): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/public/images/aparment.jpg" class="card-img-top" alt="Zdjęcie mieszkania">
                    <div class="card-body">
                        <h5 class="card-title"><?= $offer->getCity(); ?></h5>
                        <p class="card-text"><?= $offer->getDescription(); ?></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Rozmiar: <?= $offer->getSize(); ?> m²</li>
                            <li class="list-group-item">Cena: <?= $offer->getPrice(); ?> PLN</li>
                            <li class="list-group-item">Ilość pokoi: <?= $offer->getRooms(); ?></li>
                        </ul>
                        <button class="btn btn-primary" onclick="viewOffer(<?= $offer->getId(); ?>)">Zobacz ofertę</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.5/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>