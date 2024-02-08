<?php
// Configuração para desabilitar o cache...
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Links - Studio</title>
    <link rel="icon" href="/links/images/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Nunito:wght@300&display=swap');
      body {
        background-image: url("/links/images/logo.webp");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }
      header {
        height: 300px;
        width:100%;
        padding-top: 10rem;
        background-image: url("/links/images/IMG_5872.webp");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }
      @media screen and (min-width: 1024px) {
        header {
          background-image: none;
          background-color: #dd7a89;
        }
      }
      #main {
        margin-top: 10rem;
      }  
      @media screen and (max-width: 524px) {
        #main {
          height: 40vh;
        }
      }
      #perfil {
        width: 150px;
        height: 160px;
      } 
      #imagem {
        padding-top: 5rem;
      }
      #buttons_links {
        font-family: 'Nunito', sans-serif;
        padding-block: 1rem;
        position: relative;
      }
      #buttons a {
        text-decoration: none;
      }
      #buttons button {
        color: #2e1e69;
        background-color: transparent;
        border-color: pink;
      }
      #buttons button:hover {
        background-color: rgb(216, 139, 152);
      }
      #nome {
        font-family: 'Great Vibes', cursive;
        font-size: 3rem;
        color: #dd7a89;
      }
      #subnome {
        margin-top: 0.2rem;
        font-family: 'Nunito', sans-serif;
        color: #2e1e69;
      }
      #logo {
        width: 25%;
      }
      @media screen and (max-width: 924px) {
        #logo {
          width: 50%;
        }
      }
      @media screen and (min-width: 1024px) {
        #perfil {
          width: 280px;
          height: 290px;
        }
        #imagem {
          padding-top: 0;
          margin-top: -4rem;
        }
      } 
    </style>
  </head>
  <body>
<!-----------header--&--navbar---------------->
    <header class="text-center rounded-2 shadow-lg" style="border-bottom: solid 3px #dd7a89;">
  <!-----------zona-perfil--imagem-e-nome-------->
    <nav id="zona-perfil">
      <div id="imagem">
      <img id="perfil" src="/links/images/IMG_5870.webp" class="img-fluid rounded mx-auto d-block shadow-lg" style="border: solid 3px #dd7a89;" alt="...">
    </div>
      <h1 id="nome" class="text-center"><p id="subnome" class="h5 text-center"><strong>Maquiadora Profissional</strong></p>Sabrina Freire</h1>
    </nav>
    </header><br/>
  <!-----------zona-links------------------------>
    <section id="main" class="container">
        <div id="buttons_links" class="row text-center">
          <div id="buttons" class="d-grid gap-2 col-6 mx-auto">
           <a href="https://contate.me/studiomakecomsabrina" target="_blank"><button type="button" class="btn btn-primary w-100 rounded-5 shadow-lg" style="border: solid 1.5px #d38490">
              <strong>Agendar horário</strong>
            </button></a>
            <a href="https://contate.me/studiomakecomsabrina" target="_blank"><button type="button" class="btn btn-primary w-100 rounded-5 shadow-lg" style="border: solid 1.5px #d38490">
                <strong>Combos & Makes</strong>
              </button></a>
            <a href="https://contate.me/studiomakecomsabrina" target="_blank"><button type="button" class="btn btn-primary w-100 rounded-5 shadow-lg" style="border: solid 1.5px #d38490">
                <strong>Cursos</strong>
              </button></a>
          </div>
        </div>
        <div class="text-center container">
          <img id="logo" src="/links/images/logosabrina.webp" alt="">
        </div>
    </section>
<!-------------rodapé---------------->
    <footer class="footer copyright text-center p4 border-top" style="font-family: 'Nunito', sans-serif;">
        Desenvolvido por <a href="https://instagram.com/siga_tj">TJ</a>. 2023©
    </footer>
    </body>
</html>