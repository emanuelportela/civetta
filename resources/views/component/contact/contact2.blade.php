<section class='top-header'>

   <h1>Contact</h1>

</section>

{{-- <section class="contact-map">

   <div style="width: 100%">
      <iframe width="100%" height="450px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Braine-le-Comte+(My%20City)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
         <a href="https://www.maps.ie/map-my-route/">Map a route</a>
      </iframe>
   </div>

</section> --}}

<section class="contact-form">

   <div class="row">
      <div class="col-sm-12 col-md-7">

         <iframe width="100%" height="450px"
         src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Braine-le-Comte+(My%20City)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            <a href="https://www.maps.ie/map-my-route/">Map a route</a>
        </iframe>
            
         {{-- <form action="{{ route ('mail')}}" method="POST" class="form-class contact-form-1">
            @csrf

            

            <input type="text" name="nom" value="{{old('nom')}}" class="c-form-1-2" placeholder="Entrez votre nom.">

            <input type="text" name="email" value="{{old('email')}}" class="c-form-1-3" placeholder="Entrez votre mail.">
               
               @if($errors->has('nom'))
                  @foreach($errors->get('nom') as $error)
                     <div class="text-danger">{{ $errors->first('nom')}}</div>
                  @endforeach
               @endif 
               @if($errors->has('email'))
                  @foreach($errors->get('email') as $error)
                     <div class="text-danger">{{ $errors->first('email')}}</div>
                  @endforeach
               @endif

            <textarea class="c-form-1-4" name="message" placeholder="Entrez votre message." cols="30" rows="10">{{old('message')}}</textarea>

               @if($errors->has('message'))
                  @foreach($errors->get('message') as $error)
                     <div class="text-danger">{{ $errors->first('message')}}</div>
                  @endforeach
               @endif 

            <button type="submit" class="c-form-1-5">ENVOYER</button>
         
         </form> --}}

      </div>

      <div class="col-sm-12 col-md-5 contact-donnees">
         
         <h3 class="c-form-1-1" >Contactez-moi !</h3>
         
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