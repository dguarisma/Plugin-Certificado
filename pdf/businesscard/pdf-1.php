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
            background-image: url(<?php echo $background_front; ?>);
            text-align: center;
        }

        #back {
            background-image: url(<?php echo $background_back; ?>);
            padding-bottom: 30px;
        }
        #front>img {
            max-height: 100px;
            margin-top: 40px;
        }

        #front>p {
            margin-top: 155px;
            font-size: 1.3em;
            position: relative;
        }

        #front p span {
            font-weight: 600;
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
            position: relative;
            display: table-cell;
            width: 200px;
            word-wrap: break-word;
        }

        #back>div p.name {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 5px;
            margin-top: 55px;
            word-wrap: break-word;
            text-transform: capitalize;
        }

        #back div p.position {
            font-size: .7rem;
            color: #393939;
            font-weight: 100;
            margin: 0px;
        }

        #back div.position::after {
            content: "";
            position: absolute;
            top: 45%;
            left: 0;
            right: 0;
            width: 75%;
            margin: 0 auto;
            height: 2px;
            background-image: linear-gradient(to right, #039ABC, black);
        }

        #back .details {
            margin-top: 120px;
            word-wrap: break-word;
            display: inherit;
            width: 265px;
            padding-bottom: 0px;
            text-align: left;
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
            font-weight: 100;
            color: white;
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
                    <img src="<?php echo $uploaded_images['logo']; ?>" alt="logo brand">
                    <div>
                        <p><?php echo $slogan ? $slogan : ''; ?></p>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="back">
                    <div>
                        <p class="name"><?php echo $nameUser . ' ' . $surname; ?></p>
                        <p class="position"><?php echo $job_profile; ?></p>
                    </div>
                    <div class="details">
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>
                                <?php echo $address; ?>
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
                                <?php echo $email; ?>
                            </p>
                        </div>
                        <?php echo $web_site ? '<div>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <p>' . $web_site . '</p>
                        </div>' : ''; ?>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
