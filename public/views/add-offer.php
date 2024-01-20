<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie Oferty Mieszkania</title>
    <link rel="stylesheet" href="/public/css/info_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
                <li><a href="contact">Kontakt</a></li>
                <li><a href="logout">wyloguj się</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container mt-5">
    <form>
        <h2 class="mb-4">Dodaj Ofertę Mieszkania</h2>
        <div class="form-group">
            <label for="size">Rozmiar (m²)</label>
            <input type="number" class="form-control" id="size" name="size" placeholder="Wpisz rozmiar mieszkania" required>
        </div>
        <div class="form-group">
            <label for="rooms">Liczba pokoi</label>
            <input type="number" class="form-control" id="rooms" name="rooms" placeholder="Wpisz liczbę pokoi" required>
        </div>
        <div class="form-group">
            <label for="price">Cena (PLN)</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Wpisz cenę" required>
        </div>
        <div class="form-group">
            <label for="city">Miasto</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Wpisz miasto" required>
        </div>
        <div class="form-group">
            <label for="description">Opis</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Opisz mieszkanie" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj Ofertę</button>
    </form>
</div>

<!-- Opcjonalne JavaScript -->
<!-- jQuery pierwsze, potem Popper.js, potem Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
