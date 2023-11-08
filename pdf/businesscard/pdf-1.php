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
      background-image: url(<?php echo $background_front; ?>);
      text-align: center;
         position: relative;
    }

    #back {
      background-image: url(<?php echo $background_back; ?>);
      padding-bottom: 30px;
    }

    #front .frontContainerLogo{
            width: 200px;
            height: 100px;
            overflow: hidden;
            position: relative;
            top:40px;
            margin:0 auto;
    }
    #front .frontContainerLogo img{
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
    }
    #front>p {
    margin-top: 150px;
    font-weight: bold;
    position: relative;
    }

    #front p span {
      font-weight: bold;
      color: var(--col0);
    }

    #front div {
      color: rgb(230, 230, 230);
      width: 100%;
      height: auto;
      position: absolute;
      bottom: 39px;
      text-align: right;
      right: 0px;
      word-wrap: break-word;
    }

    #front div p {
      margin: 0;
      font-size: 1.5rem;
      padding-right: 30px;
    }

    #back {
      padding-bottom: 30px;
      display: table;
      margin-left: auto;
      margin-right: auto;
    }

    #back>div:nth-child(1) {
      text-align: center;
      padding: 15px;
      margin-top:20px;
      position: relative;
      display: table-cell;
      width: 200px;
      word-wrap: break-word;
    
    }

    #back>div p.name {
      margin-bottom: 5px;
      margin-top: 55px;
         font-family: Muli;
               font-weight: 700;
      word-wrap: break-word;
      text-transform: capitalize;
    }

    #back div p.position {
      font-size: .7rem;
      color: #393939;
      margin: 0px;
         font-family: Muli;
             font-weight: 100;
    }

    #back div.position::after {
      content: "";
      position: absolute;
      top: 65%;
      left: 0;
      right: 0;
      width: 75%;
      margin: 0 auto;
      height: 56px;
      background-image: linear-gradient(to right, #039ABC, black);
    }

    #back .details {
      margin-top: 80px;
      word-wrap: break-word;
      display: inherit;
      width: 270px;
      padding-bottom: 0px;
      text-align: left;
      left:200px;
      position:absolute;

    }

    #back .details div {
      position: relative;
      padding: 2px 0px;
    }

    #back .details div:nth-child(1) {
      padding-left: 17%;
    }

    #back .details div:nth-child(2) {
      padding-left: 12%;
    }

    #back .details div:nth-child(3) {
      padding-left: 6%;
    }

    #back .details div:nth-child(4) {
      padding-left: 0%;
    }

    #back .details div i {
      display: inline-block;
      position: relative;
      vertical-align: middle;
      background: transparent;
      border: 2px solid white;
      border-radius: 100%;
      color: white;
      height: 30px;
      width: 30px;
      text-align: center;
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
      color: white;
      line-height: 1.5;
      display: inline-block;
      vertical-align: middle;
      padding: 5px;
           font-family: Muli;
    }
  </style>
</head>

<body class="container">
  <table class="business-hor" border="0">
    <tr>
      <td>
        <div id="front">
          <div class="frontContainerLogo">
              <img src="<?php echo $uploaded_images['logo']; ?>" alt="logo brand">
          </div>
          <div style="padding-left:30px">
            <p style="text-transform: Capitalize; font-size:.9rem;  font-weight: bold;">
              <?php echo $slogan ? $slogan : ''; ?>
            </p>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div id="back">
          <div>
            <h4 class="name" style="font-size:1.5rem; margin:0px; margin-top:5px;text-transform: capitalize;;">
             <strong> <?php echo ucfirst(strtolower($forename )) . ' ' . ucfirst(strtolower($surname)); ?></strong>
            </h4>
            <p class="position" style="text-transform: uppercase;; font-size 1.3em; font-weight: normal;padding-top:0px">
              <?php echo $job_profile; ?>
            </p>
          </div>
          <div class="details">
            <div>
                   <img src="https://alion.com.co/wp-content/uploads/2023/11/ic-1-1.png" width="40px" heigth="40px" />
              <p>
                <?php echo $address; ?>
              </p>
            </div>
            <div>
                <img src="https://alion.com.co/wp-content/uploads/2023/11/ic-2-1.png" width="40px" heigth="40px" />
              <p>
                <?php echo $phone; ?>
              </p>
            </div>
            <div>
                   <img src="https://alion.com.co/wp-content/uploads/2023/11/ic-3-1.png" width="40px" heigth="40px" />
              <p>
                <?php echo $email; ?>
              </p>
            </div>
            <?php echo $web_site ? '<div>
                            <img src="https://alion.com.co/wp-content/uploads/2023/11/ic-4.png" width="40px" heigth="40px" />
                            <p>' . $web_site . '</p>
                        </div>' : ''; ?>
          </div>
        </div>
      </td>
    </tr>
  </table>
</body>

</html>