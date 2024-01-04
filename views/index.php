<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início - Gringo's Massas</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!--Link do Manifest-->
  <link rel="manifest" href="manifest.json">
</head>


<body>




  <!--Barra de navegação-->
  <?php
  include('../base/header.php');
  ?>

  <main class="fundo">
    <!--Banner-->
    <div class="banner">
      <img class="img-fluid" src="../assets/images/index/fundobanner.png" alt="Fundo Banner">
      <img class="img-fluid logo-banner fade-in" src="../assets/images/index/logobanner.png" alt="Logo Banner">
    </div>

    <div class="margem"></div>

    <!--Sobre nós-->
    <section class="conteudo">
      <div class="container text-center">
        <div class="row">
          <div class="col-12">
            <p><img src="../assets/images/titulo/a_gringos_massas.png" class="img-fluid" alt="A Gringo's Massas"></p>
            <p><img src="../assets/images/titulo/linha.png" class="img-fluid" alt="Linha"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <img class="img-fluid" src="../assets/images/index/fachada.jpg" alt="Fachada">
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="mb-3">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, dolorem cum? Ipsam hic suscipit nobis qui
              dolores
              eum officiis temporibus adipisci voluptate minima, eaque consequatur, vitae porro minus amet perspiciatis!
              <br>
              <br>
              <p>
                <a class="btn btn-primary" href="../views/sobre_nos.php">Saiba Mais</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="margem"></div>

    <!--Produtos-->

    <div class="container text-center">
      <div class="row">
        <div class="col-12">
          <p><img src="../assets/images/titulo/produtos.png" class="img-fluid" alt="Produtos"></p>
          <p><img src="../assets/images/titulo/linha.png" class="img-fluid" alt="Linha"></p>
        </div>
      </div>
      <div class="row">

        <!--Carrosel com as fotos dos produtos-->
        <div class="col-12 col-md-6">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/images/produto/Massa.png" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../assets/images/produto/Capeletti.png" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../assets/images/produto/Macarrão.png" class="d-block w-100 img-fluid" alt="...">
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 d-flex align-items-center order-md-first">
          <div>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, dolorem cum? Ipsam hic suscipit nobis qui
            dolores
            eum officiis temporibus adipisci voluptate minima, eaque consequatur, vitae porro minus amet perspiciatis!
            <br>
            <br>
            <p>
              <a class="btn btn-primary" href="../views/produtos.php">Conheça Nossos Produtos</a>
            </p>
          </div>
        </div>
      </div>

    </div>
    </div>

    <br>

  </main>



  <!--Rodapé-->
  <?php
  include('../base/footer.php');
  ?>


  <!------------------------------------------------------------------------------->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>