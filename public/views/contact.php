<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - Portal Aukcyjny Mieszkań</title>
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
                <li><a href="offers">Przeglądaj Oferty</a></li>
                <li><a href="addOffer">Wystaw Ofertę</a></li>
                <li><a href="logout">wyloguj się</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="container content">
    <h2>Kontakt</h2>
    <p>Jeśli masz jakiekolwiek pytania lub chcesz się z nami skontaktować, skorzystaj z formularza poniżej lub dane kontaktowe.</p>

    <div class="contact-details">
        <h3>Adres</h3>
        <p>ul. Przykładowa 10, 00-001 Warszawa</p>

        <h3>Telefon</h3>
        <p>+48 123 456 789</p>

        <h3>E-mail</h3>
        <p>kontakt@domaukcyjny.pl</p>
    </div>

    <div class="contact-form">
        <form action="submit_form.php" method="post">
            <label for="name">Imię i nazwisko:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Wiadomość:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Wyślij</button>
        </form>
    </div>
</section>


</body>
</html>
