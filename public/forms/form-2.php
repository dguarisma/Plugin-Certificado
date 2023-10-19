<!-- form-2.php -->
<?php
    require_once(plugin_dir_path(__FILE__) . '../../includes/constants.php');
  ?>

<link rel="stylesheet" type="text/css"
  href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'fonts/forms/fonts.css'; ?>">
<style>
  #certified-form-2 fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
  }

  #certified-form-2 fieldset:not(:first-of-type) {
    display: none;
  }

  #certified-form-2 .card {
    z-index: 0;
    border: none;
    position: relative;
    margin-bottom: 40px;
  }

  #certified-form-2 .steps {
    font-size: 15px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
  }

  #certified-form-2 .fieldlabels {
    color: gray;
    text-align: left
  }

  #certified-form-2 ul li {
    width: 14.2% !important;
  }



  @media only screen and (max-width: 600px) {
    .column-half {
      flex: 0 0 100%;
    }

    .column-quarter {
      flex: 0 0 100%;
    }

  }
</style>

<form id="certified-form-2" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
  <input type="hidden" name="action" value="certified_form_action">
  <input type="hidden" name="certified_form_action" value="process_form_two">
  <input type="hidden" name="previews_forms" value="process_form_two">
  <div class="card">
    <ul id="progressbar">
      <li id="template" class="active"> Escoge tu plantilla</li>
      <li id="logo">Sube tu logo</li>
      <li id="company_information">Información de tu empresa</li>
      <li id="services">Servicios</li>
      <li id="contact_information">Información Contacto</li>
      <li id="previews_option">Ver diseño</li>
      <li id="confirm">Confirmación</li>
    </ul>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
  <fieldset>
    <div class="form-row">
      <h3 style="margin: 0 auto;">Marca la casilla del diseño que quieres utilizar</h3>
    </div>
    <div class="form-row">
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio" value="1" checked="checked"
          onclick="urlDownload('<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-flyer-1.jpg'; ?>')"
          > Diseño 1
            <figure class="wpb_wrapper vc_figure">
              <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-1.jpg'; ?>"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto">
                <img width="1080" height="1528"
                  src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-1.jpg'; ?>"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-1.jpg'; ?> 1080w"
                  sizes="(max-width: 1080px) 100vw, 1080px"></a>
            </figure>
          </label>
        </div>
      </div>
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio" value="2"
          onclick="urlDownload('<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-flyer-2.jpg'; ?>')"
          > Diseño 2
            <figure class="wpb_wrapper vc_figure">
              <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-2.jpg'; ?>"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                  width="1080" height="1528"
                  src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-2.jpg'; ?>"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-2.jpg'; ?>"
                  sizes="(max-width: 1080px) 100vw, 1080px"></a>
            </figure>
          </label>
        </div>
      </div>
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio" value="3"
          onclick="urlDownload('<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-flyer-3.jpg'; ?>')"
          > Diseño 3
            <figure class="wpb_wrapper vc_figure">
              <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-3.jpg'; ?>"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                  width="1080" height="1528"
                  src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-3.jpg'; ?>"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/flyer-3.jpg'; ?>"
                  sizes="(max-width: 1080px) 100vw, 1080px"></a>
            </figure>
          </label>
        </div>
      </div>
    </div>
    <br>
    <div class="form-row">
      <h4 style="display:none">Si prefieres utilizar un diseño personalizado, descarga <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-flyer-1.jpg'; ?>" download id="downloadTemplate">AQUÍ</a>  la guía para que hagas
        tu propio diseño con estas medidas 724px * 1024px.
        <br>
        <p> Puedes pedirle a un amigo diseñador que te ayude a generar esta imagen para el fondo de tu plantilla.</p>
      </h4>
      <br>
      <div class="column-full" style="text-align: left;">
        <p><strong>Subir imagen de fondo</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" type="file" name="background" id="background-upload" accept="image/*">
          </span>
        </p>
      </div>
    </div>
    <div class="form-row" style="justify-content: space-between;">
      <button type="button" id="back" class="action-button"
        onclick="location.reload();localStorage.removeItem('currentForm')">Regresar al inicio</button>
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
    <div class="form-row" style="margin-bottom: 30px;text-align: center">
      <div class="column-half" style="text-align: left;">
        <h5><strong>Sube el logo de tu empresa con medidas máximo de 250px * 250px</strong></h5>
        <p>Te recomendamos que utilices formato PNG y con fondo transparente.</p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" required type="file" name="image" id="image-upload" accept="image/*">
                 <label class="error-label"></label>
          </span>
        </p>
        <p id="upload-message"></p>
   
      </div>
    </div>
    <div class="form-row" style="justify-content: right;">
      <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
    <div class="form-row" style="text-align: left;">
      <div class="column-full">
        <p><strong>Foto de Perfil</strong></p>
        <p><span class="wpcf7-form-control-wrap">
            <input size="40" type="file" name="photo" id="image-photo" accept="image/*">
          </span></p>
      </div>
      <div class="column-full">
        <p><strong>Nombre de tu empresa</strong> <span style="color:red">*</span></p>
        <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="business_name" id="business_name" maxlength="50"
              placeholder="Ingrese Nombre de tu empresa">
                    <label class="error-label"></label>
          </span></p>
  
      </div>
      <div class="column-full">
        <p><strong> Sobre nosotros (Máximo 200 caracteres)</strong> <span style="color:red">*</span></p>
        <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="about_us" id="about_us" maxlength="50"
              placeholder="Ingrese Sobre nosotros (Máximo 200 caracteres)" style="margin-bottom: 0px;">
            <small>Agrega una breve descripción de tu empresa o sitio web en este campo. Por favor, asegúrate de que no
              supere los 200 caracteres.</small>
                   <label class="error-label"></label>
          </span></p>
   
      </div>

      <div class="column-full" style="text-align: left;">
        <p><strong>Escribe 3 frases informando por qué un cliente debe elegirte para hacer su trabajo.
          </strong> <span style="color:red">*</span></p>

        <p><span class="wpcf7-form-control-wrap">
            <textarea cols="40" rows="3" maxlength="200" name="why_choose_us" id="why_choose_us"
              placeholder="Escribe 3 frases informando por qué un cliente debe elegirte para hacer su trabajo." style="margin: 0px;"></textarea>
                      <small>Te recomendamos escribir frases cortas y una por renglón</small>
              </span>
                   <label class="error-label"></label>
              </p>
      </div>
    </div>

    <div class="form-row" style="justify-content: right;">
      <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
    <div class="form-row" style="justify-content: center;text-align: left;">
      <h4>Escribe los 4 servicios importante de que realiza tu empresa</h4>
      <div class="column-half">
        <p><strong>Servicio 1</strong> <span style="color:red">*</span></p>
        <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="service_1" id="service_1" maxlength="50"
              placeholder="Ingrese Servicio 1">
                <label class="error-label"></label>
          </span></p>
      
      </div>
      <div class="column-half">
        <p><strong>Servicio 2</strong> <span style="color:red">*</span></p>
        <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="service_2" id="service_2" maxlength="50"
              placeholder="Ingrese Servicio 2">
               <label class="error-label"></label>
          </span></p>
       
      </div>
      <div class="column-half">
        <p><strong>Servicio 3</strong> <span style="color:red">*</span></p>
        <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="service_3" id="service_3" maxlength="50"
              placeholder="Ingrese Servicio 3">
                   <label class="error-label"></label>
          </span></p>
   
      </div>
      <div class="column-half">
        <p><strong>Servicio 4</strong> <span style="color:red">*</span></p>
        <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="service_3" id="service_3" maxlength="50"
              placeholder="Ingrese Servicio 4">
                 <label class="error-label"></label>
          </span></p>
     
      </div>
    </div>
    <div class="form-row" style="justify-content: right;">
      <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
      <div class="form-row" style="justify-content: center;text-align: left;">
        <div class="column-half">
          <p><strong>Correo electrónico</strong> <span style="color:red">*</span></p>
          <p> <span class="wpcf7-form-control-wrap">
              <input size="40" required type="text" name="email" id="email" maxlength="50" placeholder="Ingrese Correo electrónico">
               <label class="error-label"></label>
            </span></p>
         
        </div>
        <div class="column-half">
          <p><strong>Teléfono (móvil o fijo)</strong> <span style="color:red">*</span></p>
          <p> <span class="wpcf7-form-control-wrap">
              <input size="40" required type="text" name="phone" id="phone" maxlength="50"
                placeholder="Ingrese Teléfono (móvil o fijo)">
                     <label class="error-label"></label>
            </span></p>
     
        </div>
        <div class="column-half">
          <p><strong>Tu Dirección</strong> <span style="color:red">*</span></p>
          <p> <span class="wpcf7-form-control-wrap">
              <input size="40" required type="text" name="address" id="address" maxlength="50" placeholder="Tu Dirección">
                <label class="error-label"></label>
            </span></p>
    
        </div>
        <div class="column-half">
          <p><strong>Página web de tu empresa</strong></p>
          <p> <span class="wpcf7-form-control-wrap">
              <input size="40" type="text" name="web_site" id="web_site" maxlength="50"
                placeholder="Ingrese Web Site">
            </span></p>
        </div>
      </div>
      <div class="form-row" style="justify-content: right;">
        <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
        <input type="button" name="next" class="next action-button previews" value="Siguiente" />
      </div>
    </fieldset>
    <fieldset>
      <div class="column-full">
        <div id="html-container-previews"></div>
      </div>
      <div class="form-row">
        <div class="column-full" style="text-align: center;">
          <div class="form-row" style="justify-content: right;">
            <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
            <input type="submit" value="Siguiente" class="action-button">
            <div class="loader">
              <div class="loader-wheel"></div>
              <div class="loader-text"></div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
</form>
<div id="error-container"></div>