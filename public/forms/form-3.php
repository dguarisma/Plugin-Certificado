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
       <li id="customize_design">Personaliza tu diseño</li>
      <li id="logo">Sube tu logo</li>
      <li id="company_information">Información de contacto</li>
      <li id="previews">Ver diseño</li>
      <li id="confirm">Confirmación</li>
    </ul>
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
  <fieldset>
    <div class="form-row">
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio"
              value="1" checked="checked"> Diseño 1
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
              value="2"> Diseño 2
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
              value="3"> Diseño 3
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
    <br/>
    <div class="form-row" style="justify-content: right;">
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
    <div class="form-row" style="margin-bottom: 30px;text-align: center">
       <div class="column-full" style="text-align: center;margin-bottom: 20px;">
         <h3  style="margin-bottom: 0px;">¿No te gusta el fondo del diseño seleccionado?</h3>
             <p class="caption">Sube tu diseño con las siguiente medidas 500px * 700px</p>   
      </div>
      <div class="column-half" style="text-align: center;">
        <p><strong>Frente</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" type="file" name="background_front" id="background_front" accept="image/*">
          </span>
        </p>
        <label class="error-label"></label>
      </div>
      <div class="column-half" style="text-align: center;">
        <p><strong>Reverso</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" type="file" name="background_back" id="background_back" accept="image/*">
          </span>
        </p>
        <label class="error-label"></label>
      </div>
    </div>
    <div class="form-row" style="justify-content: right;">
      <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  
  <fieldset>
    <div class="form-row" style="margin-bottom: 30px;text-align: center">
      <div class="column-full" style="text-align: left;">
        <p><strong>Subir Logo</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" type="file" name="logo" id="image-upload" accept="image/*">
          </span>
        </p>
        <label class="error-label"></label>
      </div>
        <div class="column-full" style="text-align: left;">
        <p><strong>Eslogan de la Empresa</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
           <input size="40" type="text" name="slogan" id="slogan" maxlength="50"
            placeholder="Ingrese el Eslogan de tu empresa">
          </span>
        </p>
        <label class="error-label"></label>
      </div>
    </div>
    <div class="form-row" style="justify-content: right;">
      <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
    <div class="form-row" style="text-align: left;margin-bottom: 0px;">
      <div class="column-quarter">
        <p><strong>Nombre</strong></p>
        <p><span class="wpcf7-form-control-wrap">
          <input size="40" required type="text" name="name" id="name" maxlength="50"
            placeholder="Ingrese Nombre" required>
        </span></p>
     
      </div>
      <div class="column-quarter">
        <p><strong>Apellido</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="surname" id="surname" maxlength="50"
            placeholder="Ingrese Apellido" required>
        </span></p>
      </div>
      <div class="column-quarter" style="text-align: left;">
        <p><strong>Cargo</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
           <input size="40" required type="text" name="job_profile" id="job_profile" maxlength="50"
            placeholder="Ingrese Cargo" required>
        </span></p>
      </div>
         <label class="error-label"></label>
    </div>
    <div class="form-row" style="text-align: left;">
      <div class="column-full">
        <p><strong>Dirección</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
          <input size="40" required type="text" name="address" id="address" maxlength="50"
            placeholder="Ingrese Dirección" required>
        </span></p>
        <label class="error-label"></label>
      </div>
      <div class="column-quarter">
        <p><strong>Teléfono</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="phone" id="phone" maxlength="50"
            placeholder="000 000-000">
        </span></p>
      </div>
      <div class="column-quarter" style="text-align: left;">
        <p><strong>Email</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
           <input size="40" required type="text" name="email" id="email" maxlength="50"
            placeholder="email@gmail.com">
        </span></p>
      </div>
        <div class="column-quarter" style="text-align: left;">
        <p><strong>Web site (opcional)</strong></p>
        <p><span class="wpcf7-form-control-wrap">
           <input size="40" type="text" name="web_site" id="web_site" maxlength="50"
            placeholder="www.example.com">
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
          <input type="submit" value="Enviar" class="action-button">
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
