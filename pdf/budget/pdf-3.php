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
        p{
            font-size: .7rem;
            font-family: proxima-nova-light, sans-serif !important;
        }
        h3,
        h4,
        h5 {
            color: #2697B7;
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

        .logo,
        .container-business {
            margin-top: 50px;
            height: 100px;
            text-align: center;
        }

        .logo {
            padding-left: 20px;
            text-align: left;
        }

        .logo img {
            height: auto;
            width: 150px;
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
            color: #113862;
            padding: 20px 0px;
        }


        .container .container-register-items td {
            border-bottom: 1px solid #B6B6B6;
            padding-bottom: 10px;
            padding-top: 10px;
            font-size: .8rem;
        }

     
        .container .container-info {
            text-align: center;
            margin: 0 auto;
            width: 700px;
            bottom: 250px;
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
        <table class="container-header">
            <tr>
                <td class="col-60">
                    <div class="logo">
                          <img src="<?php echo $uploaded_images['image']; ?>" alt="Logo" srcset="<?php echo $uploaded_images['image']; ?>">
                        <div  style="text-align: left;width: 150px;color: white;">
                        <br />
                        <br />
                            <h5 style="color: white;">Facturar a</h5>
                            <p><?php echo $payment_information; ?></p>
                        </div>
                    </div>
                 
                </td>
                <td class="col-40">
                    <div class="container-business">
                    <h3><?php echo strtoupper($business_name); ?></h3>
                        <div class="container-date">
                            <p><strong>Fecha</strong></p>
                            <p><strong><?php echo date("d/m/Y"); ?></strong></p>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <div class="container-register-items">
            <br />
            <br />
            <br />
            <table>
                <tr style="background-color: #E9EBEC; color: #113862;">
                    <th>N.</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

        <table class="container-info">
            <tr>
                <td style="text-align: left;width:500px;">
                    <h5>Información de Pago</h5>
                    <p><?php echo $invoice_to; ?></p>
                </td>
                <td style="text-align: center;width:200px">
                    <h5>Total:______________________</h5>
                </td>
            </tr>
        </table>
        <table class="container-info-terms">
            <tr>
                <td style="width:500px;">
                    <h5 style="text-align: left;">Terminos y Condiciones</h5>
                    <p
                        style="padding-bottom: 10px;border-bottom: 1px solid black;font-size: .6rem;text-align: left;margin: 0px;padding-top: 10px;">
                        <?php echo $terms; ?>
                    </p>
                </td>
                <td style="width:200px;">
                </td>
            </tr>
            <tr>
                <td>
                <h5 style="text-align: left;padding-bottom: 40px;">
                  <strong> Gracias por hacer negocios</strong>
               </h5>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>