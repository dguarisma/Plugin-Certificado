<!-- form-1.php -->
<?php
  require_once(plugin_dir_path(__FILE__) . '../../includes/constants.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo esc_url(plugin_dir_url(dirname(__FILE__))) . 'fonts/forms/fonts.css'; ?>">
<style>
  #certified-form-1 {
    margin: 0 auto;
    max-width: 600px;
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
    ;
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

  .button-stroke input[type="submit"], input[type="submit"]{
    padding: 10px 20px;
    background-color: #9100AA  !important;
    border: 1px solid white  !important;
    color: #fff  !important;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 30%;
    margin: 0 auto;
  }
 .button-stroke input[type="submit"]:hover,
 input[type="submit"]:hover {
    color: #54595F !important;
    background-color: #FFFFFF !important;
    border: 1px solid #54595F !important;
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

  /* Estilos para hacer el formulario responsive */
  @media only screen and (max-width: 600px) {
    .column-half {
      flex: 0 0 100%;
    }

    .column-quarter {
      flex: 0 0 100%;
    }

  }

  .loader {
    width: 70px;
    margin: 0 auto;
    display: none;
  }

  .buttonPDF {
    padding: 10px 20px;
    background-color: #9100AA;
    border: 1px solid white;
    color: #fff !important;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-family: Muli, sans-serif !important;
  }
  .buttonPDF:hover {
    color: #54595F;
    background-color: #FFFFFF;
    border-color: #54595F;
 }
  #certified-form-1 .loader-wheel {
    animation: spin 1s infinite linear;
    border: 2px solid rgba(30, 30, 30, 0.5);
    border-left: 4px solid #fff;
    border-radius: 50%;
    height: 20px;
    margin-bottom: 10px;
    width: 20px;
    margin: 0 auto;
  }

  #certified-form-1 .loader-text {
    color: #4CAF50;
    font-family: system-ui;
  }

  #certified-form-1 .loader-text:after {
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
</style>

<form id="certified-form-1" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
  <input type="hidden" name="action" value="certified_form_action">
  <input type="hidden" name="certified_form_action" value="process_form">
  <div class="form-row">
    <div class="column-quarter">
      <div class="radio" style="text-align: center;color: #071041;">
        <label><input type="radio" name="optradio" id="optradio"
            value="<?php  echo $GLOBALS['ASSEST_QUOTE_FORMAT']['design1']; ?>" checked="checked"> Diseño 1
          <figure class="wpb_wrapper vc_figure">
            <a href="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1-724x1024.jpg"
              target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto">
              <img width="1080" height="1528"
                src="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1.jpg"
                class="vc_single_image-img attachment-full" alt=""
                srcset="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1.jpg 1080w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1-212x300.jpg 212w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1-724x1024.jpg 724w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1-768x1087.jpg 768w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1-103x146.jpg 103w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1-35x50.jpg 35w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-1-53x75.jpg 53w"
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
            <a href="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2-724x1024.jpg"
              target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                width="1080" height="1528"
                src="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2.jpg"
                class="vc_single_image-img attachment-full" alt=""
                srcset="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2.jpg 1080w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2-212x300.jpg 212w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2-724x1024.jpg 724w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2-768x1087.jpg 768w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2-103x146.jpg 103w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2-35x50.jpg 35w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-2-53x75.jpg 53w"
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
            <a href="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3-724x1024.jpg"
              target="_self" class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey prettyphoto"><img
                width="1080" height="1528"
                src="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3.jpg"
                class="vc_single_image-img attachment-full" alt=""
                srcset="https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3.jpg 1080w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3-212x300.jpg 212w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3-724x1024.jpg 724w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3-768x1087.jpg 768w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3-103x146.jpg 103w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3-35x50.jpg 35w, https://www.certificadoweb.com/wp-content/uploads/2023/05/cotizacion-pro-3-53x75.jpg 53w"
                sizes="(max-width: 1080px) 100vw, 1080px"></a>
          </figure>
        </label>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="column-full">
      <p><strong>Subir imagen de fondo</strong></p>
      <p>
        <span class="wpcf7-form-control-wrap">
          <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
            aria-invalid="false" type="file" name="background" id="background-upload" accept="image/*">
        </span>
      </p>
    </div>
  </div>
  <div class="form-row" style="margin-bottom: 30px;text-align: center">
    <div class="column-full">
      <h5> Personaliza tu cotización con tu logo y firma autorizada</h5>
    </div>
    <div class="column-half">
      <p><strong>Subir Logo</strong></p>
      <p>
        <span class="wpcf7-form-control-wrap">
          <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
            aria-invalid="true" type="file" name="image" id="image-upload" accept="image/*">
        </span>
      </p>
    </div>

    <div class="column-half">
      <p><strong>Subir imagen de firma</strong></p>
      <p>
        <span class="wpcf7-form-control-wrap">
          <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
            aria-invalid="true" type="file" name="firma" id="firma-upload" accept="image/*">
        </span>
      </p>
    </div>
  </div>
  <div class="form-row">
    <div class="column-full">
      <p><strong>Razón Social</strong></p>
      <p>
        <span class="wpcf7-form-control-wrap">
          <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
            aria-invalid="false" type="text" name="razon_social" id="razon-social" maxlength="50"
            placeholder="Ingrese la razón social" required>
        </span>
      </p>
    </div>
  </div>

  <div class="form-row">
    <div class="column-half">
      <p><strong>Información de Pago</strong></p>
      <p>
        <span class="wpcf7-form-control-wrap">
          <textarea cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
            aria-required="true" aria-invalid="false" name="informacion_pago" id="informacion-pago"
            placeholder="Ingrese la información de pago" maxlength="200" required></textarea>
        </span>
      </p>

    </div>
    <div class="column-half">
      <p><strong>Factura a</strong></p>
      <p>
        <span class="wpcf7-form-control-wrap">
          <textarea cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
            aria-required="true" aria-invalid="false" maxlength="200" name="factura_a" id="factura-a"
            placeholder="Ingrese la factura A" required></textarea>
        </span>
      </p>
    </div>
  </div>
  </style>

  <div class="form-row additional-row">
    <div class="column-full column-full-button">
      <button type="button" class="add-row-btn" onclick="addRow()"><i class="fas fa-plus-circle"></i></button>
    </div>
    <div class="column-full">
      <div class="row-inputs">
        <div class="column first-column">
          <p><strong>Descripción</strong></p>
          <p><input type="text" name="descripcion[]" placeholder="Ingrese la Descripción" maxlength="100"></p>
        </div>
        <div class="column">
          <p><strong>Cantidad</strong></p>
          <p><input type="number" name="cantidad[]" placeholder="0" min="0" maxlength="100"></p>
        </div>
        <div class="column">
          <p><strong>Precio</strong></p>
          <p><input type="number" name="precios[]" placeholder="0.000" min="0" maxlength="100"></p>
        </div>
        <div class="column action">
          <button type="button" class="remove-row-btn" onclick="removeRow(this)"><i
              class="fas fa-trash-alt"></i></button>
        </div>
      </div>

    </div>
  </div>

  <div class="form-row">
    <div class="column-full">
      <p><strong>Acepto los términos y condiciones</strong></p>
      <p><span class="wpcf7-form-control-wrap" data-name="terms">
          <textarea cols="70" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
            aria-required="true" aria-invalid="false" name="terms" id="terms" maxlength="250"></textarea>
        </span>
        <br>
      </p>
    </div>
  </div>
<!--   <div class="form-row" style="text-align: center">
    <div class="column-full">
      <h5>Personaliza tu cotización: elige un diseño predeterminado o carga tu propio diseño personalizado</h5>
    </div>
  </div> -->


  <div class="form-row">
    <div class="column-full" style="text-align: center;">
      <input type="submit" value="Enviar">
      <div class="loader">
        <div class="loader-wheel"></div>
        <div class="loader-text"></div>
      </div>
    </div>
  </div>
</form>

<div id="html-container"></div>
<div id="error-container"></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  crossorigin="anonymous" />

<script>
  function addRow() {
    const rowInputs = document.querySelector('.row-inputs');
    const newRowInputs = rowInputs.cloneNode(true);
    newRowInputs.querySelectorAll('input').forEach(input => {
      input.value = '';
    });
    rows = document.querySelectorAll('.row-inputs');
    document.querySelector('.remove-row-btn').disabled = rows?.length < 1;

    const parentElement = rowInputs.parentNode;
    const lastRow = parentElement.querySelector('.row-inputs:last-child');
    parentElement.insertBefore(newRowInputs, lastRow.nextSibling);
  }

  function removeRow(button) {
    const row = button.closest('.row-inputs');
    const prevRow = row.previousElementSibling;
    if (prevRow) {
      // prevRow.querySelector('.add-row-btn').style.display = 'inline-block';
    }
    var rowCount = document.querySelectorAll('.row-inputs')?.length;
    if (rowCount > 1) {
      row.remove();
    }
  }

  document.getElementById('certified-form-1').addEventListener('submit', function (event) {
    event.preventDefault();
    var form = event.target;
    var htmlContainer = document.getElementById('html-container');
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    htmlContainer.innerHTML = '';
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    let submitButton = form.querySelector('[type="submit"]');
    submitButton.style.display = 'none';

    let loader = document.querySelector('.loader');
    loader.style.display = 'block';

    // Mostrar indicador de carga
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        loader.style.display = 'none';

        if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          form.reset();

          var rows = document.querySelectorAll('.row-inputs');
          if (rows.length > 1) {
            for (var i = 1; i < rows.length; i++) {
              rows[i].remove();
            }
          } else {
            const rowInputs = document.querySelector('.row-inputs');
            const newRowInputs = rowInputs.cloneNode(true);
            newRowInputs.querySelectorAll('input').forEach(input => {
              input.value = '';
            });
          }


          if (response.success) {
            htmlContainer.innerHTML = `
            <div style="text-align: center;">
              <h2><strong>Registro exitoso</strong></h2>
              <p>Haz clic en el botón de abajo para descargar el PDF:</p>
              <a href="${response.download_url}" class="buttonPDF" target="_blank">Descargar PDF</a>
            </div>
          `;
          } else {
            htmlContainer.innerHTML = '';
          }
        } else {
          var errorContainer = document.getElementById('error-container');
          errorContainer.textContent = 'Error: ' + xhr.status + ' - Vuelva a intentarlo';
          errorContainer.style.display = 'block';
        }
        submitButton.style.display = 'block';
      }
    };
    xhr.send(formData);
  });


</script>