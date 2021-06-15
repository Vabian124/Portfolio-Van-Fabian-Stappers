<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Persoonlijk Portfolio Website</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
   </head>
   <body>

   
      <div class="scroll-up-btn">
         <i class="fas fa-angle-up"></i>
      </div>
      <nav class="navbar">
         <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
               <li><a href="#home" class="menu-btn">Home</a></li>
               <li><a href="#about" class="menu-btn">Over</a></li>
               <li><a href="#Projecten" class="menu-btn">Projecten</a></li>
               <li><a href="#skills" class="menu-btn">Skills</a></li>
               <li><a href="#teams" class="menu-btn">Werkervaring</a></li>
               <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
               <i class="fas fa-bars"></i>
            </div>
         </div>
      </nav>
      <!--Home-->
      <section class="home" id="home">
         <div class="max-width">
            <div class="row">
               <div class="home-content">
                  <div class="text-1">Hallo, ik ben</div>
                  <div class="text-2">Fabian Stappers</div>
                  <div class="text-3">En ik ben een <span class="typing"></span></div>
                  <a href="#contact">Huur mij in</a>
               </div>
            </div>
         </div>
      </section>
      <!--Over-->
      <section class="about" id="about">
      <div class="max-width">
         <h2 class="title">Over mij</h2>
         <div class="about-content">
            <div class="column left">
               <img src="images/profile-1.jpeg" alt="">
            </div>
            <div class="column right">
               <div class="text">Ik ben Fabian Stappers en ik ben een <span class="typing-2"></span></div>
               <p>Hallo, Ik ben Fabian, ik ben een Programmeur uit Haarlem. Ik zit nu op school bij het NovaCollege en ik volg een MBO opleiding Software Developer. Mijn hobbys zijn spelletjes spelen en programmeren. Ik kon helaag geen leuke foto voor hier links regelen :(.</p>
               <a href="cv/cv.docx" download="CV Fabian Stappers.docx">Download CV</a>
            </div>
         </div>
      </div>
      <!--Projecten -->
      <section class="Projecten" id="Projecten">
         <div class="max-width">
            <h2 class="title">Mijn Projecten</h2>
            <div class="serv-content">
               <?php
                  $db = mysqli_connect("sql205.epizy.com", "epiz_28846770", "BKNA7OwkMN0fRoH","epiz_28846770_portfolio");
                  
                  if(!$db)
                  {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  
                  $result = mysqli_query($db,"select * from projecten"); // fetch data from database
                  
                  while($row = mysqli_fetch_array($result))
                  {
                      
                      $id	= $row['projectId'];
                  	$kopje		= $row['kopje'];
                      $omschrijving		= $row['beschrijving'];
                      $image = "";
                      $image		= $row['image'];
                      ?>
               <div class="card">
                  <div class="box">
                     <?php if($image != "")
                        {
                            echo '<img src="images/'.$image.'" />';
                        }
                        ?>
                     <div class="text"><?php echo $kopje; ?></div>
                     <?php echo $omschrijving;?>
                  </div>
               </div>
               <?php
                  }
                  ?>
            </div>
         </div>
      </section>
      <!--skills-->
      <section class="skills" id="skills">
         <div class="max-width">
            <h2 class="title">Mijn skills</h2>
            <div class="skills-content">
               <div class="column left">
                  <div class="text">Mijn creative vaardigheden & ervaringen.</div>
                  <p>Ik heb wel wat ervaring met programmeren en dit is hoeveel ik ongeveer denk te kennen</p>
                  <!--<a href="#">Lees meer</a>-->
               </div>
               <div class="column right">
                  <?php
                     $db = mysqli_connect("sql205.epizy.com", "epiz_28846770", "BKNA7OwkMN0fRoH","epiz_28846770_portfolio");
                     
                     if(!$db)
                     {
                         die("Connection failed: " . mysqli_connect_error());
                     }
                     
                     
                     $result = mysqli_query($db,"select * from skills"); // fetch data from database
                     
                     while($row = mysqli_fetch_array($result))
                     {
                         
                         $taal	= $row['taal'];
                     	$procent		= $row['procent'];
                         $procent.="%";
                         ?>
                  <div class="bars">
                     <div class="info">
                        <span><?php echo $taal; ?></span>
                        <span><?php echo $procent; ?></span>
                     </div>
                     <?php echo '<div class="line bar" style="--procent: '.$procent.'"></div>';?>
                  </div>
                  <?php
                     }
                     ?>
               </div>
            </div>
         </div>
      </section>
      <!--teams                    <div class="bars">
         <div class="info">
             <span>MySQL</span>
             <span>20%</span>
         </div>
         <div class="line mysql"></div>
         </div>-->
      <section class="teams" id="teams">
         <div class="max-width">
            <h2 class="title">Werkervaring</h2>
            <div class="carousel owl-carousel">
               <?php
                  $db = mysqli_connect("sql205.epizy.com", "epiz_28846770", "BKNA7OwkMN0fRoH","epiz_28846770_portfolio");
                  
                  if(!$db)
                  {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  
                  
                  $result = mysqli_query($db,"select * from werkervaring"); // fetch data from database
                  
                  while($row = mysqli_fetch_array($result))
                  {
                  	$kopje		= $row['kopje'];
                      $omschrijving		= $row['beschrijving'];
                      $image = "";
                      $image		= $row['image'];
                      ?>
               <div class="card">
                  <div class="box">
                     <?php if($image != "")
                        {
                            echo '<img src="images/'.$image.'" />';
                        }
                        ?>
                     <div class="text"><?php echo $kopje; ?></div>
                     <?php echo $omschrijving;?>
                  </div>
               </div>
               <?php
                  }
                  ?>
            </div>
         </div>
      </section>
      <!--contact-->
      <section class="contact" id="contact">
         <div class="max-width">
            <h2 class="title">Contact mij</h2>
            <div class="contact-content">
               <div class="column left">
                  <div class="text">Contact</div>
                  <p>Wil je wat vragen? Schrijf hier je naam en e-mail en laat je berichtje achter!</p>
                  <div class="icons">
                     <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                           <div class="head">Naam</div>
                           <div class="sub-title">Fabian Stappers</div>
                        </div>
                     </div>
                     <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                           <div class="head">Adres</div>
                           <div class="sub-title">Haarlem, Nederland</div>
                        </div>
                     </div>
                     <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                           <div class="head">Email</div>
                           <div class="sub-title">f.c.stappers@gmail.com</div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  // variabalen initialiseren ( leegmaken)
                  $naam = "";
                  $email = "";
                  $bedrijfsnaam = "";
                  $vestegingsplaats = "";
                  $adres = "";
                  $postcode = "";
                  $telefoonnummer = "";
                                 $onderwerp = "";
                  $bericht = "";
                  // array voor invoerfouten definiteren
                  $invoerfouten = array();
                  
                  // als op registreer wordt gedrukt
                  if (isset($_POST['stuur'])){
                  	$naam		= $_POST['naam'];
                  	$email 	= $_POST['email'];
                  	$bedrijfsnaam 			= $_POST['bedrijfsnaam'];
                  	$vestegingsplaats		= $_POST['vestegingsplaats'];
                  	$adres 			= $_POST['adres'];
                  	$postcode		= $_POST['postcode'];
                  	$telefoonnummer		= $_POST['telefoonnummer'];
                                     $onderwerp		= $_POST['onderwerp'];
                  	$bericht		= $_POST['bericht'];
                                     date_default_timezone_set('Europe/London');
                                     $datum = date('m/d/Y h:i:s a', time());
                  	
                  	if (empty($naam)){
                  		array_push($invoerfouten,"Een naam is verplicht");
                  	}
                  	if (empty($email)){
                  		array_push($invoerfouten,"Een email is verplicht");
                  	}
                  	if (empty($onderwerp)){
                  		array_push($invoerfouten,"Een onderwerp is verplicht");
                  	}
                                     if (empty($bericht)){
                  		array_push($invoerfouten,"Een bericht is verplicht");
                  	}
                    if (ctype_alpha($naam) == false){
                     array_push($invoerfouten,"Een voor en achternaam kunnen geen cijfers bevatten.");
                  } 
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  array_push($invoerfouten,"Email is incorrect");
                  }
                  if (empty($email)){
                     array_push($invoerfouten,"Een email adres is verplicht");
                  }
                  if (empty($telefoonnummer)){
                     array_push($invoerfouten,"Een telefoonnummer is verplicht");
                  }
                  if (is_numeric($telefoonnummer) == false)
                  {
                  array_push($invoerfouten, "Telefoonnummer is niet numeriek.");
                  }
                  $remove = str_replace(" ","", $postcode);
                  $upper = strtoupper($remove);
                  
                  if(!preg_match("/^\W*[1-9]{1}[0-9]{3}\W*[a-zA-Z]{2}\W*$/",  $upper)) {
                  array_push($invoerfouten, "Incorrecte postcode.");
                  }
                  
                  	
                  	// als in het array invoerfouten geen regels zijn
                  	if (count($invoerfouten)== 0){
                  		//connectie met database
                  		$connection = mysqli_connect("sql205.epizy.com", "epiz_28846770", "BKNA7OwkMN0fRoH","epiz_28846770_portfolio");	
                  
                  		// insert statement samenstellen
                  		$sql = "insert into Contact(naam, email, bedrijfsnaam, adres, vestegingsplaats, postcode, telefoonnummer, ondewerp, bericht, datum)
                  							values('$naam','$email','$bedrijfsnaam','$adres','$vestegingsplaats','$postcode','$telefoonnummer','$onderwerp','$bericht','$datum')";
                  		// insert statement uitvoeren
                  		mysqli_query($connection, $sql);
                  		
                  $to = "f.c.stappers@gmail.com";
                  $subject = "Nieuw Contact Bericht";
                  $txt = "Van: ".$naam." ".$email." Bedrijf: ".$bedrijfsnaam." Adres:".$adres." Vestegingsplaats: ".$vestegingsplaats." Postcode: ".$postcode." Telefoonnummer: ".$telefoonnummer."\r\n"." Onderwerp: ".$onderwerp."\r\n"."Bericht: ".$bericht;
                  $headers = "From: webmaster@example.com" . "\r\n" .
                  "CC: somebodyelse@example.com";
                  
                  mail($to,$subject,$txt,$headers);
                  
                  		// terug naar homepagina
                  		header("Location:index.php#contact");
                  	}
                  	else{
                  		//als er invoerfouten zijn, voor elke regel de fout tonen.
                  		foreach ($invoerfouten as $invoerfout){
                  			// voor iedere regel in het array de invoerfout tonen  tekstkleur rood.
                  			echo "<div style=color:red>".$invoerfout."</div>";
                  		}
                  	}
                  } // einde if (isset($_POST['submit']))
                  ?>
               <div class="column right">
                  <div class="text">Bericht me</div>
                  <form class="contact-form" action="index.php" method="POST">
                     <div class="fields">
                        <div class="field name">
                           <input type="text" name="naam" placeholder="Naam *">
                        </div>
                        <div class="field email">
                           <input type="text" name="email" placeholder="Email *">
                        </div>
                     </div>
                     <div class="fields">
                        <div class="field name">
                           <input type="text" name="bedrijfsnaam" placeholder="Bedrijfsnaam">
                        </div>
                        <div class="field email">
                           <input type="text" name="vestegingsplaats" placeholder="Vestegingsplaats">
                        </div>
                        <div class="field email">
                           <input type="text" name="postcode" placeholder="Postcode">
                        </div>
                     </div>
                     <div class="fields">
                        <div class="field">
                           <input type="text" name="adres" placeholder="Adres">
                        </div>
                        <div class="field">
                           <input type="text" name="telefoonnummer" placeholder="Telefoonnummer">
                        </div>
                     </div>
                     <div class="field">
                        <input type="text" name="onderwerp" placeholder="Onderwerp *">
                     </div>
                     <div class="field textarea">
                        <textarea name="bericht" cols="40" rows="10" placeholder="Bericht.. *"></textarea>
                     </div>
                     <div class="button-area">
                        <button class="send-msg" type="submit" name="stuur">Verstuur</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!--footer-->
      <footer>
         <span>Door <a href="#home">Fabian</a> | <span class="far fa-copyright"></span>2021</span>
      </footer>
      <script src="script.js"></script>
   </body>
</html>