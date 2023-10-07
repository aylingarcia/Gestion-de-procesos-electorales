<?php $__env->startSection('active'); ?>
<li class="active">Diplomados</li>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Maestrias</h3>
          
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Todos</a>
        </li>
        <li>
          <a href="#!" data-filter=".ofer">Ofertados</a>
        </li>
        <li>
          <a href="#!" data-filter=".curs">En Curso </a>
        </li>
        <li>
          <a href="#!" data-filter=".fin">Finalizados</a>
        </li>
      </ul>
      <div class="row trending-box">

        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 ofer">
          <div class="item">
            <div class="thumb">
              <a href="petroquimica"><img src="assets/images/1.jpg" alt=""></a>
              <span class="price"><em></em>Bs 21500</span>
            </div>
            <div class="down-content">
              <span class="category">Maestría</span>
              <h4>Microbiologia</h4>
              <a href="petroquimica"><i class="fa-regular fa-eye fa-xl"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 fin">
          <div class="item">
            <div class="thumb">
              <a href="petroquimica"><img src="assets/images/2.png" alt=""></a>
              <span class="price"><em></em>Bs 5000</span>
            </div>
            <div class="down-content">
              <span class="category">Solo Profesionales</span>
              <h4>Gestion de la Seguridad y Prevensión de Riesgos Laborales</h4>
              <a href="petroquimica"><i class="fa-regular fa-eye fa-xl"></i></a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 curs">
          <div class="item">
            <div class="thumb">
              <a href="petroquimica"><img src="assets/images/3.png" alt=""></a>
              <span class="price"><em></em>Bs 5500</span>
            </div>
            <div class="down-content">
              <span class="category">Doble Titulación</span>
              <h4>Infraestructura Vial</h4>
              <a href="petroquimica"><i class="fa-regular fa-eye fa-xl"></i></a>
            </div>
          </div>
        </div>

      </div> 

        

      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#"> &lt; </a></li>
            <li><a class="is_active" href="#">1</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>


    
    </div>
  </div>

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Harold\Página Web\Oficial 2023\PaginaV construccion\resources\views/maestrias.blade.php ENDPATH**/ ?>