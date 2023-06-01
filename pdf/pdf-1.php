<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: system-ui;
        }

        .container {
            width: 825px;
            margin: 0 auto;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        p{
            font-size: .7rem;
        }
        h3,
        h4,
        h5 {
            color: #2697B7;
            font-family: system-ui;
            margin: 0px;
        }

        h6 {
            font-family: system-ui;
            margin: 0px;
        }

        h3 {
            font-size: 2rem;
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
            text-align: center;
        }

        .logo {
            padding-left: 30px
        }

        .logo img {
            height: 100px;
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
            padding-bottom: 10px;
            padding-top: 10px;
            font-size: .8rem;
        }

     
        .container .container-info {
            text-align: center;
            margin: 0 auto;
            width: 700px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .container .container-info-terms {
            text-align: center;
            margin: 0 auto;
            width: 700px;
            margin-top: 0px;
            margin-bottom: 0px;
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
                    <img src="<?php echo $uploaded_images['image']; ?>" alt="Logo" srcset="<?php echo $uploaded_images['image']; ?>">
                    </div>
                </td>
                <td class="col-40">
                    <div class="container-business">
                        <h3><?php echo strtoupper($razon_social); ?></h3>
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
                <?php
                    $subtotal = 0; 
                    foreach ($descripciones as $index => $descripcion) { 
                        $subtotal += (float) $cantidades[$index] * (float) $precios[$index];
                ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $descripcion; ?></td>
                    <td><?php echo $cantidades[$index]; ?></td>
                    <td><?php echo number_format((float) $precios[$index], 0, ',', '.'); ?> COP</td>
                    <td><?php echo number_format((float) $cantidades[$index] * (float) $precios[$index], 0, ',', '.'); ?> COP</td>

                </tr>
                <?php } ?>
            </table>
        </div>

        <table class="container-info">
            <tr>
                <td class="col-33"  style="text-align: left;">
                    <h5>Facturar a</h5>
                    <p><?php echo $factura_a; ?></p>
                </td>
                <td class="col-33" style="text-align: left;">
                <h5>Información de Pago</h5>
                    <p><?php echo $informacion_pago; ?></p>
                </td>
                <td class="col-33" style="text-align: left;">
                        <h5>Sub Total: <strong><?php echo number_format($subtotal, 0, ',', '.'); ?> COP</strong></h5>
                        <h5 style="padding-top: 10px; border-top: 1px solid black; font-size: 1.3rem; margin-top: 5px; text-align: left;">
                        Total: <strong><?php echo number_format($subtotal, 0, ',', '.'); ?> COP</strong></h5>
                </td>
            </tr>
        </table>
        <table class="container-info-terms">

            <tr>
                <td class="col-60">
                    <h5 style="text-align: left;">Terminos y Condiciones</h5>
                    <p
                        style="padding-bottom: 10px;border-bottom: 1px solid black;font-size: .6rem;text-align: left;margin: 0px;padding-top: 10px;">
                        <?php echo $terms; ?>
                    </p>
                </td>
                <td class="col-40">
                    <img src="<?php echo $uploaded_images['firma']; ?>" alt="Firma" srcset="<?php echo $uploaded_images['firma']; ?>"style="max-width: 160px;">
                    <p style="padding-top: 10px;border-top: 1px solid black;width: 60%;font-size: .7rem;margin: 0 auto;">
                        <strong>Firma Autorizada</strong></p>
                </td>
            </tr>
            <tr>
                <td>
                <h5 style="text-align: left;">
                  <strong> Gracias por hacer negocios</strong>
               </h5>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>