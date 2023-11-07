<!-- form-3.php -->
<?php
    require_once(plugin_dir_path(__FILE__) . '../../includes/constants.php');
  ?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css"
  href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'fonts/forms/fonts.css'; ?>">
<style>

  #certified-form-3 fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
  }

  fieldset:not(:first-of-type) {
    display: none;
  }
  #certified-form-3 .column-full{
       width:100% !important;
 }
   #certified-form-3 .form-row{
       width:100% !important;
 }
  .card {
    z-index: 0;
    border: none;
    position: relative;
    margin-bottom: 40px;
  }

  .steps {
    font-size: 15px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
  }

  .fieldlabels {
    color: gray;
    text-align: left
  }
  #certified-form-3 ul li{
    width: 20%;
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

<form id="certified-form-3" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
  <input type="hidden" name="action" value="certified_form_action">
  <input type="hidden" name="certified_form_action" value="process_form_three">
  <input type="hidden" name="previews_forms" value="process_form_three">
  <div class="card">
    <ul id="progressbar">
      <li id="template" class="active"> Selecciona diseño de tarjeta de presentación</li>
      <li id="logo">Sube tu logo</li>
      <li id="company_information">Información de contacto</li>
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
          <label><input type="radio" name="optradio" id="optradio"
              value="1" checked="checked" 
              onclick="urlDownload('<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-tar-1.jpg'; ?>')"
              > Diseño 1
            <figure class="wpb_wrapper vc_figure">
              <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-1.jpg'; ?>"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto">
                <img width="1080" height="1528"
                  src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-1.jpg'; ?>"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-1.jpg'; ?> 1080w"
                  sizes="(max-width: 1080px) 100vw, 1080px"></a>
            </figure>
          </label>
        </div>
      </div>
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio"
              value="2"
              onclick="urlDownload('<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-tar-2.jpg'; ?>')"
              > Diseño 2
              <figure class="wpb_wrapper vc_figure">
            <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-2.jpg'; ?>"
              target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                width="1080" height="1528"
                src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-2.jpg'; ?>"
                class="vc_single_image-img attachment-full" alt=""
                srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-2.jpg'; ?> 1080w"
                sizes="(max-width: 1080px) 100vw, 1080px"></a>
          </figure>
          </label>
        </div>
      </div>
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio"
              value="3"
              onclick="urlDownload('<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-tar-3.jpg'; ?>')"
              > Diseño 3
             <figure class="wpb_wrapper vc_figure">
            <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-3.jpg'; ?>"
              target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                width="1080" height="1528"
                src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-3.jpg'; ?>"
                class="vc_single_image-img attachment-full" alt=""
                srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/businesscard-3.jpg'; ?> 1080w"
                sizes="(max-width: 1080px) 100vw, 1080px"></a>
          </figure>
          </label>
        </div>
      </div>
    </div>
    <div class="form-row" style="margin-bottom: 30px;text-align: center; width: 100%">
       <div class="column-full" style="text-align: center;margin-bottom: 20px;display:none">
         <h4  style="margin-bottom: 0px;display:none">
         Si prefieres utilizar un diseño personalizado, descarga <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/template/Ins-tar-1.jpg'; ?>" download id="downloadTemplate">AQUÍ</a> la guía para que hagas tu propio diseño con estas medidas 500px * 700px. 
        </h4>
             <p class="caption">Puedes pedirle a un amigo diseñador que te ayude a generar esta imagen para el fondo de tu tarjeta.</p>   
      </div>
      <div class="column-half" style="text-align: center;display:none">
        <p><strong>Frente</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" type="file" name="background_front" id="background_front" accept="image/*">
          </span>
        </p>
        <label class="error-label"></label>
      </div>
      <div class="column-half" style="text-align: center;display:none">
        <p><strong>Reverso</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" type="file" name="background_back" id="background_back" accept="image/*">
          </span>
        </p>
        <label class="error-label"></label>
      </div>
    </div>
    <br/>
    <div class="form-row" style="justify-content: space-between;">
       <button type="button" id="back"  onclick="location.reload();localStorage.removeItem('currentForm')">Regresar al inicio</button>
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  
  <fieldset>
    <div class="form-row" style="margin-bottom: 30px;text-align: center;width: 100%">
      <div class="column-full" style="text-align: left;width: 100%">
          <h5><strong>Sube el logo de tu empresa con medidas máximo de 250px * 250px</strong></h5>
        <p>Te recomendamos que utilices con fondo transparente o fondo blanco.<span style="color:red">*</span></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" required type="file" name="logo" id="image-upload" accept="image/*">
            <label class="error-label"></label>
          </span>
        </p>

      </div>
        <div class="column-full" style="text-align: left;width: 100%">
        <p><strong>¿Tu empresa tiene un eslogan o frase que la identifique? </strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
           <input size="40" type="text" name="slogan" id="slogan" 
          maxlength="10"
            placeholder="Ingrese el Eslogan de tu empresa">
          </span>
        </p>
      </div>
    </div>
    <div class="form-row" style="justify-content: right;width: 100%">
      <input type="button" name="previous" class="previous action-button-previous" value="Anterior" style="margin: 0; margin-right: 20px;"  />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
    <div class="form-row" style="margin-bottom: 30px;text-align: left;width: 100%">
      <h5>Tu información de contacto</h5x>
    </div>

    <div class="form-row" style="text-align: left;margin-bottom: 0px;width: 100%">
      <div class="column-quarter"  style="padding-left: 0px;">
        <p><strong>Nombres</strong> <span style="color:red">*</span></p>
        <p><span class="wpcf7-form-control-wrap">
          <input size="40" required type="text" name="name" id="name" 
            placeholder="Ingrese Nombres"  maxlength="20" required>
            <label class="error-label"></label>
        </span></p>
     
      </div>
      <div class="column-quarter">
        <p><strong>Apellidos</strong> <span style="color:red">*</span></p>
       <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="surname" id="surname" 
            placeholder="Ingrese Apellidos"  maxlength="20" required>
            <label class="error-label"></label>
        </span></p>
      </div>
      <div class="column-quarter"  style="text-align: left;padding-left: 0px;">
        <p><strong>Cargo o profesión</strong> <span style="color:red">*</span></p>
       <p> <span class="wpcf7-form-control-wrap">
           <input size="40" required type="text" name="job_profile" id="job_profile" 
            placeholder="Ingrese Cargo o profesión"   maxlength="20" required>
            <label class="error-label"></label>
        </span></p>
      </div>
    </div>
    <div class="form-row" style="text-align: left;width: 100%">
      <div class="column-full" style="width: 100%">
        <p><strong>Tu dirección</strong> <span style="color:red">*</span></p>
       <p> <span class="wpcf7-form-control-wrap">
          <input size="30" required type="text" name="address" id="address" 
            placeholder="Ingrese Tu dirección"  maxlength="30" required>
            <label class="error-label"></label>
        </span></p>
       
      </div>
      <div class="column-quarter" style="padding-left: 0px;">
        <p><strong>Teléfono</strong> <span style="color:red">*</span></p>
       <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="phone" id="phone" 
            placeholder="000 000-000"  maxlength="16">
            <label class="error-label"></label>
        </span></p>
      </div>
      <div class="column-quarter" style="text-align: left;">
        <p><strong>Correo electrónico</strong> <span style="color:red">*</span></p>
       <p> <span class="wpcf7-form-control-wrap">
           <input size="40" required type="text" name="email" id="email" 
            placeholder="email@gmail.com"  maxlength="20">
            <label class="error-label"></label>
        </span></p>
      </div>
        <div class="column-quarter" style="text-align: left;padding-left: 0px;" >
        <p><strong>Página web de tu empresa</strong></p>
        <p><span class="wpcf7-form-control-wrap">
           <input size="40" type="text" name="web_site" id="web_site" 
            placeholder="www.example.com" maxlength="20">
        </span></p>
      </div>
    </div>
    <div class="form-row" style="justify-content: right;width: 100%">
      <input type="button" name="previous" class="previous action-button-previous" value="Anterior" style="margin: 0; margin-right: 20px;" />
      <input type="button" name="next" class="next action-button previews" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
   <div class="column-full" style="width: 100%">
        <div id="html-container-previews"></div>
   </div>
    <div class="form-row" style="width: 100%">
      <div class="column-full" style="text-align: center;width: 100%">
        <div class="form-row" style="justify-content: right;width: 100%">
          <input type="button" name="previous" class="previous action-button-previous" value="Anterior" style="margin: 0; margin-right: 20px;"  />
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
