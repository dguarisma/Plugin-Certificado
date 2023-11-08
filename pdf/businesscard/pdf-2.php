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
    font-weight: 400;
    src: url('https://fonts.gstatic.com/s/muli/v18/4UaBrEp5PjOmqZdr-XwZg.woff2') format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
    font-family: 'Muli';
    font-weight: 700;
    src: url('https://fonts.gstatic.com/s/muli/v18/4UaBrEp5PjOmqZdr-XwZg.woff2') format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
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
            background-image: url('<?php echo $background_front; ?>');
            text-align: center;
        }

        #back {
            background-image: url('<?php echo $background_back; ?>');
            padding-bottom: 30px;
        }
        #front .frontContainerLogo{
            width: 200px;
            height: 100px;
            overflow: hidden;
            position: relative;
            top:85px;
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

        #front div {
            color: white;
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
            position: relative;
            display: table-cell;
            width: 200px;
            height:200px;
         
            vertical-align: middle;
            word-wrap: break-word;
        }
        #back>div:nth-child(1) img{
            max-width:190px;
            height: auto;
            width: 170px;
               margin-top:50px;
        }
        #back>div:nth-child(1)::after {
            content: "";
            position: absolute;
            top: 40px;
            bottom: 0;
            left: 95%;
            border-left: 2px solid #039ABC;
            transform: translateX(-50%);
            height: 240px;
        }    
    
        #back .details {
            word-wrap: break-word;
            display: inherit;
            width: 260px;
            padding-bottom: 0px;
            text-align: center;
              padding-top: 30px;
        }

        #back .details div {
            position: relative;
            padding: 3px 0px;
            text-align: left;
        }

        #back .details div i {
            display: inline-block;
            position: relative;
            vertical-align: middle;
            background: transparent;
            border:0px solid #2798BA;
            border-radius: 100%;
            color: #2798BA;
            height: 25px;
            width: 25px;
            text-align: center;
        }
        #back div p.name {
            font-size:1.4rem !important;
            font-weight: 700;
            color: #6B6B6B;
            margin-top: 30px;
            word-wrap: break-word;
            text-transform: capitalize;
            padding-bottom: 0px;
                     font-family: 'Muli';
        }

        #back div p.position {
            font-size: 1rem !important;
            color: #484646;
            font-weight: 100;
            margin: 0px;
            padding-top: 0px;
            text-align: center;
            width:100%;
              font-family: Muli;
        }

        #back .details div i::before {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: block;
        }

        #back .details p {
            font-size: 0.9em;
            margin: 0px;
             font-weight: normal;
            line-height: 1;
            display: inline-block;
            vertical-align: middle;
            padding: 1px;
            color:#8A8A8A;
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
                        <img src="<?php echo $uploaded_images['logo']; ?>"  alt="logo brand">
               </div>
                    <div>
                      <?php echo $web_site ? '
                            <p>' . strtolower($web_site) . '</p>': ''; ?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="back">
                    <div>
                           <img src="<?php echo $uploaded_images['logo']; ?>"  alt="logo brand">
                    </div>
                    <div class="details">
                        <div style="text-align: center;margin-bottom: 10px;">
                           <p class="name" style="color:#848384"><?php echo ucfirst($forename ) . ' ' . ucfirst($surname); ?></p>
                           <br/>
                           <p class="position" style="color:#A6A6A6; padding-top:10px;"><?php echo strtoupper($job_profile); ?></p>
                        </div>
                        <div style="padding:0px; margin:0px;">
                            <i class="fa fa-map-marker" aria-hidden="true"  style="padding:0px; margin:0px;"></i>
                            <p style="padding:0px; margin:0px;">
                                   <?php echo strtolower($address); ?>
                            </p>
                        </div>
                           <div style="margin:0px">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>
                               <?php echo strtolower($email); ?>
                            </p>
                        </div>
                     
                     
                     <?php echo $web_site ? '<div style="margin:0px">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <p>' . strtolower($web_site) . '</p>
                        </div>' : ''; ?>
                           <div style="margin:0px">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>
                                    <?php echo $phone; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
