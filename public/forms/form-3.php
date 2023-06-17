<!-- form-3.php -->
<?php
    require_once(plugin_dir_path(__FILE__) . '../../includes/constants.php');
  ?>

<link rel="stylesheet" type="text/css"
  href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'fonts/forms/fonts.css'; ?>">
<style>
  #certified-form-3 {
    margin: 0 auto;
    max-width: 700px;
    text-align: center;
    font-family: Muli, sans-serif !important;
  }

  p,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  label,
  strong,
  input[type="text"],
  input[type="number"],
  input[type="file"],
  textarea,
  button,
  body,
  button,
  span.date_label,
  .timeline_items li h3 span,
  input[type="submit"],
  input[type="reset"],
  input[type="button"],
  input[type="text"],
  input[type="password"],
  input[type="tel"],
  input[type="email"],
  textarea,
  select,
  .offer_li .title h3 {
    font-family: Muli, sans-serif !important;
  }

  h3 {
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 0px;
  }

  h4 {
    font-size: 15px;
    color: grey;
  }

  .form-row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
    justify-content: center;
  }

  .column-half {
    flex: 0 0 50%;
    padding: 0 10px;
    box-sizing: border-box;
  }

  .column-quarter {
    flex: 0 0 33%;
    padding: 0 10px;
    box-sizing: border-box;
  }
.caption {
font-weight: 100;
    font-size: 12px;
    text-align: center;
    color: #333333bd;
}
  .column-full {
    width: 100%;
    padding: 0 10px;
    box-sizing: border-box;
  }

  .row-inputs {
    display: flex;
  }

  .row-inputs p {
    text-align: left;
  }

  .add-row-btn {
    width: 50px;
    margin: 0;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-self: flex-end;
    margin-right: 50px;
    margin-bottom: 20px;
  }

  .row-inputs .column {
    flex: 1;
    margin: 0;
  }

  .row-inputs .first-column {
    flex: 3;
  }

  .row-inputs .column p:first-child {
    margin-bottom: 0px;
  }

  .row-inputs .column p {
    padding-right: 10px;
  }

  .column-full-button {
    display: flex;
    justify-content: flex-end;
    padding-right: 35px;
  }


  .form-row.additional-row .row-inputs .action {
    justify-content: center;
    align-items: center;
    display: flex;
    margin-top: -1px;
  }

  button.remove-row-btn {
    margin: 0px;
    padding: 5px;
  }

  label {
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="text"],
  input[type="number"],
  input[type="file"],
  textarea {
    padding: 8px;
    border: 1px solid #ccc !important;
    border-radius: 4px;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    background-color: white !important;
    width: 100% !important;
    max-width: 100% !important;
    min-height: 40px !important;
    box-sizing: border-box;
  }

  input[type="file"]::-webkit-file-upload-button {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #9100AA;
    color: white;
    cursor: pointer;
  }

  button.remove-row-btn,
  button.add-row-btn {
    padding: 10px 20px;
    background-color: #9100AA !important;
    color: #fff !important;
    border: none;
    border-radius: 4px;
    border: 1px solid white;
    cursor: pointer;
  }

  button.remove-row-btn:hover,
  button.add-row-btn:hover {
    color: #54595F !important;
    background-color: #FFFFFF !important;
    border: 1px solid #54595F !important;
  }

  button.add-row-btn {
    margin-right: 0px;
  }

  img.vc_single_image-img.attachment-full {
    border: 2px solid #9100AA;
  }


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

  #progressbar {
    margin: 0 auto;
    overflow: hidden;
    color: lightgrey
  }

  #progressbar .active {
    color: #9100AA
  }

  #progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 20%;
    float: left;
    position: relative;
    font-weight: 600
  }

  #progressbar #template:before {
    font-family: FontAwesome;
    content: "\f1fc"
  }

  #progressbar #logo:before {
    font-family: FontAwesome;
    content: "\f093"
  }

  #progressbar #company_information:before {
    font-family: FontAwesome;
    content: "\f129";

  }

  #progressbar #add_product:before {
    font-family: FontAwesome;
    content: "\2b";
    font-weight: 700;
  }

  #progressbar #conditions:before {
    font-family: FontAwesome;
    content: "\f15b"
  }


  #progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
  }

  #progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 22px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
  }

  #progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
  }

  #progressbar li.active:before,
  #progressbar li.active:after {
    background: #9100AA
  }


  @media only screen and (max-width: 600px) {
    .column-half {
      flex: 0 0 100%;
    }

    .column-quarter {
      flex: 0 0 100%;
    }

  }

  .loader {
    width: 100px;
    display: none;
  }

  #certified-form-3 .action-button {
    width: 100px;
    background-color: #9100AA !important;
    font-weight: bold;
    color: white !important;
    ;
    border: 0 none;
    border-radius: 4px !important;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
  }

  #certified-form-3 .action-button:hover,
  #certified-form-3 .action-button:focus {
    background-color: white;
  }

  #certified-form-3 .action-button-previous {
    width: 100px;
    background-color: #9100AA !important;
    font-weight: bold;
    color: white !important;
    border: 0 none;
    border-radius: 4px !important;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
  }

  #certified-form-3 .action-button-previous:hover,
  #certified-form-3 .action-button-previous:focus {
    background-color: #000000
  }

  .buttonPDF {
    padding: 10px 20px;
    background-color: #9100AA;
    border: 1px solid white;
    color: #fff !important;
    border: none;
    border-radius: 4px;
    margin-left: 7px;
    margin-right: 7px;
    cursor: pointer;
    font-family: Muli, sans-serif !important;
  }

  .buttonPDF:hover {
    color: #54595F !important;
    background-color: #FFFFFF;
    border: 1px solid #54595F;
  }

  #certified-form-3 .loader-wheel {
    animation: spin 1s infinite linear;
    border: 2px solid rgba(30, 30, 30, 0.5);
    border-left: 4px solid #fff;
    border-radius: 50%;
    height: 20px;
    margin-bottom: 10px;
    width: 20px;
    margin: 0 auto;
  }

  #certified-form-3 .loader-text {
    color: #9100AA;
    font-family: system-ui;
  }

  #certified-form-3 .loader-text:after {
    content: 'Loading';
    font-family: Muli, sans-serif !important;
    animation: load 2s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes load {
    0% {
      content: 'Loading';
    }

    33% {
      content: 'Loading.';
    }

    67% {
      content: 'Loading..';
    }

    100% {
      content: 'Loading...';
    }
  }

  .progress {
    height: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    overflow: hidden;
  }

  .progress-bar {
    width: 0;
    height: 100%;
    background-color: #9100AA;
  }
</style>

<form id="certified-form-3" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
  <input type="hidden" name="action" value="certified_form_action">
  <input type="hidden" name="certified_form_action" value="process_form_three">
  <div class="card">
    <ul id="progressbar">
      <li id="template" class="active"> Selecciona diseño de tarjeta de presentación</li>
       <li id="company_information">Personaliza tu diseño</li>
      <li id="logo">Sube tu logo</li>
      <li id="company_information">Información de contacto</li>
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
              <a href="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-1.jpg"
                target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto">
                <img width="1080" height="1528"
                  src="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-1.jpg"
                  class="vc_single_image-img attachment-full" alt=""
                  srcset="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-1.jpg 1080w"
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
            <a href="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-2.jpg"
              target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                width="1080" height="1528"
                src="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-2.jpg"
                class="vc_single_image-img attachment-full" alt=""
                srcset="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-2.jpg 1080w"
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
            <a href="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-3.jpg"
              target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                width="1080" height="1528"
                src="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-3.jpg"
                class="vc_single_image-img attachment-full" alt=""
                srcset="https://animal.pymdesarrollo.com/wp-content/uploads/2023/06/tarjeta-pro-3.jpg 1080w"
                sizes="(max-width: 1080px) 100vw, 1080px"></a>
          </figure>
          </label>
        </div>
      </div>
    </div>
    <br>

    <div class="form-row" style="justify-content: right;">
      <input type="button" name="next" class="next action-button" value="Siguiente" />
    </div>
  </fieldset>
    <fieldset>
    <div class="form-row" style="margin-bottom: 30px;text-align: center">
       <div class="column-full" style="text-align: center;margin-bottom: 20px;">
         <h3>¿No te gusta el fondo del diseño seleccionado?</h3>
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
        <span class="wpcf7-form-control-wrap">
          <input size="40" required type="text" name="name" id="name" maxlength="50"
            placeholder="Ingrese Nombre" required>
        </span>
     
      </div>
      <div class="column-quarter">
        <p><strong>Apellido</strong></p>
        <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="surname" id="surname" maxlength="50"
            placeholder="Ingrese Apellido" required>
        </span>
      </div>
      <div class="column-quarter" style="text-align: left;">
        <p><strong>Cargo</strong></p>
        <span class="wpcf7-form-control-wrap">
           <input size="40" required type="text" name="job_profile" id="job_profile" maxlength="50"
            placeholder="Ingrese Cargo" required>
        </span>
      </div>
         <label class="error-label"></label>
    </div>
      <div class="form-row" style="text-align: left;">
      <div class="column-full">
        <p><strong>Dirección</strong></p>
        <span class="wpcf7-form-control-wrap">
          <input size="40" required type="text" name="address" id="address" maxlength="50"
            placeholder="Ingrese Dirección" required>
        </span>
        <label class="error-label"></label>
      </div>
      <div class="column-quarter">
        <p><strong>Teléfono</strong></p>
        <span class="wpcf7-form-control-wrap">
            <input size="40" required type="text" name="phone" id="phone" maxlength="50"
            placeholder="000 000-000">
        </span>
      </div>
      <div class="column-quarter" style="text-align: left;">
        <p><strong>Email</strong></p>
        <span class="wpcf7-form-control-wrap">
           <input size="40" required type="text" name="email" id="email" maxlength="50"
            placeholder="email@gmail.com">
        </span>
      </div>
        <div class="column-quarter" style="text-align: left;">
        <p><strong>Web site (opcional)</strong></p>
        <span class="wpcf7-form-control-wrap">
           <input size="40" type="text" name="web_site" id="web_site" maxlength="50"
            placeholder="www.example.com">
        </span>
      </div>
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
<div id="html-container"></div>
<div id="error-container"></div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  crossorigin="anonymous" />
<script>
  jQuery.noConflict();
  (function ($) {
    $(document).ready(function () {
      var current_fs, next_fs, previous_fs; // fieldsets
      var opacity;
      var current = 1;
      var steps = $("fieldset").length;
      setProgressBar(current);

      $(".next").click(function () {
        current_fs = $(this).closest('fieldset');
        next_fs = $(this).closest('fieldset').next();
        var input = current_fs.find('input[required]');
        var label = current_fs.find('label.error-label');

        var camposIncompletos = input.filter(function () {
          return $(this).val() === '';
        });

        if (camposIncompletos.length > 0) {
          label.text('Por favor, complete todos los campos requeridos.').attr('style', 'color: red;').show();
          camposIncompletos.addClass('error-input').attr('style', 'border-color: red !important;');
          camposIncompletos.first().focus();
          return;
        } else {
          label.hide();
          input.removeClass('error-input').attr('style', '');
        }

        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        next_fs.show();
        current_fs.animate({ opacity: 0 }, {
          step: function (now) {
            opacity = 1 - now;
            current_fs.css({
              'display': 'none',
              'position': 'relative'
            });
            next_fs.css({ 'opacity': opacity });
          },
          duration: 500
        });
        setProgressBar(++current);
      });

      $(".previous").click(function () {
        current_fs = $(this).closest('fieldset');
        previous_fs = $(this).closest('fieldset').prev();
        var input = current_fs.find('input[required]');
        var label = current_fs.find('label.error-label');

        label.hide();
        input.removeClass('error-input').attr('style', '').focus();
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        previous_fs.show();
        current_fs.animate({ opacity: 0 }, {
          step: function (now) {
            opacity = 1 - now;
            current_fs.css({
              'display': 'none',
              'position': 'relative'
            });
            previous_fs.css({ 'opacity': opacity });
          },
          duration: 500
        });
        setProgressBar(--current);
      });

      function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%")
      }

      $("form").submit(function (event) {
        event.preventDefault();
        var form = event.target;
        var htmlContainer = document.getElementById('html-container');
        var formData = new FormData(form);

        var submitButton = form.querySelector('[type="submit"]');
        var loader = document.querySelector('.loader');

        var current_fs = $(form).closest('form').find('fieldset:last');
        var next_fs = current_fs.next();

        $.ajax({
          type: "POST",
          url: form.action,
          data: formData,
          processData: false,
          contentType: false,
          beforeSend: function () {
            submitButton.style.display = 'none';
            loader.style.display = 'block';
          },
          success: function (response) {
            if (response.success) {
              $("fieldset").not(current_fs).hide();
              current_fs.show();
              current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                  opacity = 1 - now;
                  current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                  });
                  next_fs.css({ 'opacity': opacity });
                },
                duration: 500
              });
              setProgressBar(++current);
              $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

              htmlContainer.innerHTML = `
              <div style="text-align: center;">
                <h2><strong>¡Tu tarjeta se creo exitosamente!</strong></h2>
                <p>Haz clic en el botón de abajo para descargar</p>
                <br>
                <div class="form-row" style="justify-content: center;">
                <a href="#" class="buttonPDF" onclick="location.reload()">Crear nueva</a>
                <a href="${response.download_url}" class="buttonPDF" target="_blank">Descargar Tarjeta</a>
                </div>
              </div>
            `;
            } else {
              htmlContainer.innerHTML = '';
            }
          },
          error: function (xhr, textStatus, error) {
            console.log(textStatus);
            console.log(error);
          },
          complete: function () {
            submitButton.style.display = 'block';
            loader.style.display = 'none';
          }
        });
      });
    });
  })(jQuery);
</script>