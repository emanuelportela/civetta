<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Stylesheets -->
   <link rel="icon" type="image/png" href="{{asset('img/logo-haut.png')}}" sizes="16x16"/>
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/node_modules/@fortawesome/fontawesome-free/css/all.css')}}">

   <!-- Pages -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/about.css')}}">
   <link rel="stylesheet" href="{{asset('css/contact.css')}}">
   <link rel="stylesheet" href="{{asset('css/services.css')}}">
   <link rel="stylesheet" href="{{asset('css/footer.css')}}">
   <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">

   <!-- Font-->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

   <title>Civetta Development</title>
</head>

<body>

   @yield('content')

   @include('layouts.footer')
   
   <script src="{{asset('js/main.js')}}"></script>
   <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <script src="{{asset('js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('js/burger.js')}}"></script>
   
</body>

   

</html>