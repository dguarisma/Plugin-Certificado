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
            padding-left: 100px;
            text-align:right;
            padding-top:0px;
            width: 200px; 
            height: 100px; 
            overflow: hidden;
            display: inline-block; 
            
        }

        .logo img {
                max-width: 100%; 
                max-height: 100%;
                display: block; 
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
            margin-top: 40px;
            position: absolute;
            bottom:400px;
            margin-bottom: 40px;
        }

        .container .container-info-terms {
            text-align: center;
            margin: 0 auto;
            margin-top: 0px;
            margin-bottom: 0px;
            width:790px;
            position: absolute;
            bottom:200px;
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
                <td class="col-60" style="text-align: left;padding-left:10px;padding-rigth:10px;">
                <h5>Información de Pago</h5>
                    <p ><?php echo $payment_information; ?></p>
                </td>
                <td class="col-40" style="text-align: center;">
                    <h5>Total:______________________</h5>
                </td>
            </tr>
        </table>
        <table class="container-info-terms">
            <tr>
                <td>
                    <h5 style="text-align: left;">Terminos y Condiciones</h5>
                    <p
                        style="padding-bottom: 10px;border-bottom: 1px solid black;font-size: .6rem;text-align: left;margin: 0px;padding-top: 10px;padding-rigth:30px">
                        <?php echo $terms; ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                <h5 style="text-align: left;">
        <br/>
        <br/>
        <br/>
           <br/>
                  <strong> Gracias por hacer negocios</strong>
               </h5>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>