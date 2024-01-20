<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferty Mieszkań - Portal Aukcyjny Mieszkań</title>
    <link rel="stylesheet" href="/public/css/info_page.css">
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

<section class="container offers">
    <h2>Nasze Oferty</h2>
    <div class="offer-grid">
        <!-- Tutaj powtórz blok .offer dla każdej oferty, zmieniając szczegóły i obraz -->
        <div class="offer">
            <img src="path/to/image.jpg" alt="Mieszkanie">
            <h3>Nazwa Mieszkania</h3>
            <p class="price">Cena: 1900zł</p>
            <p class="location"><i class="fas fa-map-marker-alt"></i> Kraków, Stare Miasto</p>
            <p class="features"><i class="fas fa-expand"></i> 32m² <i class="fas fa-wifi"></i> Free WiFi</p>
            <button class="btn">Zobacz Ofertę</button>
        </div>
        <!-- Koniec bloku .offer -->
    </div>
</section>


</body>
</html>