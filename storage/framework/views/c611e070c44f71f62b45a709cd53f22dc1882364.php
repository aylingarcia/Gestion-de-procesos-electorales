<?php $__env->startSection('active'); ?>
<li class="active">Diplomados</li>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contactos</h3>
          
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contactanos</h6>
              <h2>En que te podemos ayudar?</h2>
            </div>
            <p>Para contactarte con nosotros llamanos, envianos un correo electronico , un mensaje al whatsapp o visita nuestras redes sociales </p>
            
            <ul>
              <li><span>Dirección</span><a href="https://goo.gl/maps/1HrtXtAGbGK8exa2A">Campus Central UMSS Edificio  MEMI, 1º Piso.</a></li>
              <li><span>Teléfono</span><a href="tel:44543037">(591) 4 4543037</a></li>
              <li><span>Whatsapp</span><a href="https://api.whatsapp.com/send?phone=59144116122">591 4 4543037</a></li>
              <li><span>Email</span> <a href="mailto:posgrado@fcyt.umss.edu.bo">posgrado@fcyt.umss.edu.bo</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d596.763120687664!2d-66.14747906480532!3d-17.393259020317586!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e373fece70c83f%3A0xf287db8e406ec314!2sPosgrado%20de%20la%20Facultad%20de%20Ciencias%20y%20Tecnolog%C3%ADa-UMSS!5e1!3m2!1ses!2sbo!4v1692795900227!5m2!1ses!2sbo" width="100%" height="325px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Nombres" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Apellidos" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Correo Electrónico" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Tema" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Escribe tu mensaje aca ....."></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Enviar</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Harold\Página Web\Oficial 2023\PaginaV3\resources\views/contactos.blade.php ENDPATH**/ ?>