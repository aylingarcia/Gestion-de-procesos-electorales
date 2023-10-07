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
            <span class="price">2023</span>
            <span class="offer"><br>
              <?php
                $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                echo $meses[date('n')-1]." ".date('Y') ;
              ?>
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
      <h1 class="text-center section-heading">Tranding food</h1>
    </div>
    <div class="container2">
      <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
          

          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/top-game-01.jpg" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">Bs5500</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  <a class="link" href="www.google.com"> Mas Información </a>
                </h2>
                
              </div>              
            </div>
          </div>
          <!-- Slide-end -->

          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/top-game-02.jpg" alt="Foto2">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$20</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Meat Ball
                </h2>
                
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/top-game-03.jpg" alt="Foto3">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$40</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Burger
                </h2>
                
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/top-game-04.jpg" alt="Foto4">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$15</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Frish Curry
                </h2>
                
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/top-game-05.jpg" alt="Foto5">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$15</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Pane Cake
                </h2>
                
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/top-game-06.jpg" alt="Foto6">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$20</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Vanilla cake
                </h2>
                
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="assets/images/top-game-01.jpg" alt="Foto1">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$8</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Straw Cake
                </h2>
                
              </div>
            </div>
          </div>
          <!-- Slide-end -->
        </div>

        <div class="tranding-slider-control">
          <div class="swiper-button-prev slider-arrow">
            <ion-icon name="arrow-back-outline"></ion-icon>
          </div>
          <div class="swiper-button-next slider-arrow">
            <ion-icon name="arrow-forward-outline"></ion-icon>
          </div>
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
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="thumb">
                <a href="product-details.html"><img src="assets/images/trending-01.jpg" alt=""></a>
                
              </div>
              <div class="down-content">
                
                <h4>Misión</h4>
                <a href="product-details.html"><i class="fa-regular fa-circle-check fa-beat fa-xl" ></i></a>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="thumb">
                <a href="product-details.html"><img src="assets/images/trending-01.jpg" alt=""></a>
              </div>
              <div class="down-content">
                <h4>Visión</h4>
                <a href="product-details.html"><i class="fa-solid fa-eye fa-beat fa-xl" style="color: #fcfcfd;"></i></a>
              </div>
            </div>
          </div>
          <!-- Slide-end -->

          

        </div>
      </div>
    </div>
 <!-- ***** Oferta de doble titulacion  fin  ***** -->

  <!-- ***** mas jugados  inicio ***** -->
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
  <!-- ***** mas jugados  fin ***** -->

   <!-- ***** categorias  inicio ***** -->
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
   <!-- ***** categorias  fin ***** -->
   
   <!-- ***** cuenta  inicio ***** -->
   <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                <div class="main-button">
                  <a href="shop.html">Shop Now</a>
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
                  <h6>NEWSLETTER</h6>
                  <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button type="submit">Subscribe Now</button>
                  </form>
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
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Harold\Página Web\Oficial 2023\PaginaV2\resources\views/inicio.blade.php ENDPATH**/ ?>