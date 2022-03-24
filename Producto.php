<!DOCTYPE html>

<html>


<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta lang="es">
  <link rel="stylesheet" href="IMestilos.css">
  <link rel="shortcut icon" href="LOGO.jpg">

</head>

<body class="bodyvoto">



  <?php include('Encabezado.php') ?>

    



    <div>
      <h2 class="Titulo2"></h2>

    </div>

   


    <!--CONTENIDO DE LA PAGINA-->



  
      <!-- Imágenes  -->
      <main class="animes">
      
       


  
      </main>





      <script>
        const animes = [
          {
            nombre: 'SNK Final Season Parte 2',
            img: "https://cdn.jkanime.net/assets/images/animes/image/shingeki-no-kyojin-the-final-season-part-2.jpg",
            DESCRIPCION:'',

            votos: 100

          },
          {
            nombre: 'Bleach:Thousand-Year Blood War Arc',
            img: "https://pbs.twimg.com/media/ETYflJAU0AATXDo?format=jpg&name=large",
            DESCRIPCION:'',

            votos: 100
          },
          {
            nombre: 'Chainsaw Man',
            img: "https://images-na.ssl-images-amazon.com/images/I/81s8xJUzWGL.jpg",
            DESCRIPCION:'',

            votos: 90
          },
          {
            nombre: 'Jigokuraku: Hell’s Paradise',
            img: "https://i1.whakoom.com/large/00/06/f049d70e38a3436cb5cc6e5e55f73a61.jpg",
            DESCRIPCION:'',

            votos: 100
          },
          {
            nombre: 'Spy x Family',
            img: "https://images-na.ssl-images-amazon.com/images/I/71At-X15dkL.jpg",
            DESCRIPCION:'',

            votos: 90
          },
          {
            nombre: 'Blue Lock',
            img: "https://somoskudasai.com/wp-content/uploads/2020/10/6djs1vq06ep51.jpg",
            DESCRIPCION:'',

            votos: 90
          },
          {
            nombre: 'My Hero Academia (Temporada 6)',
            img: "http://pm1.narvii.com/6897/cdb062ac9546ee25948944e05c6135cb11cfe6aar1-570-800v2_uhq.jpg",
            DESCRIPCION:'',

            votos: 70
          },
          {
            nombre: 'To Your Eternity (Temporada 2)',
            img: "https://ramenparados.com/wp-content/uploads/2021/02/to-your-eternity-new-key.jpg",
            DESCRIPCION:'',

            votos: 20
          },
          {
            nombre: 'Kaguya-Sama: Love is War (Temporada 3)',
            img: "https://areajugones.sport.es/wp-content/uploads/2021/10/kaguya-sama-s3-poster.jpg",
            DESCRIPCION:'',

            votos: 20
          },
          {
            nombre: 'Uzumaki',
            img: "https://images-na.ssl-images-amazon.com/images/I/81CfbcFFyHL.jpg",
            
            DESCRIPCION:'',

            votos: 10
          }
        ]

        const animesContenedor = document.querySelector('.animes')

        animes.sort((a, b) => {
          if (a.votos > b.votos) {
            return 1;
          }
          if (a.votos < b.votos) {
            return -1;
          }
          // a must be equal to b
          return 0;
        })

        animes.map(anime => {
          const c_cuadros = `
            <div class="C-Cuadros">
            <h2 class="TituloAnime">${anime.nombre}</h2>
  
            <div class="img-center">
              <img class="AnimeImg"
                src="${anime.img}"
                alt="${anime.nombre}">
            </div>
      
            
            <aside class="InforAnime">VOTOS: ${anime.votos}</aside>
            <aside class="InforAnime">DESCRIPCION: ${anime.descripcion}</aside>
            </div>
            `
          animesContenedor.insertAdjacentHTML('afterbegin', c_cuadros)
        })
      </script>






















<?php include('Pie de pagina.php') ?>





  </body>




</html>