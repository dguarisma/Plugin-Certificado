<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    @font-face {
    font-family: 'Muli';
    font-weight: 300;
    src: url('https://fonts.gstatic.com/s/muli/v18/4UaBrEp5PjOmqZdr-XwZg.woff2') format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(https://fonts.gstatic.com/s/muli/v29/7Auwp_0qiz-afTLGLQjUwkQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(https://fonts.gstatic.com/s/muli/v29/7Auwp_0qiz-afTLGLQjUwkQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
    html,
    body {
      margin: 0 auto;
      padding: 0;
  font-family: Muli, sans-serif !important;
    }

    .business-hor {
      margin: 0 auto;
      text-align: center;
      width: 700px;
    }

    #front,
    #back {
      background-color: #fff;
      width: 500px;
      height: 270px;
      position: relative;
      border: 1px solid #ccc;
      background-size: cover;
      background-repeat: no-repeat;
      margin-top: 30px;
      margin-bottom: 30px;
      display: table;
      margin-left: auto;
      margin-right: auto;
    }

    #front {
      background-image: url('<?php echo $background_back; ?>');
      text-align: center;
    }

    #back {
      background-image: url('<?php echo $background_front; ?>');
      padding-bottom: 30px;
      background-size: contain;
    }

    #front .frontContainerLogo {
        width: 200px;
        height: 100px;
        overflow: hidden;
        position: relative;
        top: 92px;
        margin: 0 auto;
    }

    #front .frontContainerLogo img {
        max-width: 100%;
        max-height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #front div {
      color: #039ABC;
      width: 100%;
      height: auto;
      position: absolute;
      bottom: 10px;
      text-align: center;
      right: 0px;
      word-wrap: break-word;
    }

    #front div p {
        margin: 0;
        font-size: 1rem;
        font-family: Muli;
    }

    #back {
      padding-bottom: 30px;
      display: table;
      margin-left: auto;
      margin-right: auto;
    }

    #back>div:nth-child(1) {
      text-align: end;
      padding: 15px;
      position: relative;
      display: table-cell;
      width: 230px;
      vertical-align: middle;
      word-wrap: break-word;

    }

    #back>div:nth-child(1) img {
      max-width: 220px;
      height: auto;
      width: 200px;
      margin-top:-60px;
    }

    #back .details {
      word-wrap: break-word;
      display: inherit;
      width: 240px;
      padding-bottom: 0px;
      text-align: center;

    }

    #back .details div {
      position: relative;
      padding: 2px 0px;
      text-align: left;
      padding-left: 20px;
    }

    #back .details div i {
      display: inline-block;
      position: relative;
      vertical-align: middle;
      background: #039ABC;
      border: 2px solid white;
      border-radius: 100%;
      color: white;
      height: 30px;
      width: 30px;
      text-align: center;
    }

    #back>div p.name {
      font-size: 1.4rem !important;
      font-weight: 700;
          font-family: Muli;
      color: #484646;
      margin-top: 30px;
      word-wrap: break-word;
      text-transform: capitalize;
      padding-bottom: 0px;
    }

    #back div p.position {
      font-size: 1rem !important;
      color: #484646;
      font-weight: normal;
          font-family: Muli;
      margin: 0px;
      padding-top: 0px;
      text-align: center;
    }

 #back .details{
        position: relative;
 }
    #back .details div i::before {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: block;
    }

    #back .details p {
      font-size: 0.8em;
      margin: 0px;
      font-weight: normal;
      color: black;
      line-height: 1.5;
      display: inline-block;
      vertical-align: middle;
      padding: 5px;
       font-family: Muli;
    }
  </style>
</head>

<body class="container">
  <table class="business-hor">
    <tr>
      <td>
        <div id="front">
          <div class="frontContainerLogo">
            <img src="<?php echo $uploaded_images['logo']; ?>" alt="logo brand">
          </div>
          <div>
            <p style="color:#039ABC; font-size:.8rem;font-weight: bold;text-transform: capitalize;">
              <?php echo $slogan ? $slogan : ''; ?>
            </p>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div id="back">
          <div style=" width:200px; heigth:200px; padding-left:20px; padding-right:20px; text-align: right; ">
            <img src="<?php echo $uploaded_images['logo']; ?>" alt="logo brand"
              style="text-align: end;max-height: 150px;max-width: 150px;">

          </div>
          <div style="width:205px;position:absolute; top:200px; left: 44px; text-aling:center; ">
            <p style="color:white; font-size:.8rem;font-weight: normal;text-transform: capitalize;">
              <?php echo $slogan ?$slogan: ''; ?>
            </p>
          </div>
          <div class="details">
            <div style="text-align: center;margin-bottom: 0px; margin-top:10px">
              <p class="name" style="padding:0px; ">
               <strong> <?php echo ucfirst($forename ) . ' ' . ucfirst($surname); ?></strong>
              </p>
              <p class="position" style=" color:#039ABC; padding:0px;">
                <?php echo strtoupper($job_profile); ?>
              </p>
              <p class="position"
                style="margin-bottom:0px; width:100%;  text-align:left;font-weight: normal;text-transform: capitalize; padding-left:25px;">
                <?php echo strtolower($address); ?>
                <div style="border-bottom:2px solid #484646; width:80%; margin-bottom:15px; margin-left:13px; " />
              </p>
            </div>
            
            <div style="border:0px solid red; text-align:left;margin-left:-16px;">
              <img src="https://alion.com.co/wp-content/uploads/2023/11/ic-1.png" width="40px" heigth="40px" />
              <p>
                <?php echo $phone; ?>
              </p>
            </div>
                <div style="border:0px solid red; text-align:left;margin-left:-16px;">
                <img src="https://alion.com.co/wp-content/uploads/2023/11/ic-2.png" width="40px" heigth="40px" />
              <p>
                <?php echo strtolower($email); ?>
              </p>
            </div>
            <?php echo $web_site ? '     <div style="border:0px solid red; text-align:left;margin-left:-16px;">
                               <img src="https://alion.com.co/wp-content/uploads/2023/11/ic-3.png" width="40px" heigth="40px" />
                            <p>' . strtolower($web_site ). '</p>
                        </div>' : ''; ?>
          </div>
        </div>
      </td>
    </tr>
  </table>
</body>

</html>