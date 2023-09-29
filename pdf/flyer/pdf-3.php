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
      background-size: contain;
      margin: 0 auto;

      background-position: center;
    }
    	ul {
		list-style-type: none;
	}

	li {
		line-height: 1.5;
		background: url('https://www.certificadoweb.com/wp-content/uploads/2023/09/Captura_de_pantalla_2023-09-13_a_la_s__3.49.54_p.m.-removebg-preview.png') right center no-repeat;
		background-size: 25px;
		padding-right: 10px;
	}
  </style>
</head>

<body>
  <div class="main">
    <table style="margin: auto;">
      <tr>
        <td style="padding-left: 335px;">
          <div
            style="background-color: #2798ba;padding: 10px;width: 190px;margin: auto;display: grid;border-radius: 50px 0 0 50px;position: relative;left: 76px; text-align:center">
            <img
              src="<?php echo $uploaded_images['logo']; ?>"
              width="100" height="70" style="background-color: #2798ba;margin: auto;">
          </div>
        </td>
      </tr>
    </table>
        <div style="position: absolute; top: 270px; right: 105px; width: 300px;">
          <h3 style="text-align: center; color: white;  font-size: 30px;">
          <?php echo $about_us; ?>
          </h3>
        </div>
           <div style="position: absolute; top: 500px; right: 60px;width: 300px;">
         <ul style="padding: 2px; text-aling: left">
					<li>
					 <p style="color:white;">	<?php echo $service_1; ?></p>
					</li>
					<li>
						 <p style="color:white;">	<?php echo $service_2; ?></p>
					</li>
					<li>
						 <p style="color:white;">	<?php echo $service_3; ?></p>
					</li>
						<li>
						 <p style="color:white;">	<?php echo $service_4; ?></p>
					</li>
				</ul>
        </div>
    <table style="margin: auto; margin-top: 63px;">
      <tbody>
        <tr>
          <td></td>
          <td style="text-align: end;color: white;padding-right: 100px;font-size: 40px; margin-top: 40px"></td>
        </tr>
        <tr>
          <td></td>
          <td style="text-align: end;color: white;padding-right: 100px;font-size: 20px;"></td>
        </tr>
        <tr>
          <td>
            <img src="<?php echo $uploaded_images['photo']; ?>"
              alt="" width="225px" height="auto" style="padding-top: 257px;padding-right: 158.5px;">

          </td>
        </tr>
      </tbody>
    </table>
    <footer>
      <table style="width: 800px; padding: 2px; margin-top: 180px">
        <tbody>
          <tr>
            <td style="width: 500px; padding: 2px;">
              <div style="padding-top: 50px;padding-left: 80px;width: min-content;">
                <div style="width: max-content;">
                  <h1 style="color: #2798ba;">RESERVA YA<span style="font-size: 25px  ;padding: 20px;color: black;"><?php echo $phone; ?></span></h1>
                </div>
                <p style="padding: 2px;"><?php echo $why_choose_us; ?></p>
              </div>
            </td>
            <td style="width: 200px;">
              <table style="text-align:left; width: 100px; padding:3px;">
             <!--    <tr>
                  <td>
                 <div style="background-color: #2798ba; margin: auto; padding: 10px; width: 24px; height: 24px; border-radius: 50%; text-align: center;">
                      <i class="fa fa-facebook" aria-hidden="true" style="color: white; font-size: 20px; line-height: 24px;"></i>
                    </div>
                  </td>
                    <td>
                 <div style="background-color: #2798ba; margin: auto; padding: 10px; width: 24px; height: 24px; border-radius: 50%; text-align: center;">
                      <i class="fa fa-instagram" aria-hidden="true" style="color: white; font-size: 20px; line-height: 24px;"></i>
                    </div>
                  </td>
                </tr> -->
              </table>
            </td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </tbody>
      </table>
    </footer>
  </div>
</body>
</html>