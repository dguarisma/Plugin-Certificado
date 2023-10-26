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
    h5 {
      color: #0098BA;
      font-family: proxima-nova-light, sans-serif !important;
      margin: 0px;
    }

    h6 {
      font-family: proxima-nova-light, sans-serif !important;
      margin: 0px;
    }

    h3 {
      font-size: 1.7rem;
    }

    h4 {
      font-size: 1.3rem;
    }

    .container-header {
      width: 825px;
      padding-left: 30px;
      padding-top: 30px;
    }

    .col-60 {
      width: 400px;
      float: left;
      box-sizing: border-box;
    }

    .col-40 {
      width: 345px;
      float: left;
      box-sizing: border-box;
    }

    .col-33 {
      width: 33.33%;
      float: left;
      box-sizing: border-box;
      padding: 10px;
    }


    .container-business {
      margin-top: 20px;
      height: 150px;
      text-align: center;
    }

   .logo {
      width: 180px;
      height: 180px;
      position: relative;
      margin-left:30px;
    }
    
    .logo img {
      max-width: 100%;
      max-height: 100%;
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .container-business {
      padding-top: 50px;
    }

    .container-business p {
      display: inline-block;
    }

    .container-business .container-date {
      margin-top: 10px;
    }

    .container .container-register-items,
    .container .container-info {
      width: 100%;
    }

    .container .container-register-items {
      width: 700px;
      margin: 0 auto;
      border-collapse: collapse;
      text-align: center;
      margin-top: 0px;
    }

    .container .container-register-items table {
      width: 700px;
      margin: 0 auto;
      border-collapse: collapse;
      text-align: center;
      margin-top: 100px;
    }

    .container .container-register-items th {
      color: #113862;
      padding: 20px 0px;
    }


    .container .container-register-items td {
      border-bottom: 1px solid #E9EBEC;
      padding: 20px;
    }


    .container .container-info {
      text-align: center;
      margin: 0 auto;
      width: 700px;
      bottom: 270px;
      position: absolute;
      right: 0px;

    }

    .container .container-info-terms {
      text-align: center;
      margin: 0 auto;
      width: 700px;
      position: absolute;
      bottom: 150px;
      right: 0px;

    }
  </style>
</head>

<body class="container" style="background-image: url('<?php echo $background; ?>');">
  <div>
    <table class="container-header" border="0">
      <tr>
        <td class="col-60">
          <div class="logo">
            <img src="<?php echo $uploaded_images['image']; ?>" alt="Logo"
              srcset="<?php echo $uploaded_images['image']; ?>">
          </div>
        </td>
        <td class="col-40">
          <div class="container-business">
            <h3 style="font-size:3rem">
              <?php echo strtoupper($business_name); ?>
            </h3>
            <table style=" width: 260px; margin-top:20px" border="0">
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
      <tr>
        <td style="vertical-align: top;">
          <h5 style="color: white; margin-left:55px; font-size:1.2rem">Cliente ________________</h5>
        </td>
      </tr>
    </table>

    <div class="container-register-items">
      <table>
        <tr style="background-color: #E9EBEC; color: #113862;">
          <th>N.</th>
          <th>Descripci&#243;n</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th>Total</th>
        </tr>
        <?php
        for ($i = 0; $i < 7; $i++) { ?>
        <tr>
          <td style="background-color: #E9EBEC"></td>
          <td style="background-color:#FBFBFB"></td>
          <td style="background-color: #E9EBEC"></td>
          <td style="background-color:#FBFBFB"></td>
          <td style="background-color: #E9EBEC"></td>
        </tr>
        <?php } ?>
      </table>
    </div>

    <table class="container-info">
      <tr>
        <td style="text-align: left;width:500px;">
        </td>
        <td style="text-align: center;width:200px">
          <table style=" width: 100%;" border="0">
            <tr>
              <td style="text-align: left; width:160px; font-size: .8rem; padding-left:10px; padding-bottom:5px;">
                Subtotal:
              </td>
              <td style="text-align: right;">___________</td>
            </tr>
            <tr>
              <td style="text-align: left; width:160px; font-size: .8rem;padding-left:10px; padding-bottom:5px;">IVA:
              </td>
              <td style="text-align: right;">___________</td>
            </tr>
            <tr>
              <td colspan="2">
                <div
                  style="border-bottom: 1px solid black; padding-top: 10px; width: 100%; margin:0 auto; margin-bottom: 10px;">
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="3" style="text-align: left; ;padding-left:10px; padding-bottom:5px;">
                <h5 style="text-align: left; vertical-align: top; color:#5695CD; font-size:1rem">Total:
                  ______________________ </h5>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table style="width:400px; margin-top:40px; padding-left:60px">
      <tr>
        <td sytle="padding-top:30px; padding-bottom:30px">
          <h5 style="text-align: left; color:#5695CD;"> Formas de pago</h5>
          <p
            style="padding-bottom: 10px;border-bottom: 0px solid black;font-size: .6rem;text-align: left;margin: 0px;padding-top: 10px;">
            <?php echo $payment_information; ?>
          </p>
        </td>
      </tr>
      <tr>
        <td sytle="padding-top:30px">
          <h5 style="text-align: left; color:#5695CD; margin-top:20px">Terminos y Condiciones</h5>
          <p
            style="padding-bottom: 10px;border-bottom: 0px solid black;font-size: .6rem;text-align: left;margin: 0px;padding-top: 10px;">
            <?php echo $terms; ?>
          </p>
        </td>
      </tr>
    </table>
  </div>
  <table style="margin-top:60px;width:750px; padding-left:60px">
    <tr>
      <td>
        <h5 style="text-align: left;color:#5695CD;">
          <strong> Gracias por hacer negocios</strong>
        </h5>
      </td>
      <td width="200px; vertical-align: top;">
        <h5 style="text-align: center; vertical-align: top; color:black"> _________________________
          <br />
          <small>Firma</small>
        </h5>
      </td>
    </tr>
  </table>
</body>

</html>