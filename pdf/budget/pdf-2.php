<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo $font_css_url; ?>">
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      font-family: proxima-nova-light, sans-serif !important;
    }

    .container {
      width: 825px;
      margin: 0 auto;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      position: relative;
      font-family: proxima-nova-light, sans-serif !important;
    }

    p {
      font-size: .7rem;
      font-family: proxima-nova-light, sans-serif !important;
    }

    h3,
    h4,
    h2,
    h5 {
      font-family: proxima-nova-light, sans-serif !important;
      margin: 0px;
      color: #0098BA;
    }

    h6 {
      font-family: proxima-nova-light, sans-serif !important;
      margin: 0px;
    }

    h3 {
      font-size: 1.7rem;
      color: #0098BA;
    }

    h4 {
      font-size: 1.3rem;
    }

    .container-header {
      width: 825px;
      padding-top: 10px;

    }

    .col-60 {
      width: 236px;
      float: left;
      box-sizing: border-box;
    }

    .col-40 {
      width: 585px;
      float: left;
      box-sizing: border-box;
    }

    .col-33 {
      width: 33.33%;
      float: left;
      box-sizing: border-box;
      padding: 10px;
    }

    .logo,
    .container-business {
      margin-top: 50px;
      height: 100px;
      text-align: center;
    }

    .logo {
      width: 200px;
      height: 100px;
      overflow: hidden;
      position: relative;
      margin: 0 auto;
    }

    .logo img {
      max-width: 100%;
      max-height: 100%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .container-business p {
      display: inline-block;
    }

    .container-business .container-date {
      margin-top: 10px;
    }

    .container .container-register-items {
      width: 650px;
      margin: auto;
      text-align: right;
      margin-left: auto;
      margin-right: 0;
      margin-top: 20px;
    }

    .container .container-info {
      text-align: center;
      position: absolute;
      bottom: 5px;
      width: 800px;
      margin: 0 auto;
    }

    .container .container-register-items table {
      border-collapse: collapse;
      width: 650px;
      margin: 0 auto;
      text-align: center;
      margin-top: 70px;
      padding-right: 20px
    }

    .container .container-register-items th {
      color: #2697B7;
      padding-bottom: 45px;
    }


    .container .container-register-items td {
      border-bottom: 1px solid #B6B6B6;
      padding-bottom: 20px;
      padding-top: 20px;
      margin-bottom: 15px;
    }

    .container .container-info-terms {
      position: absolute;
      width: 240px;
      bottom: 280px;
      color: white;
      text-align: center;
    }
  </style>
</head>

<body class="container" style="background-image: url('<?php echo $background; ?>');">
  <table class="container-header" border="0">
    <tr>
      <td class="col-60" style="width: 230px; text-align: center;vertical-align: middle;">
        <div class="logo" style="margin-top:50px">
          <img src="<?php echo $uploaded_images['image']; ?>" alt="Logo"
            srcset="<?php echo $uploaded_images['image']; ?>">
        </div>
      </td>

      <td class="col-40" style="vertical-align: middle; padding-bottom:20px">
        <div class="container-business">
          <h2 style="text-align: right; font-size:3rem; margin-top:-30px; margin-right:150px">
            <?php echo strtoupper($business_name); ?>
          </h2>
          <table border="0" style="margin:0 auto;margin-left:230px; padding-top:20px">
            <tr>
              <th style="text-align: left; width:160px; padding-left:10px; padding-bottom:5px;">Cotizaci&#243;n &#35;
              </th>
              <th style="text-align: right;">___________</th>
            </tr>
            <tr>
              <th style="text-align: left; width:160px; padding-left:10px;padding-top:5px;">Fecha</th>
              <td style="text-align: right;">
                <?php echo date("d / m / Y"); ?>
              </td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
  </table>

  <div class="container-register-items">
    <table>
      <tr>
        <th>N.</th>
        <th>Descripci&#243;n</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
      </tr>
        <?php for ($i = 0; $i < 9; $i++) { ?>
      <tr>
        <td colspan="5"></td>
      </tr>
        <?php } ?>
    </table>
  </div>

  <div class="container-info">
    <table style="width:810px; margin:0 auto;">
      <tr>
        <td style="width:230px;text-align:center; vertical-align: middle;">
          <h5 style="font-size: 1.4rem; color:white;">Cliente</h5>
          <p style="color:white;font-size: .9rem;">_______________________</p>
        </td>
        <td style="vertical-align: top;">
          <h5 style="font-size: 1.1rem; color:black; margin-left:25px; padding-top:10px;font-weight:normal">Gracias por hacer negocios
          </h5>
          <br />
          <div>
            <h5 style="color:black; font-size: 1.1rem; margin-left:25px; padding-top:10px;">Formas de pago</h5>
            <p style="margin-left:25px;">
              <?php echo $payment_information; ?>
            </p>
          </div>
        </td>
        <td style="vertical-align: bottom;">
          <table style=" width: 100%; padding:0px 10px;" border="0">
            <tr>
              <td style="text-align: left; width:100px; font-size: .8rem; padding-left:10px; padding-bottom:5px;">
                Subtotal:
              </td>
              <td style="text-align: right;">______________</td>
            </tr>
            <tr>
              <td style="text-align: left; width:100px; font-size: .8rem;padding-left:10px; padding-bottom:5px;">IVA:
              </td>
              <td style="text-align: right;">______________</td>
            </tr>
            <tr>
              <td colspan="2">
                <div
                  style="border-bottom: 1px solid black; padding-top: 10px; width: 100%; margin:0 auto; margin-bottom: 10px;">
                </div>
              </td>
            </tr>
            <tr>
              <td style="text-align: left; width:100px; font-size: 1rem;padding-left:10px; padding-bottom:5px;">
                <strong>Total:</strong>
              </td>
              <td style="text-align: right;">______________</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td style="text-align:center;vertical-align: middle;">
          <h5 style="font-size: 1rem; color:white;">Terminos y Condiciones</h5>
          <p style="padding:10px 15px; font-size: .6rem;color:white;text-align:left;">
            <?php echo $terms; ?>
          </p>
        </td>
        <td width="vertical-align: bottom; padding-top:30px">
            <br />
            <br />
            <br />
            <br />
          <h5 style="text-align: center; vertical-align: bottom; color:black">
            <hr style="width:80%; margin:0 auto;">
            <br />
            <small>Firma</small>
          </h5>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>