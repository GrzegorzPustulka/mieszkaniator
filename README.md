# Communicator

It is first project from WDPAI.

## Local installation 

Clone this repository to your device:

   ```sh
   git clone https://github.com/GrzegorzPustulka/WDPAI.git  
   ```

### Docker

To run this project using Docker, follow these steps:

1. Install Docker on your system if it's not already installed: [Docker Installation Guide](https://docs.docker.com/get-docker/).
2. ```cd WDPAI```
3. ```docker compose build```
4. ```docker compose up```

To delete all images: ```docker images -a -q | % { docker image rm $_ -f }```


### Contact

Grzegorz Pustułka - @gpustulka - grzegorz.pustulka@gmail.com

Project Link: https://github.com/grzegorzpustulka/WDPAI


### License

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
