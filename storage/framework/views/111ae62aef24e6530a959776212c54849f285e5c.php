<?php $__env->startSection('content'); ?>

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Diplomado</h2>
          <span class="breadcrumb"><a href="/">Inicio</a>  >  <a href="diplomados">Diplomados</a> </span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/1.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4> <?php echo $__env->yieldContent('titulo'); ?></h4>
          <span class="price">  BS <?php echo $__env->yieldContent('precio'); ?> </span>
          
          <ul>
            <li><span>Grado Académico:</span> <?php echo $__env->yieldContent('gradoaca'); ?>Diplomado</li>
            <li><span>Costo:</span><?php echo $__env->yieldContent('costo'); ?></li>
            <li><span>Descuento:</span><?php echo $__env->yieldContent('descuento'); ?></li>
            <li><span>Modalidad:</span><?php echo $__env->yieldContent('modalidad'); ?></li>
            <li><span>Fecha de Inicio:</span><?php echo $__env->yieldContent('fecha'); ?></li>
          </ul> 
          <br>
          <br>


          
          <form id="qty" action="#">
            <button type="submit"><i class="fa fa-shopping-bag"></i> Descarga Compromiso</button>
          </form><br><br>
          
          <form id="qty" action="#">
            <button type="submit"><i class="fa fa-shopping-bag"></i> Descarga Compromiso</button>
          </form>
          
        </div>
        
      </div>
    </div>
  </div>
  <!-- ***** separador  inicio ***** -->
  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>
 <!--***** separador fin ***** -->
  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Descripción</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Requisitos</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <ul><?php echo $__env->yieldContent('descripcion'); ?>

                </ul> 


                </div>
                <div class="tab-pane fade lista2 single-product2 " id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <ul> <?php echo $__env->yieldContent('requisitos'); ?>
                    
                </ul> 
                
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** separador  inicio ***** -->
  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>
 <!--***** separador fin ***** -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Harold\Página Web\Oficial 2023\PaginaV construccion\resources\views/programas/programasbase.blade.php ENDPATH**/ ?>