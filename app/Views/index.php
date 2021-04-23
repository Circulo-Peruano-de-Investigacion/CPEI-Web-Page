<!-- Carrusel -->

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>

  <div class="carousel-inner">
      
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="public/img/convocatoria.png" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="public/img/bicentenario.png" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="public/img/siguenos.png" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="public/img/convocatoria.png" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="public/img/bicentenario.png" class="d-block w-100" alt="...">
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>

<!-- Conócenos -->
<div class="grid">
  <div class="contenedor1">
    <img class="barra-cpei" src="public/SVG/forma1.svg" alt="forma1"> 
    <div class="texto-encima">¿Quieres saber </div>
    <br>
    <div class="texto-encima2">más del <b>CPEI</b>?</div>
    <div class="centrado"><a class="btn btn-primary" href="#" role="button">VER MÁS</a></div>
  </div>
  
  <img class="logo-cpei" src="public/img/Logo-1.png" alt="logo-1">

</div>
<br>

<!-- Línea de separación -->

<div class="separacion">
  <img src="public/SVG/fig1.svg" alt="figura1"> 
  <img src="public/SVG/fig3.svg" alt="figura2">  
  <img src="public/SVG/fig2.svg" alt="figura3">  
</div>
<br>


<!--Parte 2 de pantalla inicio-->
<section>
  <div class="subtitulo">
    <div class="fondoGris">
      <img src="public/SVG/part2-gris.svg" alt="forma-subtitulo">
    </div>

    <div class="cpeiPub">
      <img src="public/SVG/cpeiPublicaciones.svg" alt="cpei-publicaciones">
    </div>

  </div>

  <br><br>
  <div class="cuerpo">
    <div class="bluesky">
      <img  src="public/SVG/bluesky.svg" alt="forma-cuerpo">
      <!--<img class="forma-cuerpo2" src="public/SVG/bluesky.svg" alt="forma-cuerpo">-->
    </div>

    <div class="gridm">
      <div class="grid2">
        <div>
          <img src="public/img/imgPrueba.png" alt="imgPrueba">
        </div>

        <div>
          <video alt="prueba" poster="public/img/poster.png" controls>
            <source src="public/videos/prueba.mp4" type="video/mp4"/>
          </video>
        </div>
      
        <div>
          <video alt="prueba" poster="public/img/poster.png" controls >
            <source src="public/videos/prueba.mp4" type="video/mp4"/>
          </video>
        </div>

        <div>
          <img src="public/img/imgPrueba.png" alt="imgPrueba">
        </div>
      </div>
    
      <div class="container">
        <img class="infografia" src="public/img/Infografia.png" alt="Infografia">
      </div>

    </div>
  </div>
</section>
<br><br>

<!--Eventos-->
<article>
  <section>
    <div class="cpeiPub">
        <img src="public/SVG/eventos.svg" alt="eventos">
    </div>
  </section>
    <br>

  <!-- CARRUSEL
    Se hace uso de Owl Carousel
  Fuente: https://owlcarousel2.github.io/OwlCarousel2/demos/basic.
  A la carpeta public/Styles/Pages se le agrega los siguientes archivos:
  - owl.theme.default.min.css
  - owl.carousel.min.css
  - style.css "esto con motivo de que las clases del index.css no afecte al estilo de este carrusel"

  A la carpeta public/js se le agrega los siguientes archivos:
  - owl.carousel.min.js
  - main.js
  -->
  <section>
    <div class="fondoNaranja">
      <img src="public/SVG/fondoNaranja.svg" alt="forma-cuerpo">
    </div>
    <div class="containers">
      <div class="owl-carousel owl-theme">
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>
        <div class="img_box">
          <img src="public/img/evento.png">
        </div>   
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </section>
</article>


<!-- Parte 3 -->

<!-- Nuestar Investigaciones -->

<!-- Aliados Estratégicos -->

<div class="aliados">
  <h1>Aliados Estratégicos</h1>
  <div class="aliados-subra">
    <img src="public/SVG/Formaliados.svg" alt="formali">
  </div>
  
  <div class="imagenes-container">
    <div class="aliados-img">
      <img src="public/img/trans.png" alt="trans">
    </div>

    <div class="aliados-img">
      <img src="public/img/trans.png" alt="trans">
    </div>
  </div>

</div>

<!-- Directiva General -->

<div class="direc">
  <div class="direc-tit">

    <div class="direc-lineder">
      <img src="public/SVG/Formadirec.svg" alt="formdirder">
    </div>

    <div class="tit">Directiva General</div>

    <div class="direc-lineizq">
      <img src="public/SVG/Formadirec.svg" alt="formdirizq">
    </div>

  </div>

  <div class="container-directores">
    <div class="card-director">
      <img src="public/SVG/Circulitodirec.svg" alt="direc">
      <h1>Lorem Ipsum</h1>
      <p>Cargo CPEI</p>
      <p>Universidad Universidad</p>
    </div>
    <div class="card-director">
      <img src="public/SVG/Circulitodirec.svg" alt="direc">
      <h1>Lorem Ipsum</h1>
      <p>Cargo CPEI</p>
      <p>Universidad Universidad</p>
    </div>
    <div class="card-director">
      <img src="public/SVG/Circulitodirec.svg" alt="direc">
      <h1>Lorem Ipsum</h1>
      <p>Cargo CPEI</p>
      <p>Universidad Universidad</p>
    </div>
    <div class="card-director">
      <img src="public/SVG/Circulitodirec.svg" alt="direc">
      <h1>Lorem Ipsum</h1>
      <p>Cargo CPEI</p>
      <p>Universidad Universidad</p>
    </div>
  </div>

</div>
