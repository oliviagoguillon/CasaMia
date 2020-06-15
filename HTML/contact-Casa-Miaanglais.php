<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
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
                
                    <h1> Contact-me </h1>
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
		
			
        <center>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
        ?>
        </center>

		</body>
                <footer>
                    <p>©2020 Gîte Casa Mia Wimereux</br>
                        Tel: 06 28 39 41 66</br>
                        Adresse: xxxxxxxxxxxxx </br>
                        Toute reproduction (textes et photos) est interdite sans autorisation. </br>
                        Mention légales</br>
                    </p>
                </footer>
				</html>
				

				<style>
		*{
	margin: 0px;
}
body{
	margin: 0px;
	padding: 0px;
    background-image: linear-gradient(white, #3F76BF);

}
nav{
	position: fixed;
	width:100%;
	background-color:#183853;
}

nav ul{
	margin:-2px;
	padding-right: 0px;
}

nav ul li{
	display: inline-block;
	padding: 8px 40px;
}

nav ul li a{
	text-decoration: none;
	color: #3F76BF;
	font: 13px Arial, Helvetica, sans-serif;
	font-weight: bold;
}

nav ul li a:hover{
    color:#3F76BF;
    border-bottom:2.5px #3F76BF dotted;
}
.logo{
        height: 75px;
        float: center;
        margin: 10px 0px;
    }

h1{
	text-align: center;
	margin-top: 30px;
	font-style: italic;
	font-size: 85px;
	color:#FFCBE2;
	margin-bottom: 30px;
	font-family: LaPolice;

}


iframe{
	width: 100%;
margin-top: 100px;

}

input{
    border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid white;
	outline: none;
	color: #FFCBE2;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px#183853 ;
	-moz-box-shadow: inset 1px 1px 4px #183853;
	-webkit-box-shadow: inset 1px 1px 4px #183853;
	background: #3F76BF;
	font-family: LaPolice;
    width:50%;
    margin-bottom: 15px;}

textarea{
    border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid white;
	font-family: LaPolice;
	outline: none;
	color: #FFCBE2;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #183853;
	-moz-box-shadow: inset 1px 1px 4px #183853;
	-webkit-box-shadow: inset 1px 1px 4px #183853;
	background: #3F76BF;
    width:50%;
}

button{
    background: #3F76BF;
	border: 1px solid #183853;
	padding: 5px 15px 5px 15px;
	color: #FFCBE2;
	box-shadow: inset -1px -1px 3px #183853;
	-moz-box-shadow: inset -1px -1px 3px #183853;
	-webkit-box-shadow: inset -1px -1px 3px #183853;
	border-radius: 3px;
	border-radius: 3px;
	font-family: LaPolice;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
    font-weight: bold;
   margin-top: 40px;
}
::placeholder{
	color:#FFCBE2;
	font-family: LaPolice;
}
form{
    text-align: center;
}


a{
	text-decoration: none;
	color: #FFCBE2;
}
p{
	font-family: LaPolice;
}

footer {
    display: flex;
    justify-content: center;
    padding: 25px;
	color: #fff;
	margin-top: 150px;
	background:#183853;
    opacity: 0.75;
}

  @font-face{
	font-family: LaPolice;
	src:url(../font/DancingScript-Regular.ttf);
}

</style>

    