<!-- Section Services -->

<section class="section-services" style="padding-top:30px; margin-bottom:50px;">

   <div class="services">

      <h4 class="services-1">MES SERVICES</h4>

      <h3 class="services-2">Quels sont mes services ?</h3>

      <div class="services-3">

         <div class="services-3-1">

            <div class="services-3-1-1"><i class="fas fa-code fa-3x"></i></div>
            <div class="services-3-1-2">Site Web</div>

         </div>

         <div class="services-3-1">

            <div class="services-3-1-1"><i class="fas fa-mobile-alt fa-3x"></i></div>
            <div class="services-3-1-2">Site Responsive</div>

         </div>

         <div class="services-3-1">

            <div class="services-3-1-1"><i class="fas fa-pencil-alt fa-3x"></i></div>
            <div class="services-3-1-2">Design</div>

         </div>

         <div class="services-3-1">

            <div class="services-3-1-1"><i class="fas fa-cogs fa-3x"></i></div>
            <div class="services-3-1-2">Maintenance</div>

         </div>
      
      </div>

   </div>

   

</section>

   {{-- 
      <div class="services-3-1-3">Création de site web : front-end et back-end.</div>
      <div class="services-3-1-3">Adaptation de site web à tout type d'écran. </div>
      <div class="services-3-1-3">Création de design personnalisé et adapté.</div>
      <div class="services-3-1-3">Amélioration, correction et mise à jour.</div>
   --}}

<!-- Section Services end -->


<style>

.services-3-1 {
   height: 200px;
   width: 200px;
   display: flex;
   justify-content: center;
   align-content: center;
   flex-wrap: wrap;
   padding: 0;
}

.services-3-1-1 {
   font-size: 17px;
   margin-bottom: 20px;
}

.services-3-1-2 {
   font-size: 20px;
}

.section-services {
   padding: 90px;
   height: 420px;
}

.services {
   height: 360px;
}

.services-3 {
   height: 200px;
   padding: 0 120px;
}

/* ECRAN LARGE - 1250px (start) */

@media only screen and (max-width: 1250px) {
   .services-3 {
      padding: 0;
   }
}

/* ECRAN LARGE - 1250px (end) */


/* ECRAN LARGE - 1040px (start) */

@media only screen and (max-width: 1040px) {
   .section-services {
      height: 650px;
   }
   
   .services-3 {
      height: 450px;
      padding: 0 150px;
   }
}

/* ECRAN LARGE - 1040px (end) */


/* ECRAN LARGE - 925px (start) */

@media only screen and (max-width: 925px) {
   .services-3 {
      padding: 0 100px;
   }
}

/* ECRAN LARGE - 925px (end) */


/* ECRAN LARGE - 825px (start) */

@media only screen and (max-width: 825px) {
   .services-3 {
      padding: 0 50px;
   }
}

/* ECRAN LARGE - 825px (end) */

/* ECRAN LARGE - 725px (start) */

@media only screen and (max-width: 725px) {
   .services-3 {
      padding: 0;
   }
}

/* ECRAN LARGE - 725px (end) */

/* ECRAN LARGE - 625px (start) */

@media only screen and (max-width: 625px) {
   .section-services {
      height: 1100px;
   }
   
   .services-3 {
      padding: 0 30px;
      height: 850px;
      display: flex;
      flex-wrap: wrap;
      align-content: space-between;
      justify-content: center;
   }

   .services-3-1 {
      width: 100%;
   }
}

/* ECRAN LARGE - 625px (end) */

/* ECRAN LARGE - 500px (start) */

@media only screen and (max-width: 500px) {
   .section-services {
      padding: 30px;
      margin-bottom: 0px !important;
   }
   
   .services-3 {
      padding: 0;
   }
}

/* ECRAN LARGE - 500px (end) */



</style>