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
            font-family: proxima-nova-light, sans-serif !important;
            margin: 0px;
        }

        h6 {
            font-family: proxima-nova-light, sans-serif !important;
            margin: 0px;
        }

        h3 {
            font-size: 1.7rem;
            color: #2697B7;
        }

        h4 {
            font-size: 1.3rem;
        }

        .container-header {
            width: 825px;
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
            width: 585px;
            position: absolute;
            bottom: 280px;
            padding-bottom: 20px;
            padding-left: 20px;
            right: 0px;
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
            padding-bottom: 10px;
            padding-top: 10px;
            font-size: .8rem;
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
    <table class="container-header">
        <tr>
            <td class="col-60">
                <div class="logo">
                    <img src="<?php echo $uploaded_images['image']; ?>" alt="Logo" srcset="<?php echo $uploaded_images['image']; ?>">
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
        <table>
            <tr>
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
            <td>
                <h5 style="text-align: left;margin-bottom: 30px;">
                    <strong> Gracias por hacer negocios</strong>
                </h5>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">
                <h5>Información de Pago</h5>
                <p style="margin:0px; font-size: .7rem; padding-top: 10px; padding-bottom: 10px;"><?php echo $invoice_to; ?></p>
            </td>
            <td style="text-align: left; padding-right: 20px">
                    <h5>Total:______________________</h5>
            </td>
        </tr>
        <tr>
            <td style='margin-top:40px'>
            </td>
        </tr>
    </table>
    <table class="container-info-terms">
        <tr>
            <td>
                <h5 style="font-size: 1.1rem;">Facturar a</h5>
                <p><?php echo $payment_information; ?></p>
            </td>           
        </tr>
        <tr>
            <td>
                <h5>Terminos y Condiciones</h5>
                <p
                    style="padding:10px 15px; font-size: .6rem;">
                    <?php echo $terms; ?>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>