<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../CSS/contact.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
<center>
        <nav>
        
            <div="menu">
            <ul>
                <li><a href="indexanglais.html">HOME</a></li>
                <li><a href="giteCasaMiaanglais.php">CASA MIA</a></li>
                <li><a href="alentours_wimereuxanglais.html">TOURISM</a></li>
                <img class="logo" src="../photos/Logo.png">
                <li><a href="reservationCasaMia.php">RESERVATION</a></li>
                <li><a href="contact-Casa-Miaanglais.php">CONTACT</a></li>
                <li><a href="../index.html">FR</a></li>
            </ul></div="menu"></nav></center>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2523.3584516318365!2d1.6126584157096144!3d50.76892847952063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2e8d87be5555%3A0xaaa95c77be14524c!2sCasamia!5e0!3m2!1sfr!2sfr!4v1589037628223!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
                    <p> contact-me </p>
                    <?php
					if(isset($_POST['mailform']))
					{
						if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
						{
							$header='MIME-Version: 1.0\r\n';
							$header.='From:"gmail.com"<olivia.goguillon62@gmail.com>'."\n";


							$message='<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br/>
				  			<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br/>
				  			<br/>
							'.nl2br($_POST['message']).'
							<br/>';

							mail("olivia.goguillon62@gmail.com", "CONTACT - Casa Mia", $message, $header);
							$msg="Le mail a été envoyé !";
						}
						else
						{
							$msg="Le mail n'a pas été envoyé. Veuillez remplir tous les champs !";
						}
					}
					?>

    		<form method="POST" action="">
			<input type="text" name="nom" placeholder="Your name" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
			<input type="email" name="mail" placeholder="Your email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
			<textarea name="message" placeholder="Your message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br />
			<input type="submit" value="Envoyer !" name="mailform"/>
			</form>
			<script src="https://www.google.com/recaptcha/api.js" async defer></script>
			<div class="g-recaptcha" data-sitekey="la_clé_du_site"></div>
			<button class="g-recaptcha" data-sitekey="la_clé_du_site" data-callback='onReCaptchaValid'>Send</button>
			<script type="text/javascript">
  				function onReCaptchaValid(token) {
    			document.getElementById('id_du_formulaire').submit();
  			}
			</script>
			
        <center>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
        ?>
        </center>
		<table align="center" style="text-align: center; width: 540px;	border-style: none;	border-width: 0px;	border-collapse: collapse;	margin: 0 auto;">	<tr>		<td><iframe src="https://www.shared-house.com/reviews_embed.php?numero=67268&langue=fr&embed=5851375fa33e5bafe06d75de4d549f0d" style="border-style: none; border-width: 0px;"  scrolling="yes" frameborder="0" height="875" width="540" title="" allowtransparency="true"></iframe></td>	</tr>	<tr><td style="line-height:1;vertical-align: top;font-family: Verdana; font-size: 11px; text-align: center; font-weight: normal; ">Système d'appréciations pour les locations de vacances par <a style="font-weight: normal; color: #006600;" href="https://www.shared-house.com">Shared-house.com</a></td>	</tr></table>
</html>
    