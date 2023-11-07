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
      font-family: proxima-nova-light, sans-serif !important;
    }

    .main {
      background-image: url("<?php echo $background; ?>");
      height: auto;
      width: 800px;
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0 auto;
      background-position: center;
      position: relative;
    }

    .logo-container {
      position: relative;
      top: 180px;
      left: 190px;
      height: 200px;
      width: 200px;
    }

    .logo-container img {
      max-width: 100%;
      max-height: 100%;
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body class="main">
  <div>
    <div class="logo-container"><img src="<?php echo $uploaded_images['image']; ?>"></div>
    <table style="margin: auto; width: 800px; position: absolute; top:400px;">
      <tr>
        <td style="width: 350px; vertical-align: top;overflow: hidden;">
          <h2 style="font-weight:normal; color:#3A4E5A; margin:0px; font-size:1.8rem; margin-left:40px; ">LLEVA TU
            <br /> NEGOCIO A OTRO <br /><strong style="font-size:2.5rem;">NIVEL</strong></h2>
          <div style="margin-left:40px; margin-top:20px;padding-right:15px;overflow: hidden;">
            <h1 style="font-size: 1.5rem;font-weight: bold; color:#3A4E5A;">Sobre nosotros.</h1>
            <p style="font-weight:normal; color:#3A4E5A;overflow: hidden;height: auto;width: 300px;word-wrap: break-word;">
              <?php echo $about_us; ?>
            </p>
          </div>
          <div style="margin-left:40px; margin-top:20px; padding-right:15px; overflow: hidden;">
            <h1 style="font-size: 1.5rem;font-weight: bold; color:#3A4E5A;">&iquest;Por qu&eacute; elegirnos?</h1>
            <p style="font-weight:normal; color:#3A4E5A;overflow: hidden;height: auto;width: 300px;word-wrap: break-word;">
              <?php echo $why_choose_us; ?>
            </p>
          </div>
        </td>
        <td style="width: 390px;padding-right: 15px; padding-top: 70px">
          <table>
            <tr>
              <td>
                <img style="color: white; display: inline-block;"
                  src="https://www.certificadoweb.com/wp-content/uploads/2023/09/pencil.png" alt="" width="60px"
                  height="60px">
              </td>
              <td style="width: 300px;padding-left:30px;">
                <h2 style="color: white; margin:0px;text-transform: capitalize;height: auto;width: 300px;word-wrap: break-word; font-size:1.2rem">
                  <?php echo $titel_1; ?>
                </h2>
                <p style="color: #999999;font-weight: normal;height: auto;width: 300px;word-wrap: break-word;">
                  <?php echo $service_1; ?>
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="https://www.certificadoweb.com/wp-content/uploads/2023/09/bombillo.png" alt="" width="60px"
                  height="60px" height="auto">
              </td>
              <td style="padding-left:30px;">
                <h2 style="color: white; margin:0px;text-transform: capitalize;height: auto;width: 300px;word-wrap: break-word;font-size:1.2rem">
                  <?php echo $titel_2; ?>
                </h2>
                <p style="color: #999999;font-weight: normal;height: auto;width: 300px;word-wrap: break-word;">
                  <?php echo $service_2; ?>
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="https://www.certificadoweb.com/wp-content/uploads/2023/09/engranaje.png" alt="" width="60px"
                  height="60px" height="auto">
              </td>
              <td style="padding-left:30px;">
                <h2 style="color: white; margin:0px;text-transform: capitalize;height: auto;width: 300px;word-wrap: break-word;font-size:1.2rem">
                  <?php echo $titel_3; ?>
                </h2>
                <p style="color: #999999;font-weight: normal;height: auto;width: 300px;word-wrap: break-word;">
                  <?php echo $service_3; ?>
                </p>
              </td>
            </tr>
            <tr>
              <td>
                <img src="https://www.certificadoweb.com/wp-content/uploads/2023/09/iconoMensaje.png" alt=""
                  width="60px" height="60px" height="auto">
              <td style="padding-left:30px;">
                <h2 style="color: white; padding-left: 15px: margin:0px;text-transform: capitalize;height: auto;width: 300px;word-wrap: break-word;font-size:1.2rem">
                  <?php echo $titel_4; ?>
                </h2>
                <p style="color: #999999;font-weight: normal;height: auto;width: 300px;word-wrap: break-word;">
                  <?php echo $service_4; ?>
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <footer style="position: absolute; bottom:0px;  height:95px; padding: 1px 0px; width:800px">
      <table style="padding:0px; width:100%;padding-top:5px: padding-bottom:5px">
        <tr>
          <td style="vertical-align: top; margin: 0 auto; position:relative;text-align: left; width:220px;">
               <div
                style="border-right: 5px solid white;height:55px; position: absolute;top: 43%;right: 0%;transform: translate(-50%, -50%);">
              </div>
            <div style="height:85px; margin: 0 auto; position:relative; width:150px; text-align: left;margin-bottom:0;vertical-align: middle">
              <img src="<?php echo $uploaded_images['image']; ?>"
                style="max-width: 100%;max-height: 100%;display: block;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
            </div>
          </td>
          <td style="width: auto; heigth:auto; margin: 0 auto; text-align: left; padding-left:30px;vertical-align: middle; padding-rigth:10px">
              <div style=" margin:0px;">
                  <i class="fa fa-envelope-o" aria-hidden="true" style="color: white; padding: 0px; display: inline-block; vertical-align: middle;font-size: 25px;"></i>
                <p style="text-align: left; color: white; padding: 0px;margin:10px 0px;display: inline-block; margin-left: 10px; vertical-align: middle;height: auto;width: auto;word-wrap: break-word; font-size:.8rem; font-weight: normal;"><?php echo $email; ?></p>
              </div>
              <div  style="margin:0px;">
                  <i class="fa fa-phone" aria-hidden="true" style="color: white; padding: 0; display: inline-block; vertical-align: middle;font-size: 25px;"></i>
                <p style="text-align: left; color: white; padding: 0px; margin:10px 0px; display: inline-block; margin-left: 10px; vertical-align: middle;height: auto;width: auto;word-wrap: break-word;font-size:.8rem;font-weight: normal;"><?php echo $phone; ?></p>
              </div>
         
          </td>
          <td style="width: auto; heigth:auto; margin: 0 auto; text-align: left;vertical-align: middle;">
                <?php echo $web_site ? '<div>
                            <i class="fa fa-globe" aria-hidden="true" style="color: white; padding: 0; display: inline-block; vertical-align: middle;font-size: 25px;"></i>
                            <p style="text-align: left;margin:10px 0px;color: white; padding: 0px; display: inline-block; margin-left: 10px; vertical-align: middle;height: auto;width: auto;word-wrap: break-word;font-size:.8rem;font-weight: normal;">' . $web_site . '</p>
                        </div>' : ''; ?>
              <div>
                    <i class="fa fa-map-marker" aria-hidden="true" style="color: white; padding: 0px; display: inline-block; vertical-align: middle;font-size: 25px;"></i>
                <p style="text-align: left; color: white;margin:10px 0px; padding: 0px; display: inline-block; margin-left: 10px; vertical-align: middle;height: auto;width: auto;word-wrap: break-word;font-size:.8rem;font-weight: normal;"><?php echo $address; ?></p>
              </div>
          </td>
        </tr>
      </table>
    </footer>
  </div>
</body>

</html>