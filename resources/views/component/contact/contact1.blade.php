<!-- Header section -->
   
   <!-- Burger (start) -->
   <div class="burger-1">

      <div class="b-1"><a class="b-2" href="{{route('home')}}">Home</a></div>
      <div class="b-1"><a class="b-2" href="{{route('about')}}">About</a></div>
      <div class="b-1"><a class="b-2" href="{{route('services')}}">Services</a></div>
      <div class="b-1"><a class="b-2" href="{{route('contact')}}" style="color:#0f273d">Contact</a></div>

   </div>
   <!-- Burger (end)-->

   <header class="header-section">
      
      <div class="header-logo">
         <a href="{{route('home')}}"><img src="{{ asset('img/final-4.png')}}"></a>
      </div>
      
      <!-- Navigation -->
      <div class="responsive" id="burger"><i class="fa fa-bars"></i></div>
      
      <!-- Navbar -->
      <nav>
         <ul class="navbar">
            <li><a href="{{route('home')}}">HOME</a></li>
            <li><a href="{{route('about')}}">ABOUT</a></li>
            <li><a href="{{route('services')}}">SERVICES</a></li>
            <li class="active"><a href="{{route('contact')}}">CONTACT</a></li>
         </ul>
      </nav>   

   </header>
<!-- Header section end -->