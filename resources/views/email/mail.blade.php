<head>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>

   <img src="{{asset('img/final-3.png')}}" style='width: 110; height: 62px'>

   <h1 class="titre">Vous avez reçu un message !</h1>
   
      <h4 class="h4">Informations : </h4>

      <p><span>Nom :</span> {{ $portela->nom }}</p>
      <p><span>Email :</span> {{ $portela->email }}</p>
      <p><span>Message :</span> {{ $portela->message }}</p>
   
   <h2 class="titre2">N'hésitez pas à lui répondre !</h2>
   
   <body>
   
   <style>
   
   body {
      background-color: rgb(245, 245, 245);
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      font-family: 'Open Sans', sans-serif;
      color: #A6A6A6;
      padding: 30px 40px;
   }

   .titre {
      width: 100%;
      font-family: 'Lobster', cursive;
      font-size: 30px;
      color: #153350;
      margin: 0;
      margin-top: 70px;
      margin-bottom: 40px;
      font-weight: normal;
   }

   .titre2 {
      width: 100%;
      font-family: 'Lobster', cursive;
      font-size: 20px;
      color: #2B657C;
      margin: 0;
      margin-bottom: 40px;
      margin-top: 70px;
      font-weight: normal;
      text-align: end;
   }
   
   .h4 {
      color: #343434;
      width: 100%;
      margin: 0;
      margin-bottom: 20px;
      text-decoration: underline;
      font-size: 20px;
   }
   
   p {
      width: 100%;
      margin: 0;
      padding: 0;
      margin-bottom: 5px;
      font-size: 15px;
      color: #727171;
   }

   span {
      font-weight: bolder;
   }
   
   </style>