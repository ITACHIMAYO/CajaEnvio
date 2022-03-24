<!DOCTYPE html>

<html>


<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="Estilos.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>
CATEGORIA</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta lang="es">
  <link rel="stylesheet" href="css/Estilos.css">
  <link rel="shortcut icon" href="Img/Logo.png">

</head>

<body class="bodyvoto">



  <?php include('Encabezado.php') ?>

    



    <div>
      <h2 class="Titulo2">CATEGORIAS</h2>

    </div>

   


    <!--CONTENIDO DE LA PAGINA-->


  
    

      <main class="animes">
  

    

 
       
    
</main>


     



      <script>
        const animes = [
          {
            nombre: 'Fundas y Micas',
            img: "https://static.pullandbear.net/2/photos/2022/V/0/2/p/8970/508/015/8970508015_1_1_3.jpg?t=1626710935381"
            

          },
          {
            nombre: 'Videojuegos',
            img: "https://shopings.co/546-large_default/control-gamepad-para-celular.jpg"
            
          },
          {
            nombre: 'Audifonos',
            img: "https://cdn.shopify.com/s/files/1/3097/9604/products/3a2bc95c-68fa-44bc-b56d-2eff6ebd5ddf_5d810afe-076e-496f-997f-47cde8daf847_grande.jpg?v=1645889116"
            
          },
          {
            nombre: 'Bocinas y Bafle',
            img: "https://http2.mlstatic.com/D_NQ_NP_651170-MLA44493409885_012021-O.jpg"
            
          },
          {
            nombre: 'Mochilas y Bolsos',
            img: "https://http2.mlstatic.com/D_NQ_NP_742199-MLM43600752777_092020-O.jpg"
            
          },
          {
            nombre: 'Computo',
            img: "https://m.media-amazon.com/images/I/51VpABY-b6L._AC_SX425_.jpg"
            
          },
          {
            nombre: 'Ferreteria',
            img: "https://st.depositphotos.com/1031174/2384/i/600/depositphotos_23847113-stock-photo-tools.jpg"
           
          },
          
          {
            nombre: 'Iluminacion',
            img: "https://images-na.ssl-images-amazon.com/images/I/81X9xlfL5GL._AC._SR360,460.jpg"
            
          },
          {
            nombre: 'Belleza',
            img: "https://http2.mlstatic.com/D_NQ_NP_837718-MLM31827038398_082019-O.webp"
           
          },
          {
            nombre: 'Autos',
            img: "https://images-na.ssl-images-amazon.com/images/I/61-0fLNbFKL._AC._SR360,460.jpg"
           
          }     
                      
             
        ]

        const animesContenedor = document.querySelector('.animes')

        

        animes.map(anime => {
          const c_cuadros = `
            <div class="C-Cuadros">
            <h2 class="TituloAnime">${anime.nombre}</h2>
  
            <div class="img-center">
              <img class="AnimeImg"
                src="${anime.img}"
                alt="${anime.nombre}">
            </div><br>
            
            
            </div>
            
            `
          animesContenedor.insertAdjacentHTML('afterbegin', c_cuadros)
        })
      </script>






















<?php include('Pie de pagina.php') ?>





  </body>




</html>