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
                <li><a href="indexanglais.html">HOME</a></li>
                <li><a href="giteCasaMia.php">CASA MIA</a></li>
                <li><a href="alentours_wimereuxanglais.html">TOURISM</a></li>
                <img class="logo" src="../photos/Logo.png">
                <li><a href="reservationCasaMia.php">RESERVATION</a></li>
                <li><a href="contact-Casa-Miaanglais.php">CONTACT</a></li>
                <li><a href="../index.html">FR</a></li>
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
                    <p>Casa Mia welcomes you in a pleasant house with her terrace and enclosed garden, at 7/8 min walk from the beach and 5 min from the centre of Wimereux.<br>
                        This gite of 90m² is perfect for 7 people.<br>
                        On the ground floor you will enjoy the <B></B> Spacious and bright open on the <B>living room</B> and the <B>kitchen</B> equipped where you will cook the culinary specialities of the Pas-De-Calais.</br>

                        On the first floor you will find a bedroom with a single bed, a second bedroom with two single beds and a last bedroom with a double bed and finally a bathroom with shower.</br>
                        
                        On the second floor, a large bedroom with a double bed awaits you with a bathroom composed of a bathtub and a double washbasin, where you can relax in the calm, softness and charm of our home.</br>
                    </p>

                <h2>Description</h2></br>
                 <p>  ► House of 90 m² (2 stages)</br>
                ✓ Baby bed on request ✓ Free Wifi ✓ Washer ✓ Vacuum cleaner ✓ TV</br></br>
                 ► 4 bedrooms</br>
                -Bedroom 1 : 1 bed 90x190</br>
                -Bedroom 2 : 2 beds 90x190</br>
                -Bedroom 3 : 1 bed 160x200</br>
                -Bedroom 4 : 1 bed 160x200</br></br>
                ► 2 bathrooms</br>
                -Bathroom 1</br>
                ✓ basin shower</br>
                -Bathroom 2</br>
                ✓ Bathtub ✓ Washbasin ✓ Hairdryer ✓ 1 Toilet</br></br>
                ► Kitchen</br>
                ✓ Fridge ✓ Oven ✓ Microwave ✓ backing trays ✓ coffee machine ✓ kettle ✓ toaster ✓ kitchen items ✓ diswasher</br></br>
                ► Outside</br>
                ✓ View on garden ✓ Private terrace ✓ Mobilier de jardin</br></p>
            <h2>Other informations:</h2></br>
            <p>
            <B>• Deposit : 30%• Cleaning charge : 90€ (obligatory)</br></br>
            Animals aren't accepted.</br></br>

            Bed and bathroom linen are included in the cleaning charge.</br></br>

            If you want, your shopping can be made by the host before you arrive, therefore you can enjoy totaly your stays. </br></br>

            Payment is made by Cash Cheques Bank transfer or PayPal. Credit cards and cheques are not accepted.</br></br></p></B>
            <h2>Prices</h2></br>
            <table>
                <tr>
                  <td>Period</td>
                  <td>from</td>
                  <td>until</td>
                  <td>Week or 7 Nights</td>
                  <td>Week-end 2 Nights</td>
                  <td>Mid-Week or 4 Nights</td>
                  <td>W.E+ or 3 Nights</td>
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
                <td>February holidays</td>
                  <td>07/02</td>
                  <td>07/03</td>
                  <td>795 €</td>
                  <td>395 €</td>
                  <td>570 €</td>
                  <td>485 €</td>
                </tr>
                <tr>
                    <td>Spring</td>
                    <td>08/03</td>
                    <td>02/04</td>
                    <td>795 €</td>
                    <td>395 €</td>
                    <td>570 €</td>
                    <td>485 €</td>
                </tr>
                <tr>
                    <td>Easter holidays & Good days</td>
                    <td>03/04</td>
                    <td>09/07</td>
                    <td>930 €</td>
                    <td>475 €</td>
                    <td>670 €</td>
                    <td>575 €</td>
                </tr>
                <tr>
                    <td>peak season</td>
                    <td>10/07</td>
                    <td>29/08</td>
                    <td>1130 €</td>
                    <td>570 €</td>
                    <td>810 €</td>
                    <td>695 €</td>
                </tr>
                <tr>
                    <td>off-season</td>
                    <td>30/08</td>
                    <td>31/10</td>
                    <td>795 €</td>
                    <td>395 €</td>
                    <td>570 €</td>
                    <td>485 €</td>
                </tr>
                <tr>
                    <td>End of season</td>
                    <td>01/11</td>
                    <td>17/12</td>
                    <td>640 €</td>
                    <td>330 €</td>
                    <td>465 €</td>
                    <td>400 €</td>
                </tr>   
                <tr>
                    <td>Christmas holidays</td>
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
