<head>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   </head>
   
   <body style="background-color: rgb(245, 245, 245); font-family: 'Open Sans', sans-serif; color: #A6A6A6; padding: 30px 40px;">
   
      {{-- <img src="url('../email/final-3.png')" style='width: 110px; height: 62px'>
      <div style="width: 110px; height: 62px; background-color: red; background-image: url('../final-3.png');background-size: 100%; ;"></div> --}}

      <h2 style="width: 100%; font-family: 'Lobster', cursive; font-size: 35px; color: #153350; margin: 0; margin-bottom: 80px; font-weight:bold;">Civetta Development</h2>
   
      <h1 style="width: 100%; font-family: 'Lobster', cursive; font-size: 20px; color: #2B657C; margin: 0; margin-bottom: 40px; font-weight: normal;">Merci pour votre message !</h1>
      
         <h4 style="color: #343434; width: 100%; margin: 0; margin-bottom: 20px; text-decoration: underline; font-size: 20px;">Informations : </h4>
   
         <p style="width: 100%; margin: 0; padding: 0; margin-bottom: 5px; font-size: 15px; color: #727171;"><span style="font-weight: bolder">Nom :</span> {{ $portela->nom }}</p>
   
         <p style="width: 100%; margin: 0; padding: 0; margin-bottom: 5px; font-size: 15px; color: #727171;"><span style="font-weight: bolder">Email :</span> {{ $portela->email }}</p>
   
         <p style="width: 100%; margin: 0; padding: 0; margin-bottom: 5px; font-size: 15px; color: #727171;"><span style="font-weight: bolder">Message :</span> {{ $portela->message }}</p>
      
      <h2 style="width: 100%; font-family: 'Lobster', cursive; font-size: 20px; color: #2B657C; margin: 0; margin-bottom: 20px; margin-top: 70px; font-weight: normal; text-align: end;">Vous aurez une réponse dans les plus brefs délais.</h2>

      <h2 style="width: 100%; font-family: 'Lobster', cursive; font-size: 20px; color: #343434; margin: 0; margin-bottom: 20px; margin-top: 70px; font-weight: normal; text-align: end;">Emanuel Portela</h2>
      
   </body>