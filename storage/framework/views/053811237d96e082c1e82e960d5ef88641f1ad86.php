<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
	  <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <title>Dirección de Posgrado FCyT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome/fontawesome.css" >
    <link rel="stylesheet" href="assets/css/fontawesome/brands.css" >
    <link rel="stylesheet" href="assets/css/fontawesome/solid.css" >
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/slide.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  </head>
  
<body onload="startTime()">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
 <!-- ***** Preloader End ***** -->






  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="DPG" style="width: 300px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      
                      <li><a href="/">Inicio</a></li>
                      <li><a class=" <?php echo e(request()-> is('diplomados') ? 'active' : ''); ?>" href="diplomados">Diplomados</a></li>
                      <li><a class=" <?php echo e(request()-> is('maestria') ? 'active' : ''); ?>" href="maestrias">Maestrías</a></li>
                      <li><a class=" <?php echo e(request()-> is('doctorado') ? 'active' : ''); ?>" href="doctorados">Doctorados</a></li>
                      <li><a class=" <?php echo e(request()-> is('documentacion') ? 'active' : ''); ?>" href="documentacion">Documentación</a></li>
                      <li><a class=" <?php echo e(request()-> is('About') ? 'active' : ''); ?>" href="contactos">Acerca de</a></li>
                      <li><a class=" <?php echo e(request()-> is('login') ? 'active' : ''); ?>" href="login">Ingreso</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->




<?php echo $__env->yieldContent('content'); ?>








  <a href="https://www.facebook.com/posgradofcyt" class="btn-fk" target="_blank">
	    <i class="fa-brands fa-facebook-f fa-beat " style="color: #ffffff;"></i>
	</a>
  <a href="https://www.facebook.com/posgradofcyt" class="btn-insta" target="_blank">
	    <i class="fa-brands fa-instagram fa-beat " style="color: #ffffff;"></i>
	</a>
  <a href="https://api.whatsapp.com/send?phone=59144116122" class="btn-wsp" target="_blank">
	    <i class="fa-brands fa-whatsapp fa-beat" style="color: #ffffff;"></i>
	</a>

   <!-- ***** footer inicio ***** -->
  <footer>
    <div class="container">
      <div class="col-lg-12">
        <br><br>
        <p>Copyright © 2023 Dirección de Posgrado Facultad de Ciencias y Tecnología. Todos los derechos Reservados. &nbsp;&nbsp; <a rel="nofollow" href="" target="_blank">Design: Harold Quiroga</a></p>
      </div>
    </div>
  </footer>
  <!-- ***** footer  fin ***** -->

  <!-- ***** scripts reloj ***** -->
  <script type="application/x-javascript"> 
  addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } 
  </script>

  <Script Language='Javascript'>
  document.write(unescape('%3C%73%63%72%69%70%74%3E%0A%66%75%6E%63%74%69%6F%6E%20%73%74%61%72%74%54%69%6D%65%28%29%20%7B%0A%20%20%20%20%76%61%72%20%74%6F%64%61%79%20%3D%20%6E%65%77%20%44%61%74%65%28%29%3B%0A%20%20%20%20%76%61%72%20%68%20%3D%20%74%6F%64%61%79%2E%67%65%74%48%6F%75%72%73%28%29%3B%0A%20%20%20%20%76%61%72%20%6D%20%3D%20%74%6F%64%61%79%2E%67%65%74%4D%69%6E%75%74%65%73%28%29%3B%0A%20%20%20%20%76%61%72%20%73%20%3D%20%74%6F%64%61%79%2E%67%65%74%53%65%63%6F%6E%64%73%28%29%3B%0A%20%20%20%20%6D%20%3D%20%63%68%65%63%6B%54%69%6D%65%28%6D%29%3B%0A%20%20%20%20%73%20%3D%20%63%68%65%63%6B%54%69%6D%65%28%73%29%3B%0A%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%74%78%74%27%29%2E%69%6E%6E%65%72%48%54%4D%4C%20%3D%0A%20%20%20%20%68%20%2B%20%22%3A%22%20%2B%20%6D%20%2B%20%22%3A%22%20%2B%20%73%3B%0A%20%20%20%20%76%61%72%20%74%20%3D%20%73%65%74%54%69%6D%65%6F%75%74%28%73%74%61%72%74%54%69%6D%65%2C%20%35%30%30%29%3B%0A%7D%0A%66%75%6E%63%74%69%6F%6E%20%63%68%65%63%6B%54%69%6D%65%28%69%29%20%7B%0A%20%20%20%20%69%66%20%28%69%20%3C%20%31%30%29%20%7B%69%20%3D%20%22%30%22%20%2B%20%69%7D%3B%20%20%2F%2F%20%61%64%64%20%7A%65%72%6F%20%69%6E%20%66%72%6F%6E%74%20%6F%66%20%6E%75%6D%62%65%72%73%20%3C%20%31%30%0A%20%20%20%20%72%65%74%75%72%6E%20%69%3B%0A%7D%0A%3C%2F%73%63%72%69%70%74%3E'));
  </Script>
  <!-- ***** scripts reloj   fin ***** -->
  





  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
  
  
  
 
  </body>
</html><?php /**PATH D:\Harold\Página Web\Oficial 2023\PaginaV3\resources\views///////base.blade.php ENDPATH**/ ?>