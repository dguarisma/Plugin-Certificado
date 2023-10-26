<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $font_css_url; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html,
        body {
            margin: 0 auto;
            padding: 0;
            font-family: proxima-nova-light, sans-serif !important;
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
        #front>img {
            max-height: 150px;
            max-width: 150px;
            margin-top: 60px;
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
        #back>div:nth-child(1) img{
            max-width: 190px;
            height: auto;
            width: 190px;
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
            background: #2798BA;
            border: 2px solid white;
            border-radius: 100%;
            color: white;
            height: 30px;
            width: 30px;
            text-align: center;
        }
        #back>div p.name {
            font-size: 1.2rem !important;
            font-weight: 600;
            color: #484646;
            margin-top: 30px;
            word-wrap: break-word;
            text-transform: capitalize;
            padding-bottom: 0px;
        }

        #back div p.position {
            font-size: 1rem !important;
            color: #484646;
            font-weight: 100;
            margin: 0px;
            padding-top: 0px;
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
            font-weight: 100;
            color: black;
            line-height: 1.5;
            display: inline-block;
            vertical-align: middle;
            padding: 5px;
        }
    </style>
</head>
<body class="container">
    <table class="business-hor">
        <tr>
            <td>
                <div id="front">
                         <img src="<?php echo $uploaded_images['logo']; ?>"  alt="logo brand">
                    <div><p><?php echo $slogan ? strtoupper($slogan) : ''; ?></p></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="back">
                    <div style=" width:200px; heigth:200px; padding-left:20px; padding-right:20px; text-align: right; margin-top">
                        <img src="<?php echo $uploaded_images['logo']; ?>"  alt="logo brand" style="text-align: end;max-height: 150px;max-width: 150px;">
                       
                    </div>
                    <div class="details">
                        <div style="text-align: center;margin-bottom: 10px;">
                          <p class="name"><?php echo ucfirst(strtolower($forename )) . ' ' . ucfirst(strtolower($surname)); ?></p>
                          <br/>
                           <p class="position"><?php echo strtoupper($job_profile); ?></p>
                        </div>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>
                                <?php echo strtolower($address); ?>
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>
                                 <?php echo $phone; ?>
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>
                              <?php echo strtolower($email); ?>
                            </p>
                        </div>
                     <?php echo $web_site ? '<div>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <p>' . strtolower($web_site ). '</p>
                        </div>' : ''; ?>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
