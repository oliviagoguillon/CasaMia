<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../CSS/descriptiongite.css">
<link rel="stylesheet" type="text/css" href="../CSS/lightbox.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../JS/lightbox-plus-juery.min.js"></script>
</head>
<?php
 try{
$db = mysqli_connect("localhost","root","","CASAMIA");
}catch (Exception $e1){
echo("ERREUR");
}

//<?php

//database credentials
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'CASAMIA');
//define('DB_USER', 'CASAMIA');
//define('DB_PASS', 'jSe0J6FdG0m8');

//$db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASS);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<body>
    <center>
        <nav>
        
            <div="menu">
            <ul>
                <li><a href="../index.html">ACCUEIL</a></li>
                <li><a href="HTML/gîteCasaMia.php">CASA MIA</a></li>
                <li><a href="alentours_wimereux.html">TOURISME</a></li>
                <img class="logo" src="../photos/Logo.png">
                <li><a href=".html">RÉSERVATION</a></li>
                <li><a href="contact-Casa-Mia.php">CONTACT</a></li>
                <li><a href="co.php">LANGUE</a></li>
            </ul></div="menu"></nav></center>


                <div id="global">
                <div id="slideshow-container">
                    <div id="slideshow">
                        <img src="../photos/Chambre_Casa_Mia2.jpg" alt="Image 1" class="slideshow-image">
                        <img src="../photos/Salle_Casa_Mia.jpg"alt="Image 2" class="slideshow-image">
                        <img src="../photos/Salle_de_bain_Casa_Mia2.jpg" alt="Image 4" class="slideshow-image">
                        <img src="../photos/Jardin_Casa_Mia.jpg" alt="Image 5" class="slideshow-image">
                    </div>
                </div>
                </div>


                <script type="text/javascript">
                var Slideshow = (function() {
	            var self = {},
		            config = {
			        duration: 4,
			        container: {
				    width: 0,
				    height: 0
			                   }
		        };

	            setOptions = function() {
		        if (typeof options === 'object' && Object.keys(options).length > 0){
			        for (var property in options){
				        if (config[property] !== undefined){
					config[property] = options[property];
				        }
			        }
		        }
	            }
	            self.init = function(opts) {
		        options = opts || {};

		        setOptions();

		        execute();
	        }
	        execute = function() {
		    container = document.querySelector('#slideshow-container');
		    slideshow = document.querySelector('#slideshow');
		    images = Array.from(document.querySelectorAll('.slideshow-image'));

		if ((config.container.width && config.container.height) > 0)
		{
			setContainerStyle();
		}

		i = -1;

		play();
	}
	setContainerStyle = function() {
		container.style.position = 'relative';
		container.style.width = config.container.width + 'px';
		container.style.height = config.container.height + 'px';

		if (config.container.border !== undefined)
		{
			container.style.borderWidth = config.container.border.width + 'px';
			container.style.borderStyle = config.container.border.style;
			container.style.borderColor = config.container.border.color;
		}
	}
	play = function() {
		slideshow.classList.add('fadeOut');

		setTimeout(function() {
			slideshow.style.background = 'url(' + images[i].src + ') center';
			slideshow.style.backgroundSize = 'cover';
			slideshow.classList.remove('fadeOut');
		}, 1000);

		i++;
		if (i == images.length)
		{
			i = 0;
		}
		setTimeout(play, config.duration * 1000);
	}

	return self;
})();
                    Slideshow.init({
                        container:{
                            width:980,
                            height:570,
                            border:{
                                width:5,
                                style:'solid',
                                color:'black',
                            }
                        }
                    }

                    );
                </script>

                <section>
                    <h1>Casa Mia</h1>
                    <p>Le gîte Casa Mia vous accueille dans une agréable maison avec sa térasse et son jardin clos à 7/8 min à pied de la plage et 5 min du centre de Wimereux.<br>
                        Ce gîte de 90m² est idéal pour 7 personnes.<br>
                        Au Rez-de-chaussée vous pourrez profiter d'un <B>salon</B> spatieux et lumineux ouvert sur le <B>séjour</B> et la <B>cuisine</B> équipée où vous cuisinerez les spécialitées culinaire du Pas-De-Calais.</br>

                        Au premier étage vous trouverez une chambre avec un lit simple, une seconde avec deux lits simples ainsi qu'une dernière chambre avec un lit double et enfin, une salle d'eau avec douche.</br>
                        
                        Au second, vous attend une grande chambre avec un lit double avec une salle de bains composée d'une baignoire et d'un double vasque, où vous pourrez vous détendre dans le calme, la douceur et le charme de notre demeure.</br>
                    </p>

                <h2>Description</h2></br>
                 <p>  ► Maison de 90 m² (2 étage)</br>
                ✓ Lit bébé sur demande ✓ WiFi gratuite ✓ Lave-linge ✓ Aspirateur ✓ Télévision</br></br>
                 ► 4 chambres</br>
                -Chambre 1 : 1 lit 90x190</br>
                -Chambre 2 : 2 lits 90x190</br>
                -Chambre 3 : 1 lit 160x200</br>
                -Chambre 4 : 1 lit 160x200</br></br>
                ► 2 salles de bains</br>
                -Salle de bain 1</br>
                ✓ Douche Vasque</br>
                -Salle de bain 2</br>
                ✓ Baignoire ✓ Lavabo ✓ Sèche-cheveux ✓ 1 WC</br></br>
                ► Cuisine</br>
                ✓ Réfrigérateur ✓ Four ✓ Micro-ondes ✓ Plaques de cuisson ✓ Machine à café ✓ Bouilloire ✓ Grille-pain ✓ Ustensiles de cuisine ✓ Lave-vaisselle</br></br>
                ► Extérieur</br>
                ✓ Vue sur le jardin ✓ Terrasse privée ✓ Mobilier de jardin</br></p>
            <h2>Informations complémentaires:</h2></br>
            <p>
            <B>• Acompte : 30%• Forfait ménage : 90€ (obligatoire)</br></br>
            Les animaux de compagnie ne sont pas admis.</br></br>

            Le linge de lit et de toilettes sont inclus dans le forfait ménage.</br></br>

            Si vous le souhaitez, vos courses peuvent être faîte par l'hôte avant votre arrivée, vous permettant ainsi de profiter pleinement de votre séjour. </br></br>

            Le payement se fait par Espèces Chèques Virement bancaire ou PayPal. Les cartes bancaires et les chèques ne sont pas accéptés.</br></br></p></B>
            <h2>Tarifs</h2></br>
            <table>
                <tr>
                  <td>Période</td>
                  <td>Début</td>
                  <td>Fin</td>
                  <td>Week ou 7 nuits</td>
                  <td>Week-end 2 Nuits</td>
                  <td>Mid-Week ou 4 Nuits</td>
                  <td>W.E+ ou 3 Nuits </td>
                </tr>
                <tr>
                  <td><?php
                  $query = "SELECT debut from tarif where id='1'";

                  echo($query);
                  $casamia = mysqli_query($db, $query);
                    ?>
                  </td>
                  <td>05/01</td>
                  <td>06/02</td>
                  <td>600 €</td>
                  <td>310 €</td>
                  <td>450 €</td>
                  <td>385 €</td>
                </tr>
                <tr>
                <td>Vacances de février</td>
                  <td>07/02</td>
                  <td>07/03</td>
                  <td>795 €</td>
                  <td>395 €</td>
                  <td>570 €</td>
                  <td>485 €</td>
                </tr>
                <tr>
                    <td>Pringtemps</td>
                    <td>08/03</td>
                    <td>02/04</td>
                    <td>795 €</td>
                    <td>395 €</td>
                    <td>570 €</td>
                    <td>485 €</td>
                </tr>
                <tr>
                    <td>Vacances de Pâques & Beaux jours</td>
                    <td>03/04</td>
                    <td>09/07</td>
                    <td>930 €</td>
                    <td>475 €</td>
                    <td>670 €</td>
                    <td>575 €</td>
                </tr>
                <tr>
                    <td>Haute saison</td>
                    <td>10/07</td>
                    <td>29/08</td>
                    <td>1130 €</td>
                    <td>570 €</td>
                    <td>810 €</td>
                    <td>695 €</td>
                </tr>
                <tr>
                    <td>Arrière saison</td>
                    <td>30/08</td>
                    <td>31/10</td>
                    <td>795 €</td>
                    <td>395 €</td>
                    <td>570 €</td>
                    <td>485 €</td>
                </tr>
                <tr>
                    <td>Fin de saison</td>
                    <td>01/11</td>
                    <td>17/12</td>
                    <td>640 €</td>
                    <td>330 €</td>
                    <td>465 €</td>
                    <td>400 €</td>
                </tr>   
                <tr>
                    <td>Vacances de Noël</td>
                    <td>18/11</td>
                    <td>03/01</td>
                    <td>930 €</td>
                    <td>470 €</td>
                    <td>670 €</td>
                    <td>580 €</td>
                </tr>             
              </table>
                </section>

            
                <div class="gallery">
                    <hr  width="75%" color="#183853" size="2">
                    <center>
                    <a href="../photos/Casa_Mia.jpg"><img src="../photos/Casa_Mia-small.jpg"></a>
                    <a href="../photos/Cuisine_Casa_Mia.jpg"><img src="../photos/Cuisine_Casa_Mia-small.jpg"></a>
                    <a href="../photos/Salon_Casa_Mia3.jpg"><img src="../photos/Salon_Casa_Mia3-small.jpg"></a></br>
                    <a href="../photos/Salon_Casa_Mia.jpg"><img src="../photos/Salon_Casa_Mia-small.jpg"></a>
                    <a href="../photos/Chambre_Casa_Mia4.jpg"><img src="../photos/Chambre_Casa_Mia4-small.jpg"></a>
                    <a href="../photos/Chambre_Casa_Mia3.jpg"><img src="../photos/Chambre_Casa_Mia3-small.jpg"></a></br>
                    <a href="../photos/Jardin_Casa_Mia.jpg"><img src="../photos/Jardin_Casa_Mia-small.jpg"></a>
                    <a href="../photos/Salle_de_bain_Casa_Mia3.jpg"><img src="../photos/Salle_de_bain_Casa_Mia3-small.jpg"></a>
                    <a href="../photos/Salle_de_bain_Casa_Mia.jpg"><img src="../photos/Salle_de_bain_Casa_Mia-small.jpg"></a></br>
                    <a href="../photos/Chambre_Casa_Mia2.jpg"><img src="../photos/Chambre_Casa_Mia2-small.jpg"></a>
                    <a href="../photos/Salle_de_bain_Casa_Mia2.jpg"><img src="../photos/Salle_de_bain_Casa_Mia2-small.jpg"></a>
                    <a href="../photos/Salon_Casa_Mia2.jpg"><img src="../photos/Salon_Casa_Mia2-small.jpg"></a>
                    </center>

                </div>
                </body>
                </html>
