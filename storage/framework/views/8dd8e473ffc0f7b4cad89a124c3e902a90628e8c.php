<?php $__env->startSection('active'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- ***** Inicio del baner ***** -->
 <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Bienvenido</h6>
            <h2>Dirección de Posgrado </h2>
            <h3>Facultad de Ciencias y Tecnología</h3>
            <p>El Posgrado es parte fundamental de la formación continua de nuestros profesionales, brindándoles especialización, actualización y mayores oportunidades laborales. </p>
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="¿Como podemos ayudarle?" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Buscar</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="assets/images/banner-image.jpg" alt="">
                <span class="price" style="text-align: center;">
                  Hora 
                  <div class="content">
                    <div class="place">
                       <div id="txt">
                       
                       </div>
                    </div>
                  </div>
                </span>
            <span class="offer">
              <p class="h10"> <br>
              <?php
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                echo date('j')."\n";
                echo $meses[date('n')-1]." ".date('Y') ;
              ?>
              <p>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- ***** fin del baner ***** -->
 
  <!-- ***** Inicio botones de programas ***** -->
<div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <a href="doctorados">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="" style="max-width: 55px;">
              </div>
              <h4>Doctorados</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6">
          <a href="maestrias">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 55px;">
              </div>
              <h4>Maestrías</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6">
          <a href="diplomados">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="" style="max-width: 55px;">
              </div>
              <h4>Diplomados</h4>
            </div>
          </a>
        </div>

      </div>
    </div>
</div>
<!-- ***** fin de botones de programas ***** --> 

  <!-- ***** Inicio del Carrousel ***** -->
  <section id="tranding">
    <div class="container2">
      <br><br>
      <h1 class="text-center section-heading">Oferta de Programas</h1>
      
    </div>
    <div class="container2">
      <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
          

          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/1.jpg" alt="Foto1" >
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 1</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->

          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/2.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 2</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/3.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 3</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/4.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 4</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/5.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 5</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/6.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 6</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/7.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 7</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/8.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 8</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->

          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/9.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 9</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->

           <!-- Slide-start -->
           <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/10.png" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs 10</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="petroquimica"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->


        </div>

        <div class="tranding-slider-control">
          
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div>
  </section>
  <!-- ***** Fin de Carrousel  ***** -->

  <!-- ***** Oferta de doble titulacion  inicio ***** -->
    <div class="section trending" >
      <div class="container" >
        <div class="row">
          
          <div class="col-lg-6">
            <div class="section-heading">
              <h6>Lineamientos </h6>
              <h2>Misión y Visión</h2>
            </div>
          </div>
          <!-- Slide-start -->
          <div class="col-lg-2 col-md-4">
            <div class="item">
              <div class="thumb">
                <a href="product-details.html"><img src="assets/images/historia.png" alt=""></a>
                
              </div>
              <div class="down-content">
                
                <h4>Historia</h4>
                <a href="product-details.html"><i class="fa-solid fa-landmark fa-beat fa-xl" ></i></a>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="col-lg-2 col-md-4">
            <div class="item">
              <div class="thumb">
                <a href="product-details.html"><img src="assets/images/vision.png" alt=""></a>
                
              </div>
              <div class="down-content">
                
                <h4>Visión</h4>
                <a href="product-details.html"><i class="fa-regular fa-circle-check fa-beat fa-xl" ></i></a>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          
          <!-- Slide-start -->
          <div class="col-lg-2 col-md-4">
            <div class="item">
              <div class="thumb">
                <a href="product-details.html"><img src="assets/images/mision.png" alt=""></a>
                
              </div>
              <div class="down-content">
                
                <h4>Misión</h4>
                <a href="product-details.html"><i class="fa-regular fa-eye fa-beat fa-xl" ></i></a>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          
          

          

        </div>
      </div>
    </div>
 <!-- ***** Oferta de doble titulacion  fin  ***** -->

  <!-- ***** mas jugados  inicio 
  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP GAMES</h6>
            <h2>Most Played</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-01.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>


        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-02.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-03.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-04.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-05.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/top-game-06.jpg" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">Adventure</span>
                <h4>Assasin Creed</h4>
                <a href="product-details.html">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  mas jugados  fin ***** -->

   <!-- ***** categorias  inicio 
  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-01.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-03.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-04.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
  
  categorias  fin ***** -->
   
   <!-- ***** cuenta  inicio ***** -->
   <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Documentación</h6>
                  <h2>Descarga de  Documentos </h2>
                </div>
                <p>Descarga los documentos, manuales , guias y otros </p>
                <div class="main-button">
                  <a href="shop.html">Ir a Descargas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contactanos</h6>
                  <h2>Contactos </h2>
                </div>
                <p>Envia un Correo, mira nuestra ubicación y números de contactos. </p><br>
                <div class="main-button">
                  <a href="contactos">Contactos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
   <!-- ***** cuenta  fin ***** -->
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Harold\Página Web\Oficial 2023\PaginaV3\resources\views/inicio.blade.php ENDPATH**/ ?>