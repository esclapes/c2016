<!DOCTYPE html>
<html lang="nl">
<head>

<title>Start vandaag nog met AppCare</title>

<meta charset="UTF-8">
<meta name="description" content="Webcare via WhatsApp. Berichten automatisch naar de juiste afdeling sturen. Meten hoeveel klanten je helpt.">
<meta property="og:description" content="Webcare via WhatsApp. Berichten automatisch naar de juiste afdeling sturen. Meten hoeveel klanten je helpt.">

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans">
<link rel="stylesheet" type="text/css" href="css/coosto.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/form.js"></script>

</head>
<body>

<div id="container-page">
	<div id="zone-header">
		<div id="zone-header-wrap">
			<h1>Start vandaag nog met AppCare</h1>
			<p>
				Een webcaretool maakt het gemakkelijk
			</p>
		</div>
	</div>
	<div id="zone-usp">
		<div id="zone-usp-wrap">
			<div class="one-usp">
				<img src="assets/whatsapp.png" alt="" />
				<h2>Geïntegreerde oplossing</h2>
				<p>
					Integreer WhatsApp met een webcaretool voor een optimale klantbeleving.
				</p>
			</div>
			<div class="one-usp">
				<img src="assets/messages.png" alt="" />
				<h2>Betere service</h2>
				<p>
					Berichten worden automatisch aan de juiste contactpersoon of afdeling toegewezen en overzichtelijk gesorteerd.
				</p>
			</div>
			<div class="one-usp">
				<img src="assets/kpis.png" alt="" />
				<h2>Meet je KPI's</h2>
				<p>
					Meet dagelijks hoeveel klanten je daadwerkelijk helpt door gebruik te maken van de unieke client case structuur.
				</p>
			</div>
		</div>
	</div>
	<div id="zone-contact">
		<div id="zone-contact-wrap">
			<h3>Meer weten over webcare via WhatsApp?</h3>
			<p>
				Laat dan hier je gegevens achter en we nemen z.s.m. contact met je op!
			</p>
			<form method="post" name="coosto" id="zone-contact-form" action="https://api.formbucket.com/f/mh9tkq7">
				<div class="form-row">
					<div class="form-row-left">
						<input type="text" name="first_name" placeholder="Voornaam" required />
					</div>
					<div class="form-row-right">
						<input type="text" name="last_name" placeholder="Achternaam" required />
					</div>
				</div>
				<div class="form-row">
					<input type="text" name="company" placeholder="Bedrijf" required />
				</div>
				<div class="form-row">
					<div class="form-row-left">
						<input type="email" name="email" placeholder="Zakelijk e-mail" required />
					</div>
					<div class="form-row-right">
						<input type="text" name="phone" placeholder="Telefoonnummer" required />
					</div>
				</div>
				<div class="form-row">
					<textarea name="comments" placeholder="Bericht (optioneel)" rows="5" cols="50"></textarea>
				</div>
				<div class="form-row">
					<button type="submit">Plan een gratis demonstratie</button>
				</div>
				<input type="hidden" name="time" value="<?php echo date('G:i'); ?>" />
				<p class="footnote">
					Met het versturen van dit formulier sta je toe dat wij je gerelateerde e-mails sturen.
				</p>
			</form>
			<div id="form-success">
				Bedankt voor je aanvraag!
			</div>
			<div id="form-error">
				Er gaat even iets mis. Probeer het nog een keer, of neem telefonisch contact met ons op.
			</div>
		</div>
	</div>
</div>

</body>
</html>

