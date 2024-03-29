<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      font-family: proxima-nova-light, sans-serif !important;

    }

    .main {
      background-image: url("<?php echo $background; ?>");
      height: 1000px;
      width: 800px;
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0 auto;
      background-position: center;
      overflow: hidden;
    }

    ul {
      list-style-type: none;
    }

    li {
      vertical-align: middle;
      padding: 15px 0px;
      background: url('https://www.certificadoweb.com/wp-content/uploads/2023/09/Captura_de_pantalla_2023-09-13_a_la_s__3.49.54_p.m.-removebg-preview.png') right center no-repeat;
      background-size:60px;
    }

    .logo-container {
      background-color: #2798ba;
      padding: 10px;
      width: 190px;
      height: 70px;
      margin: auto;
      display: grid;
      border-radius: 50px 0 0 50px;
      position: relative;
      left: 119px;
      text-align: center;
    }

    .logo-container img {
      margin: auto;
      max-width: 90%;
      max-height: 90%;
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>
<?php
// Obtén la URL de la imagen
$imageUrl = $uploaded_images['photo'];

// Verifica si la URL de la imagen es nula
if ($imageUrl === null) {
    $imageUrl =  '';
}
?>

<body>
  <div class="main">
    <table style="margin: auto;">
      <tr>
        <td style="padding-left: 335px; padding-top:40px">
          <div class="logo-container">
            <img src="<?php echo $uploaded_images['image']; ?>">
          </div>
        </td>
      </tr>
    </table>
    <div style="position: absolute; top: 170px; right: 100px; width: 300px;">
      <h1 style="text-align: center; color: white; font-size: 43px; width: 300px;font-weight: bold; text-transform: uppercase;">
        <?php echo $business_name; ?>
      </h1>
    </div>
    <div style="position: absolute; top: 380px; right: 30px;width: 330px;">
      <ul style=" text-align: right;">
        <li>
             <div style="padding-right:70px">
             <h3 style="color: white;margin:0px;text-transform: capitalize;padding-bottom:10px;"><?php echo $titel_1; ?></h3>
              <p style="color: #FDFEFF;font-weight: normal;padding:0px;margin:0px;height: auto;width: auto;word-wrap: break-word;"><?php echo $service_1; ?></p>
             </div>
        </li>
        <li>
         <div style="padding-right:70px">
             <h3 style="color: white;margin:0px;text-transform: capitalize;padding-bottom:10px;"><?php echo $titel_2; ?></h3>
              <p style="color: #FDFEFF;font-weight: normal;padding:0px;margin:0px;height: auto;width: auto;word-wrap: break-word;"><?php echo $service_2; ?></p>
             </div>
        </li>
        <li>
            <div style="padding-right:70px">
             <h3 style="color: white;margin:0px;text-transform: capitalize;padding-bottom:10px;"><?php echo $titel_3; ?></h3>
              <p style="color: #FDFEFF;font-weight: normal;padding:0px;margin:0px;height: auto;width: auto;word-wrap: break-word;"><?php echo $service_3; ?></p>
             </div>
        </li>
        <li>
           <div style="padding-right:70px">
             <h3 style="color: white;margin:0px;text-transform: capitalize;padding-bottom:10px;"><?php echo $titel_4; ?></h3>
              <p style="color: #FDFEFF;font-weight: normal;padding:0px;margin:0px;height: auto;width: auto;word-wrap: break-word;"><?php echo $service_4; ?></p>
             </div>
        </li>
      </ul>
    </div>
    <div
      style="margin: auto; position: absolute; z-index:1; top: 413px; margin-left:120px; width:260px;height:260px; border-radius:100%; border: 1px solid #0098BA">
      <img src="<?php echo   $imageUrl ?>"
        style="max-width: 100%;max-height: 100%;display: block;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%); border-radius:100%;">
    </div>
    <div
      style="margin: auto; position: absolute; z-index:-1; top: 60px; margin-left:-150px; width:435px;height:435px; border-radius:100%; overflow: hidden;">
      <img src="<?php echo  $uploaded_images['photo_2'] ?>"
        style="max-width: 100%;max-height: 100%;display: block;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%); border-radius:100%;">
    </div>
    <footer style="position: absolute; z-index:-1; top: 910px; border:0px solid red; width: 730px; left:50px;">
      <table border="0">
        <tbody>
          <tr>
            <td style="width:500px; padding: 1px;padding-left: 0px;">
              <div style="padding-top: 30px;text-aling:left;">
                  <h2 style="color: #0098BA; margin-bottom:0px; font-weight: bold; font-size:1.3rem;height: auto;width: auto;word-wrap: break-word;">COMUNÍCATE YA<span
                      style="color:#393945;font-weight: normal; padding-left:15px;height: auto;width: auto;word-wrap: break-word;"><?php echo $phone; ?>
                    </span></h2>
                </div>
            </td>
            <td style="width: 120px; padding-left:10px; vertical-align: top;padding-top:50px">
              <div
                style="background-color: #2798ba; margin: auto; padding: 7px; width: 20px; height: 20px; border-radius: 50%; text-align: center; display: inline-block; vertical-align: middle; margin-right:15px">
                <i class="fa fa-facebook" aria-hidden="true" style="color: white; font-size: 18px;"></i>
              </div>
              <div
                style="background-color: #2798ba; margin: auto; padding: 7px; width: 20px; height: 20px; border-radius: 50%; text-align: center; display: inline-block; vertical-align: middle;">
                <i class="fa fa-instagram" aria-hidden="true" style="color: white; font-size: 18px;"></i>
              </div>
            </td>
          </tr>
          <tr><td></td></tr>
        </tbody>
      </table>
    </footer>
  </div>
</body>
</html>