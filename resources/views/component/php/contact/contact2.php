<section class='header-4' id="up">

   <div class="header-filtre">
      <div class="header-text">Contactez-nous</div>
   </div>

</section>

<section class="contact-map">

   <div style="width: 100%">
      <iframe width="100%" height="450px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Rue%20de%20Busselenberg%2051+(Nos%20locaux)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Map a route</a></iframe>
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
<!--          
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

         </div> -->

      </div>
   </div>

</section>



