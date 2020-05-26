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
                <li><a href="../index.html">ACCUEIL</a></li>
                <li><a href="HTML/gîteCasaMia.php">CASA MIA</a></li>
                <li><a href="alentours_wimereux.html">TOURISME</a></li>
                <img class="logo" src="../photos/logo.png">
                <li><a href=".html">RÉSERVATION</a></li>
                <li><a href="contact-Casa-Mia.php">CONTACT</a></li>
                <li><a href="co.php">LANGUE</a></li>
            </ul></div="menu"></nav></center>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2523.3584516318365!2d1.6126584157096144!3d50.76892847952063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2e8d87be5555%3A0xaaa95c77be14524c!2sCasamia!5e0!3m2!1sfr!2sfr!4v1589037628223!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
                    <p> Contactez-moi </p>
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
			<input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
			<input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
			<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br />
			<input type="submit" value="Envoyer !" name="mailform"/>
			</form>
			
        <center>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
        ?>
        </center>

</html>
    
