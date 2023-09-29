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
		background-position: top center;
	}


	.header-table {
	
		position: absolute;
		margin-top: 238px;
	}

	.containerPhoto {
		border: 10px solid #2798ba;
		border-radius: 100%;
		width: 362px;
		margin-left: -6px;
		height: 362px;
		margin-top: -30px;
	}

	.containerPhoto img {
		margin: auto;
		border-radius: 100%;
		border: 2px solid grey;

		max-width: 100%;
		max-height: 100%;
		display: block;
	}

	ul {
		list-style-type: none;
	}

	li {
		padding-left: 40px;
		line-height: 1.5;
		background: url('https://www.certificadoweb.com/wp-content/uploads/2023/09/vinﾌテta-removebg-preview.png') left center no-repeat;
		background-size: 25px;
	}
</style>

<body class="main" style="background-image: url('<?php echo $background; ?>');">

	<table class="header-table">
		<tr>
			<td style="padding-left: 0px; width:400px;">
				<div>
					<div class="containerPhoto">
						<img
						width="465px" height="465px"
							src="<?php echo $uploaded_images['photo']; ?>">
					</div>
				</div>
			</td>
			<td style="text-align:center; margin:0 auto;">
				<img src="<?php echo $uploaded_images['logo']; ?>"
					alt="" style="height: auto;width: 150px;">

			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<h2>Sobre Nosotros</h2>
				<p style="margin: 0;padding: 2px;"><?php echo $about_us; ?></p>
			</td>
		</tr>
		<tr>
			<td style="padding: 2px;">
				<table cellpadding="10">
					<tr>
						<td>
							<img style="color: white; display: inline-block;"
								src="https://www.certificadoweb.com/wp-content/uploads/2023/09/estrategia.png" alt=""
								width="50px" height="50px">
						</td>
						<td>
							<!-- <h3 style="margin: 0;">Estrategia empresarial</h3> -->
							<p style="margin: 0;padding: 5px;"><?php echo $services_1; ?>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<img style="color: white; display: inline-block;"
								src="https://www.certificadoweb.com/wp-content/uploads/2023/09/grafico.png" alt=""
								width="50px" height="50px">
						</td>
						<td>
							<!-- <h3 style="margin: 0;">Mercado</h3> -->
							<p style="margin: 0;padding: 5px;"><?php echo $services_2; ?>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<img style="color: white; display: inline-block;"
								src="https://www.certificadoweb.com/wp-content/uploads/2023/09/menu.png" alt=""
								width="50px" height="50px">
						</td>
						<td>
							<!-- <h3 style="margin: 0;">Nivel Corporativo</h3> -->
							<p style="margin: 0;padding: 5px;"><?php echo $services_3; ?>
							</p>
						</td>
					</tr>
				</table>
			</td>
			<td style="text-align: left;padding: 2px; width: 400px">
				<h3> Por que elegirnos?</h3>
				<ul style="padding: 2px">
					<li>
						<?php echo  $why_choose_us; ?>
					</li>
				</ul>
			</td>
		</tr>
	<!--	<tr>
			<td style="text-align: center;color: white;padding-top: 65px;border:1px solid red">Company adress sologan here
			</td>
			<td></td>
		</tr>
		<tr>
			<td style="text-align: center;color: white;">www.alion.com.co</td>
			<td style="text-align: center;margin: 0;color: white;">
				<p style="margin: 0;">Nﾃｺmero de celular: 00 123 456 789</p>

			</td>
		</tr>-->
		<table>
</body>