<!-- Header section -->

   <!-- Burger (start) -->
   <div class="burger-1">

      <div class="b-1"><a class="b-2" href="{{route('home')}}" style="color:#0f273d">Home</a></div>
      
      <div class="b-1"><a class="b-2" href="{{route('about')}}">About</a></div>
      <div class="b-1"><a class="b-2" href="{{route('services')}}">Services</a></div>
      <div class="b-1"><a class="b-2" href="{{route('contact')}}">Contact</a></div>

   </div>
   <!-- Burger (end)-->

   <header class="header-section">
      
      <div class="header-logo">
         <a href="{{route('home')}}"><img src="{{ asset('img/final-3.png')}}"></a>
      </div>
      
      <!-- Navigation -->
      <div class="responsive" id="burger"><i class="fa fa-bars"></i></div>
      
      <!-- Navbar --> 
      <nav>
         <ul class="navbar">
            <li class="active"><a href="{{route('home')}}">HOME</a></li>
            <li><a href="{{route('about')}}">ABOUT</a></li>
            <li><a href="{{route('services')}}">SERVICES</a></li>
            <li><a href="{{route('contact')}}">CONTACT</a></li>
         </ul>
      </nav>

   </header>

   <div class="header-div">

      <div class="header-div-2"></div>

   </div>

   <div class="header-text">

      <h4>SALUT !</h4>

      <h1 class="title">Je suis <span class="txt-rotate" data-period="2000" data-rotate='[ "Emanuel Portela.", "Civetta Development."]'></span></h1>

      <h3 class="title-2">JUNIOR FULL-STACK DEVELOPER</h3>

      <div class="header-icon">

         <a href="https://www.facebook.com/EmanuelPortelaR"><i class="fab fa-facebook"></i></a>
         <a href="https://www.linkedin.com/in/emanuel-portela-ribeiro-703966174/"><i class="fab fa-linkedin-in"></i></a>
         <a href="https://github.com/emanuelportela"><i class="fab fa-github"></i></a>

      </div>

   </div>
<!-- Header section end -->



<!-- JS Text start -->

<script>
 
var TxtRotate = function(el, toRotate, period) {
   this.toRotate = toRotate;
   this.el = el;
   this.loopNum = 0;
   this.period = parseInt(period, 10) || 2000;
   this.txt = '';
   this.tick();
   this.isDeleting = false;
};
 
TxtRotate.prototype.tick = function() {
   var i = this.loopNum % this.toRotate.length;
   var fullTxt = this.toRotate[i];
 
   if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
   } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
   }
 
   this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
 
   var that = this;
   var delta = 300 - Math.random() * 100;
 
   if (this.isDeleting) { delta /= 2; }
 
   if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
   } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
   }
 
   setTimeout(function() {
      that.tick();
   }, delta);
};
 
window.onload = function() {
   var elements = document.getElementsByClassName('txt-rotate');
   for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
         new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
   }
}
 
</script>

<!-- JS Text end -->