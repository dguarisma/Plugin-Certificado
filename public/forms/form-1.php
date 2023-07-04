<!-- form-1.php -->
<?php
    require_once(plugin_dir_path(__FILE__) . '../../includes/constants.php');
  ?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css"
  href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'fonts/forms/fonts.css'; ?>">
<style>

  #certified-form-1 fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
  }

  #certified-form-1 fieldset:not(:first-of-type) {
    display: none;
  }

  #certified-form-1 .card {
    z-index: 0;
    border: none;
    position: relative;
    margin-bottom: 40px;
  }

  #certified-form-1 .steps {
    font-size: 15px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
  }

  #certified-form-1 .fieldlabels {
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

<form id="certified-form-1" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
  <input type="hidden" name="action" value="certified_form_action">
  <input type="hidden" name="certified_form_action" value="process_form_one">
  <input type="hidden" name="previews_forms" value="process_form_one">
  <div class="card">
    <ul id="progressbar">
      <li id="template" class="active"> Escoge tu plantilla</li>
      <li id="logo">Sube tu logo</li>
      <li id="company_information">Información de la Empresa</li>
      <li id="conditions"> Condiciones de la cotización</li>
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
              value="<?php  echo $GLOBALS['ASSEST_QUOTE_FORMAT']['design1']; ?>" checked="checked"> Diseño 1
            <figure class="wpb_wrapper vc_figure">
              <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))  . 'assets/img/budget-1.jpg'; ?>"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto">
                <img width="1080" height="1528"
                  src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/budget-1.jpg'; ?>"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'assets/img/budget-1.jpg'; ?> 1080w"
                  sizes="(max-width: 1080px) 100vw, 1080px"></a>
            </figure>
          </label>
        </div>
      </div>
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio"
              value="<?php  echo $GLOBALS['ASSEST_QUOTE_FORMAT']['design2']; ?>"> Diseño 2
            <figure class="wpb_wrapper vc_figure">
              <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/img/budget-2.jpg'; ?>"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                  width="1080" height="1528"
                  src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/img/budget-2.jpg'; ?>"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/img/budget-2.jpg'; ?> 1080w"
                  sizes="(max-width: 1080px) 100vw, 1080px"></a>
            </figure>
          </label>
        </div>
      </div>
      <div class="column-quarter">
        <div class="radio" style="text-align: center;color: #071041;">
          <label><input type="radio" name="optradio" id="optradio"
              value="<?php  echo $GLOBALS['ASSEST_QUOTE_FORMAT']['design3']; ?>"> Diseño 3
            <figure class="wpb_wrapper vc_figure">
              <a href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/img/budget-3.jpg'; ?>"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                  width="1080" height="1528"
                  src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/img/budget-3.jpg'; ?>"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)))   . 'assets/img/budget-3.jpg'; ?> 1080w"
                  sizes="(max-width: 1080px) 100vw, 1080px"></a>
            </figure>
          </label>
        </div>
      </div>
    </div>
    <br>
    <div class="form-row">
      <h4>¿No te gusta ninguno de estos 3 diseños? Sube tu imagen con estas medidas 724px * 1024px
        <br> ¿No sabes como hacerlo? <br> Puedes pedirle a tu amigo diseñador que te ayude a generar esta imagen
        <br>
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
    <div class="form-row" style="justify-content: right;">
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
  <fieldset>
    <div class="form-row" style="margin-bottom: 30px;text-align: center">
      <div class="column-half" style="text-align: left;">
        <p><strong>Subir Logo</strong></p>
        <p>
          <span class="wpcf7-form-control-wrap">
            <input size="40" required type="file" name="image" id="image-upload" accept="image/*">
          </span>
        </p>
        <p id="upload-message"></p>
        <label class="error-label"></label>
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
        <p><strong>Nombre de tu empresa</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
          <input size="40" required type="text" name="business_name" id="business_name" maxlength="50"
            placeholder="Ingrese Nombre de tu empresa" required>
        </span></p>
        <label class="error-label"></label>
      </div>
      <div class="column-full">
        <p><strong>¿Como le gustaría que realicen el pago de esta cotización?</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
          <textarea cols="40" rows="3" name="payment_information" id="payment_information"
            placeholder="Puede realizar el pago en efectivo al momento de la obra, Nequi, Bancolombia, Davoiplata"
            maxlength="200"></textarea>
        </span></p>
      </div>
      <div class="column-full" style="text-align: left;">
        <p><strong>Escribe el nombre de tu cliente</strong></p>
       <p> <span class="wpcf7-form-control-wrap">
          <textarea cols="40" rows="3" maxlength="200" name="invoice_to" id="invoice_to"
            placeholder="Ingrese nombre de tu cliente"></textarea>
        </span></p>
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
        <p><strong>Condiciones de la propuesta</strong></p>
        <p><span class="wpcf7-form-control-wrap" data-name="terms">
            <textarea cols="70" rows="3" name="terms" id="terms" maxlength="250"></textarea>
          </span>
          <br>
        </p>
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
