<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>

<?php

//database credentials
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'CASAMIA');
//define('DB_USER', 'CASAMIA');
//define('DB_PASS', 'jSe0J6FdG0m8');

//$db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASS);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//?>
<body>
    <center>
        <nav>
        
            <div="menu">
            <ul>
                <li><a href="../index.html">ACCUEIL</a></li>
                <li><a href="HTML/giteCasaMia.php">CASA MIA</a></li>
                <li><a href="alentours_wimereux.html">TOURISME</a></li>
                <img class="logo" src="../photos/Logo.png">
                <li><a href="reservationCasaMia.php">RÉSERVATION</a></li>
                <li><a href="contact-Casa-Mia.php">CONTACT</a></li>
                <li><a href="indexanglais.html">EN</a></li>
            </ul></div="menu"></nav>
    </center>


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
                  <td>Une Nuit </td>
                </tr>
     <?php
    $connexion=mysqli_connect("127.0.0.1","root","","CASAMIA");
    $resultat=mysqli_query($connexion,'SELECT*FROM tarif');
    while($row=mysqli_fetch_array($resultat)){
    	echo"<tr><td>";
     	echo $row['periode'].' ';
    	echo "</td>";
    	echo "<td>";
    	echo $row['debut'].' ';    
        echo "</td>";
        echo "<td>";
    	echo $row['fin'].' ';    
        echo "</td>";
        echo "<td>";
    	echo $row['septnuits'].' €';    
        echo "</td>";
        echo "<td>";
    	echo $row['deuxnuits'].' €';    
        echo "</td>";
        echo "<td>";
    	echo $row['quatrenuits'].' €';    
        echo "</td>";
        echo "<td>";
    	echo $row['troisnuits'].' €';    
        echo "</td>";
        echo "<td>";
    	echo $row['unenuit'].' €';    
        echo "</tr></td>";

        
    }
?>           
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
/*Menu*/
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
.fond{
	width: 100%;
}

h1{
	text-align: center;
	margin-top: -120px;
	font-style: italic;
	font-size: 85px;
	color:#DCDCDC;
	margin-bottom: 30px;
	font-family: LaPolice;
}

#slideshow-container{
	position:absolute;
	width: 100%;
	height: 100%;
	top:0;
	left: 0;
	z-index:-10;
	margin: 0 auto;
}

#slideshow{
	width: 100%;
	height: 100%;	
}

.slideshow-image{
	display: none;
}

.gallery{
	margin: 10px 50px;
	margin-top: 60px;
}

.gallery img{
	transition: 1s;
	padding: 15px;
	width: 200px;
	
}
.gallery img:hover{
	filter: grayscale(100%);
	transform: scale(1.1);
}

p{
	color: #3F76BF;
	text-align: center;
    font-family: LaPolice;
    font-size:19px;
    margin-bottom: 20px;
    margin-top: 20px;
}

h2{
	color: #183853;
	text-align: center;
    margin-top: 30px;
    font-family:LaPolice;
}



table{
	table-layout: fixed;
	border-collapse: collapse;
	border: 3px solid #183853;
	text-align: center;
    margin: auto;
    font-family:LaPolice;
}

  tr,td{
	border-collapse: collapse;
	border: 3px solid #183853;
  }

  hr{
	  margin: auto;
  }

  /*Bas de page*/
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
