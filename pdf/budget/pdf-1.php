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
      font-family: proxima-nova-light, sans-serif !important;
    }

    p {
      font-size: .7rem;
      font-family: proxima-nova-light, sans-serif !important;
    }

    h3,
    h2,
    h4,
    h5 {
      color: #0098BA;
      font-family: proxima-nova-light, sans-serif !important;
      margin: 0px;
      font-size: 1.3rem;
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
    }

    .col-60 {
      width: 400px;
      float: left;
      text-align: center;
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

    .logo,
    .container-business {
      margin-top: 47px;
      height: 100px;
    }

    .logo {
      width: 200px;
      height: 100px;
      overflow: hidden;
      position: relative;
      text-align: center;
      margin: 0 auto;
      margin-top: 47px;

    }

    .logo img {
      max-width: 100%;
      max-height: 100%;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: 43px;
      transform: translate(-50%, -50%);
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

    .container .container-register-items table {
      width: 700px;
      margin: 0 auto;
      border-collapse: collapse;
      text-align: center;
      margin-top: 70px;
    }

    .container .container-register-items th {
      color: #2697B7;
      padding-bottom: 30px;
    }


    .container .container-register-items td {
            border-bottom: 1px solid #B6B6B6;
            padding: 20px;
    }


    .container .container-info {
      text-align: center;
      margin: 0 auto;
      margin-top: 40px;
      position: absolute;
      bottom: 400px;
      margin-bottom: 40px;
    }

    .container .container-info-terms {
      text-align: center;
      margin: 0 auto;
      margin-top: 0px;
      margin-bottom: 0px;
      width: 790px;
      position: absolute;
      bottom: 200px;
    }

    .container .container-info-terms .col-60 {
      width: 490px;
    }

    .container .container-info-terms .col-40 {
      width: 200px;
    }
  </style>
</head>

<body class="container" style="background-image: url('<?php echo $background; ?>');">
  <div>
    <table class="container-header">
      <tr>
        <td class="col-60">
          <div class="logo">
            <img src="<?php echo $uploaded_images['image']; ?>" alt="Logo"
              srcset="<?php echo $uploaded_images['image']; ?>">
          </div>
        </td>
        <td class="col-40">

          <div class="container-business" style="width: 350px; ">
            <h2 style="text-align: center; font-size:1.8rem">
              <?php echo strtoupper($business_name); ?>
            </h2>
            <table style=" width: 350px; margin-top:20px" border="0">
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

        <?php for ($i = 0; $i < 8; $i++) { ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php } ?>
      </table>
    </div>

    <table class="container-info" border="0">
      <tr>
        <td class="col-33" style="text-align: left;padding-left:10px;padding-rigth:10px;vertical-align: top;">
          <h5> <strong>Cliente</strong></h5>
          <div style="border-bottom: 1px solid black; padding-top:20px; width:100%"></div>
        </td>
        <td class="col-33 " style="text-align: left;padding-left:10px;padding-rigth:10px;vertical-align: top;;">
          <h5>Formas de pago</h5>
          <p>
            <?php echo $payment_information; ?>
          </p>
        </td>
        <td class="col-33" style="text-align: left; vertical-align: top;">
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
              <td colspan="2" style="text-align: left; width:160px;padding-left:10px; padding-bottom:5px;">
                <h5 style="text-align: center; vertical-align: top;">Total: ___________ </h5>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table class="container-info-terms">
      <tr>
        <td  style="vertical-align: top;">
          <h5 style="text-align: left;">Terminos y Condiciones</h5>
          <p
            style="padding-bottom: 10px;border-bottom: 1px solid black;font-size: .6rem;text-align: left;margin: 0px;padding-top: 10px;padding-rigth:40px">
            <?php echo $terms; ?>
          </p>
        </td>
         <td width="150px; vertical-align: top;">
       <h5 style="text-align: center; vertical-align: top; color:black"> ____________________
       <br />
       <small>Firma</small>
       </h5>
        </td>
      </tr>
      <tr>
        <td>
          <h5 style="text-align: left; color: black; font-weight: normal;">
            <br />
            <br />
            <br />Gracias por hacer negocios
          </h5>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>