<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje o Ofertach</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/info_page.css">
    <style>
        .offer-card {
            max-width: 1000px; /* Szerokość karty */
            margin: auto;
        }
        .offer-image {
            height: 500px; /* Wysokość obrazka */
            object-fit: cover;
        }
    </style>
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
                <li><a href="offers">Przeglądaj Oferty</a></li>
                <li><a href="addOffer">Wystaw Ofertę</a></li>
                <li><a href="contact">Kontakt</a></li>
                <li><a href="logout">wyloguj się</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container mt-5">
    <div class="card offer-card">
        <img src="/public/images/aparment.jpg" class="card-img-top offer-image" alt="Zdjęcie oferty">
        <div class="card-body">
            <h4><strong>Miasto:</strong> <span id="city"></span></h4>
            <p class="card-text"><strong>Opis:</strong> <span id="description"></span></p>
            <p class="card-text"><strong>Cena:</strong> <span id="price"></span> PLN</p>
            <p class="card-text"><strong>Ilość pokoi:</strong> <span id="rooms"></span></p>
            <p class="card-text"><strong>Rozmiar:</strong> <span id="size"></span> m²</p>
            <p class="card-text"><strong>E-mail:</strong> <span id="email"></span></p>
            <p class="card-text"><strong>telefon:</strong> <span id="phone"></span></p>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const offerData = JSON.parse(localStorage.getItem('offerData'))[0];

        if (offerData) {
            document.getElementById('city').textContent = offerData.city || 'Brak danych';
            document.getElementById('description').textContent = offerData.description || 'Brak opisu';
            document.getElementById('price').textContent = offerData.price || 'Brak ceny';
            document.getElementById('rooms').textContent = offerData.rooms || 'Brak informacji o pokojach';
            document.getElementById('size').textContent = offerData.size || 'Brak rozmiaru';
            document.getElementById('email').textContent = offerData.email || 'Brak emaila';
            document.getElementById('phone').textContent = offerData.phone || 'Brak telefonu';
            localStorage.removeItem('offerData');
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
