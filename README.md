# DomAukcyjny Miszkania

DomAukcyjny Miszkania jest to aplikacja webowa, która umożliwia użytkownikom wystawianie na aukcje swoich mieszkań.

## Instalacja

   ```sh
   git clone https://github.com/GrzegorzPustulka/WDPAI.git  
   ```

## Docker

1. Install Docker on your system if it's not already installed: [Docker Installation Guide](https://docs.docker.com/get-docker/).
2. ```cd WDPAI```
3. ```docker compose build```
4. ```docker compose up```

To delete all images: ```docker images -a -q | % { docker image rm $_ -f }```


## Użyte technologie

- [PHP](https://www.php.net/)
- [Docker](https://www.docker.com/)
- [Bootstrap](https://getbootstrap.com/)
- [JavaScript](https://www.javascript.com/)
- [HTML](https://html.com/)
- [CSS](https://www.w3.org/Style/CSS/Overview.en.html)
- [postgreSQL](https://www.postgresql.org/)


## Kontakt

- Grzegorz Pustułka

- email: kontakt.pustulka@gmail.com

- linkedin: https://www.linkedin.com/in/grzegorzPustulka/
- Project Link: https://github.com/grzegorzpustulka/WDPAI


## Screenshots

![offers](./screenshots/offers.png)
![offer](./screenshots/offer.png)
![contact](./screenshots/contact.png)
![login](./screenshots/login.png)
![register](./screenshots/rejestracja.png)
![addOffer](./screenshots/insert.png)
![about](./screenshots/about.png)


## License

MIT License

Copyright (c) 2021 Othneil Drew

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
