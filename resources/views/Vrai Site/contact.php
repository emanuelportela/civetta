<?php include("mail.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Stylesheets -->
   <link rel="icon" type="image/png" href="img/logo-haut.png" sizes="16x16"/>
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <link rel="stylesheet" href="css/owl.carousel.css"/>
   <link rel="stylesheet" href="css/font-awesome.min.css"/>
   <link rel="stylesheet" href="css/flaticon.css"/>
   <link rel="stylesheet" href="css/node_modules/@fortawesome/fontawesome-free/css/all.css">

   <!-- Pages -->
   <link rel="stylesheet" href="css/style.css"/>
   <link rel="stylesheet" href="css/about.css">
   <link rel="stylesheet" href="css/contact1.css">
   <link rel="stylesheet" href="css/services.css">
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/mediaqueries.css">

   <!-- Font-->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

   <title>Civetta Development</title>
</head>

<body>

   <!-- HEADER SECTION (start) -->

    <!-- Burger (start) -->
    <div class="burger-1">

        <div class="b-1"><a class="b-2" href="index.html">Home</a></div>
        <div class="b-1"><a class="b-2" href="about.html">About</a></div>
        <div class="b-1"><a class="b-2" href="services.html">Services</a></div>
        <div class="b-1"><a class="b-2" href="contact.php" style="color:#0f273d">Contact</a></div>

    </div>
    <!-- Burger (end)-->

    <header class="header-section">

        <div class="header-logo">
            <a href="index.html"><img src="img/final-4.png"></a>
        </div>

        <!-- Navigation -->
        <div class="responsive" id="burger"><i class="fa fa-bars"></i></div>

        <!-- Navbar -->
        <nav>
            <ul class="navbar">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="services.html">SERVICES</a></li>
                <li class="active"><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>

    </header>

    <!-- HEADER SECTION (end) -->
    

   <section class='top-header'>

   <h1>Contact</h1>

</section>

<section class="contact-map">

   <div style="width: 100%">
      <iframe width="100%" height="450px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Braine-le-Comte+(My%20City)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
         <a href="https://www.maps.ie/map-my-route/">Map a route</a>
      </iframe>
   </div>

</section>

<section class="contact-form">

   <div class="row">
      <div class="col-sm-12 col-md-7">

      <form action="" method="POST" class="form-class contact-form-1">
            
            <h3 class="c-form-1-1" >Contactez-moi !</h3>

            <input type="text" name="nom" class="c-form-1-2" placeholder="Entrez votre nom." value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">

            <input type="text" name="mail" class="c-form-1-3" placeholder="Entrez votre mail." value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">

            <textarea class="c-form-1-4" name="message" placeholder="Entrez votre message." cols="30" rows="10"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>

            <button type="submit" class="c-form-1-5" name="mailform">ENVOYER</button>
         
         <?php
		      if(isset($msg))
		      {
		      	echo $msg;
		      }
         ?>
         
         </form>

      </div>

      <div class="col-sm-12 col-md-5 contact-donnees">
         
         <div class="contact-donnee">

            <div class="contact-donnee-1"><i class="fas fa-home"></i></i></div>
            <div class="contact-donnee-2">
               <div class="contact-donnee-2-1">Braine-le-Comte / Bruxelles</div>
               <div class="contact-donnee-2-2">Je me déplace facilement.</div>
            </div>

         </div>

         <div class="contact-donnee">

            <div class="contact-donnee-1"><i class="fas fa-mobile-alt"></i></div>
            <div class="contact-donnee-2">
               <a class="contact-donnee-2-1" href="tel:0032472659211">0472/65.92.11</a>
               <div class="contact-donnee-2-2">Lun au Ven de 10 à 18h</div>
            </div>

         </div>
         
         <div class="contact-donnee">

            <div class="contact-donnee-1"><i class="fas fa-envelope"></i></div>
            <div class="contact-donnee-2">
               <a class="contact-donnee-2-1" href="mailto:emanuel-portela@hotmail.com">emanuel-portela@hotmail.com</a>
               <div class="contact-donnee-2-2">Envoyez-moi vos questions !</div>
            </div>

         </div>

      </div>
   </div>

</section>

   <!-- FOOTER (start) -->

   <footer>

      <div class="footer-1">
         
         <div class="footer-logo"><a href="index.html">
            <img src="img/finalement-4.png">
         </a></div>
   
         <div class="footer-nav">
   
            <a href="index.html">HOME</a>
            <a href="about.html">ABOUT</a>
            <a href="services.html">SERVICES</a>
            <a href="contact.php">CONTACT</a>
   
         </div>
         
         <div class="footer-icons">
   
            <a href="https://www.facebook.com/EmanuelPortelaR"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/emanuel-portela-ribeiro-703966174/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/emanuelportela"><i class="fab fa-github"></i></a>
         
         </div>
      
      </div>
   
      <div class="footer-2">Civetta Development - Emanuel Portela</div>
   
   </footer>

   <!-- FOOTER (end) -->
   
   <!-- SCRIPTS (start) -->

   <script src="js/main.js"></script>
   <script src="js/jquery-2.1.4.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/burger.js"></script>

   <!-- SCRIPTS (end) -->
   
</body>

   

</html>


<style>

.footer-icons a {
   display: flex;
   justify-content: center;
   align-items: center;
}

.footer-icons a:link, .footer-icons a:visited {
   text-decoration: none;
}

</style>