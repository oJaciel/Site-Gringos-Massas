<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Gringo's Massas</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!--Link do Manifest-->
    <link rel="manifest" href="manifest.json">
</head>


<body>
    <main class="fundo">



        <!--Barra de navegação-->
        <?php 
        include('../base/header.php');
        ?>

        <br>

        <!--Breadcrumbs-->
        <nav class="ms-5"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../views/index.php">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produtos</li>
            </ol>
        </nav>

        <!--Imagem de Título-->
        <div class="container text-center fade-in">
            <div class="row">
                <div class="col-12">
                    <p><img src="../assets/images/titulo/produtos.png" class="img-fluid" alt="Produtos"></p>
                    <p><img src="../assets/images/titulo/linha.png" class="img-fluid" alt="Linha"></p>
                </div>
            </div>
        </div>

    </main>

    <!--Rodapé-->
    <?php 
    include('../base/footer.php');
    ?>

    <!------------------------------------------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>