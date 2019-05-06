<!-- Section A Venir -->

<section class="section-services avenir" style="padding-top: 0px;">

      <div class="services">
   
         <h4 class="services-1">A VENIR !</h4>
   
         <h3 class="services-2" style="margin-bottom: 20px">Une autre passion !</h3>
   
         <h4 class="services-4">J'aimerais vous présenter une autre de mes passions : l'infographie. A mes heures perdues, je réalise des affiches, des invitations, des logos, ... Je désir mettre à contribution ce talent dans mon travail. Vous trouverez ci-dessous certains de mes travaux réalisés pour des particuliers.</h4>
   
         <div class="services-3 gallery">
   
            <div class="gallery-1 test3">
               <a target="_blank" href="{{asset('img/affiche-4.jpg')}}">
                 <img src="{{asset('img/affiche-4.jpg')}}">
               </a>
            </div>
   
            <div class="gallery-1 test">
               <a target="_blank" href="{{asset('img/affiche-1.jpg')}}">
                 <img src="{{asset('img/affiche-1.jpg')}}">
               </a>
            </div>
   
            <div class="gallery-2">
               <a target="_blank" href="{{asset('img/logo1.jpg')}}">
                 <img src="{{asset('img/logo1.jpg')}}">
               </a>
            </div>
   
            <div class="gallery-1">
               <a target="_blank" href="{{asset('img/affiche-3.jpg')}}">
                 <img src="{{asset('img/affiche-3.jpg')}}">
               </a>
            </div>
            
            <div class="gallery-3">
               <a target="_blank" href="{{asset('img/invitation-1.jpg')}}">
                 <img src="{{asset('img/invitation-1.jpg')}}">
               </a>
            </div>
   
            <div class="gallery-1 test2">
               <a target="_blank" href="{{asset('img/affiche-6.jpg')}}">
                 <img src="{{asset('img/affiche-6.jpg')}}">
               </a>
            </div>
   
            <div class="gallery-1">
               <a target="_blank" href="{{asset('img/invitation-2.jpg')}}">
                 <img src="{{asset('img/invitation-2.jpg')}}">
               </a>
            </div>
   
            <div class="gallery-4">
               <a target="_blank" href="{{asset('img/logo-test1.png')}}">
                 <img src="{{asset('img/logo-test1.png')}}">
               </a>
            </div>
         
         </div>
   
      </div>
   
   </section>
   
   <!-- Section A Venir end -->
   
   
   <style>
   
   .services-4 {
      color: #A6A6A6;
      padding: 0 30px 10px 30px;
      font-size: 15px;
      font-family: 'Open Sans', sans-serif;
      line-height: 2;
      text-align: justify;
      margin-bottom: 30px;
   }
   
   .gallery-1 {
      border:1px solid #A6A6A6;
      width: 200px;
      height: 290px;
      perspective: 600px;
      transition: transform .8s;
   }
      
   .gallery-2 {
      border:1px solid #A6A6A6;
      width: 290px;
      height: 290px;
      transition: transform .8s;
   }
   
   .gallery-3 {
      border:1px solid #A6A6A6;
      width: 420px;
      height: 290px;
      transition: transform .8s;
   }
   
   .gallery-1 img, .gallery-2 img, .gallery-3 img {
      width: 100%;
      height: 100%;
   }
   
   .gallery-4 {
      border:1px solid #A6A6A6;
      width: 100px;
      height: 290px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #EFEFEF;
      transition: transform .8s;
   }
   
   .gallery-4 img {
      width: 90px;
      height: 110px;
   }
   
   .gallery-1:hover, .gallery-2:hover, .gallery-3:hover, .gallery-4:hover {
      transform: rotate3d(1,1,1, -10deg);
   }
   
   
   .gallery {
      padding: 30px;
      padding-top: 0;
      display:flex;
      flex-wrap: wrap;
   }
   
   @media only screen and (max-width: 1080px) {
      .gallery-4 {
         display: none;
      }
   }
   
   @media only screen and (max-width: 1030px) {
      .test {
         display: none;
      }
   }
   
   @media only screen and (max-width: 950px) {
      .test2 {
         display: none;
      }
   
      .avenir {
         height: 950px;
      }
   }
   
   @media only screen and (max-width: 850px) {
      .gallery-3 {
         display: none;
      }
      .gallery {
         padding: 0 90px;
         height: 650px;
      }
   
      .avenir {
         height: 1000px;
      }
   }
   
   @media only screen and (max-width: 767px) {
      .gallery {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         height: 900px;
         padding: 0;
      }
   
      .gallery-2 {
         width: 300px;
         height: 300px;
      }
   
      .gallery-1 {
         width: 300px;
         height: 420px;
      }
   
      .avenir {
         height: 1300px;
      }
   }
   
   @media only screen and (max-width: 659px) {
      .test3 {
         display: none;
      }
   
      .gallery {
         height: 1200px !important;
      }
   
      .avenir {
         height: 1600px !important;
      }
   }
   
   @media only screen and (max-width: 500px) {
      .avenir {
         height: 1700px !important;
      }
   }
   
   </style>