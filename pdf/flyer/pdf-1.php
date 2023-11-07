<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?php echo $font_css_url; ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  html,
  body {
    margin: 0;
    padding: 0;
    font-family: proxima-nova-light, sans-serif !important;
    width: 825px;
    margin: 0 auto;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative
  }


  .header-table {
    position: absolute;
    top: 138px;
    z-index: 1;
  }

  .containerPhoto {
    border-radius: 50%;
    width: 290px;
    height: 290px;
    margin-left: 42.5px;
    margin-top: 74.5px;
    aspect-ratio: auto 1/1;
          position: relative;
  }

  .containerPhoto img {
    margin: auto;
    border-radius: 50%;
   max-width: 100%;
      max-height: 100%;
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

  }

  ul {
    list-style-type: none;
  }

  li {
    line-height: 1.5;
    background: url('https://www.certificadoweb.com/wp-content/uploads/2023/09/viñeta-removebg-preview.png') left center no-repeat;
    background-size: 25px;
  }
</style>
<?php
$imageUrl = $uploaded_images['photo'];
if ($imageUrl === null) {
    $imageUrl =  '';
}
?>

<body class="main" style="background-image: url('<?php echo $background; ?>');">
  <table class="header-table">
    <tr>
      <td>
          <div class="containerPhoto">
            <img src="<?php echo $imageUrl; ?>" />
          </div>
      </td>
      <td style="text-align: center; vertical-align: middle; position:relative;width: 350px;height: 150px;">
        <div style="width: 220px;height: 220px;overflow: hidden;position: relative; margin: 0 auto;top:40px; right:10px">
          <img src="<?php echo $uploaded_images['image']; ?>" alt=""
            style="max-width: 100%;max-height: 100%;position: absolute; top: 50%; left: 50%;transform: translate(-50%, -50%);">
        </div>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <h1 style="font-size: 2rem;font-weight: 400;">Sobre nosotros.</h1>
        <p style="margin: 0;padding: 2px;color:#7E7E7E; margin-bottom:10px;height: auto;width: 390px;word-wrap: break-word;">
          <?php echo $about_us; ?>
        </p>
      </td>
    </tr>
    <tr>
      <td style="padding: 2px;padding-left: 0px; width:400px;"></td>
      <td style="text-align: left;padding: 2px; width: 400px;">
        <h3 style="font-size: 1.5rem; color:#404040;margin-bottom:5px;font-weight: normal;">&iquest;Por qu&eacute; elegirnos?</h3>
   
        <ul style="text-align: left; padding:0px;">
          <?php
              $lines = explode(".", $why_choose_us);
              for ($i = 0; $i < min(count($lines), 3); $i++) {
                  $linea = trim($lines[$i]);
                  if (!empty($linea)) {
              ?>
          <li style="padding-left: 2px;">
            <p style="margin: 0;padding:10px 0px;padding-left: 35px;color:#7E7E7E; height: auto;width: 360px;word-wrap: break-word;">
              <?php echo $linea; ?>
            </p>
          </li>
          <?php }
                } ?>
        </ul>
      </td>
    </tr>

  </table>
  <div style="position:absolute; bottom:110px; width:390px;">
    <table width="100%">
      <tr>
        <td width="50px">
          <img style="color: white; display: inline-block;"
            src="https://www.certificadoweb.com/wp-content/uploads/2023/09/estrategia.png" alt="" width="50px"
            height="50px">
        </td>
             <td style="padding: 15px 5px; width: 390px; overflow: hidden;">
          <h3 style="margin: 0; color: #404040; font-size: 1.3rem; padding-bottom: 5px; font-weight: normal;text-transform: capitalize;"><?php echo $titel_1; ?></h3>
          <p style="margin: 0; padding: 5px; padding-top: 2px; color: #7E7E7E; height: auto;width: 300px;word-wrap: break-word;">
            <?php echo $service_1; ?>
          </p>
        </td>
      </tr>
      <tr>
        <td width="50px">
          <img style="color: white; display: inline-block;"
            src="https://www.certificadoweb.com/wp-content/uploads/2023/09/grafico.png" alt="" width="50px"
            height="50px">
        </td>
        <td style="padding:15px 5px">
          <h3 style="margin: 0;  color:#404040; font-size: 1.3rem;padding-bottom:5px;font-weight: normal;text-transform: capitalize;"> <?php echo $titel_2; ?></h3>
          <p style="margin: 0;padding: 5px; padding-top:2px; color:#7E7E7E;height: auto;width: 300px;word-wrap: break-word;">
            <?php echo $service_2; ?>
          </p>
        </td>
      </tr>
      <tr>
        <td width="50px">
          <img style="color: white; display: inline-block;"
            src="https://www.certificadoweb.com/wp-content/uploads/2023/09/menu.png" alt="" width="50px" height="50px">
        </td>
        <td style="padding:15px 5px">
          <h3 style="margin: 0;  color:#404040; font-size: 1.3rem;padding-bottom:5px;font-weight: normal;text-transform: capitalize;"><?php echo $titel_3; ?></h3>
          <p style="margin: 0;padding: 5px; padding-top:2px;color:#7E7E7E;height: auto;width: 300px;word-wrap: break-word;">
            <?php echo $service_3; ?>
          </p>
        </td>
      </tr>
    </table>
  </div>
  <div style="border:0px solid red;position: absolute; bottom:0px; width:800px">
    <table width="800px">
      <tr style="margin-top:0px">
        <td style="text-align: left;color: white; width:420px; font-weight: normal;padding:0px; padding-left:25px; line-height: 1;">
        <p style="padding:0px"><?php echo $email; ?></p>
           <p style="padding:0px;height: auto;width: 390px;word-wrap: break-word;"> <?php echo $web_site; ?></p>
        </td>
        <td style="text-align: center;margin: 0;color: white; ">
          <p style="margin: 0; font-weight: Medium; ">N&uacute;mero de celular:
            <?php echo $phone ; ?>
          </p>
        </td>
      </tr>
    </table>
  </div>
</body>