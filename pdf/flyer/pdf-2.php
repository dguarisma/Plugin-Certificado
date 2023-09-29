<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            margin: 0 auto;
        }

        .main {
            background-image: url("<?php echo $background; ?>");
            height: auto;
            width: 800px;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0 auto;
            background-repeat: no-repeat;

            background-position: center;
            position: relative;
        }

        .logo-container {
            position: absolute;
            padding-top: 200px;
            padding-left: 150px;
        }

        .logo-container img {
            max-width: 100%;
            max-height: 100%;
            display: block;
        }
    </style>
</head>

<body class="main">
    <div>
        <table>
            <tr>
                <td>
                    <div class="logo-container">
                        <img src="<?php echo $uploaded_images['logo']; ?>"
                            alt="" width="150px" height="auto">
                    </div>
                </td>
            </tr>
        </table>
        <table
            style="margin: auto; margin-top:150px; width: 800px; position: absolute; top:240px">
            <tr>
                <td style="  width: 350px;">
                    <div style="padding-top: 30px; padding-left: 80px; padding-right: 80px; ">

                        <h2 style="font-weight:100; color:#254E5C">
                        <?php echo $about_us; ?>
                        </h2>
                        <div style="margin-top: 20px; margin-bottom: 20px;">
                        <?php echo $why_choose_us; ?>
                        </div>
                    </div>
                </td>
                <td style="width: 400px;padding-right: 15px">
                    <table>
                        <tr>
                            <td>
                                <img style="color: white; display: inline-block;"
                                    src="https://www.certificadoweb.com/wp-content/uploads/2023/09/pencil.png" alt=""
                                    width="50px" height="50px">
                            </td>
                            <td>
                                <p style="color: white; display: inline-block; padding-left: 15px">  <?php echo $service_1; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://www.certificadoweb.com/wp-content/uploads/2023/09/bombillo.png" alt=""
                                    width="50px" height="50px" height="auto">
                            </td>
                            <td>
                                <p style="color: white; display: inline-block;padding-left: 15px"><?php echo $service_2; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://www.certificadoweb.com/wp-content/uploads/2023/09/engranaje.png"
                                    alt="" width="50px" height="50px" height="auto">
                            </td>
                            <td>
                                <p style="color: white; display: inline-block;padding-left: 15px"><?php echo $service_3; ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://www.certificadoweb.com/wp-content/uploads/2023/09/iconoMensaje.png"
                                    alt="" width="50px" height="50px" height="auto">
                            <td>
                                <p style="color: white; display: inline-block;padding-left: 15px"><?php echo $service_4; ?></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <footer style="position: absolute; bottom:0px; width:800px; height:100px; padding: 3px 0px">
            <table>
                <tr>
                    <td
                        style="width: 266px;  vertical-align: middle; margin: 0 auto; text-align: center;  border-right: 2px solid white; height: 60px;">
                        <img src="<?php echo $uploaded_images['logo']; ?>"
                            alt="" width="120px" height="auto">
                    </td>
                    <td style="width: 266px; vertical-align: middle; margin: 0 auto; text-align: center;">
                        <table width="100%">
                            <tr>
                                <td>
                                    <i class="fa fa-envelope-o fa-2x fa-lg" aria-hidden="true"
                                        style="color: white;"></i>

                                </td>
                                <td>
                                    <p style="color: white;"><?php echo  $email; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-phone fa-2x fa-lg" aria-hidden="true" style="color: white;"></i>
                                </td>
                                <td>
                                    <p style="color: white;"><?php echo  $phone; ?></p>
                                </td>
                            </tr>
                        </table>

                    </td>
                    <td style="width: 265px; vertical-align: middle; margin: 0 auto; text-align: center">
                        <table width="100%">
                        <!--     <tr>
                                <td>
                                    <i class="fa fa-facebook fa-2x fa-lg" aria-hidden="true" style="color: white;"></i>
                                </td>
                                <td>
                                    <p style="color: white;">Facebook Page</p>
                                </td>
                            </tr> -->
                            <tr>
                                <td>
                                    <i class="fa fa-map-marker fa-2x fa-lg" aria-hidden="true"
                                        style="color: white;"></i>
                                </td>
                                <td>
                                    <p style="color: white;"><?php echo  $address; ?></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </footer>
    </div>
</body>
</html>