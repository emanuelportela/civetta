<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Stylesheets -->
   <link rel="icon" type="image/png" href="{{asset('img/logo-haut.png')}}" sizes="16x16"/>
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/node_modules/@fortawesome/fontawesome-free/css/all.css')}}">

   <!-- Pages -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
   <link rel="stylesheet" href="{{asset('css/about.css')}}">
   <link rel="stylesheet" href="{{asset('css/contact.css')}}">
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

   
</body>
<script src="js/main.js"></script>

</html>