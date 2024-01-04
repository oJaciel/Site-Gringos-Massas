<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Gringo's Massas</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!--Link do Manifest-->
    <link rel="manifest" href="manifest.json">
</head>


<body>
    <main class='fundo'>

    <!--Barra de navegação-->
    <?php 
        include ('../base/header.php');
    ?>

        <br>

        <!--Breadcrumbs-->
        <nav class="ms-5"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../views/index.php">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contato</li>
            </ol>
        </nav>

        <!--Imagem de Título-->
        <div class="container fade-in text-center">
            <div class="row">
                <div class="col-12">
                    <p><img src="../assets/images/titulo/contato.png" class="img-fluid" alt="Contato"></p>
                    <p><img src="../assets/images/titulo/linha.png" class="img-fluid" alt="Linha"></p>
                </div>
            </div>
        </div>

        <!--Informações de Endereço, Telefone e Horário de Atendimento-->
        <div class="container text-center">
            <br>
            <br>

            <!--Endereço-->
            <div class="row">
                <div class="col-12 col-md-3 text-center mb-5">
                    <p class="h3"><img class="img-fluid" src="../assets/images/contato/endereco.png" alt="Nosso endereço"> Nosso endereço</p>
                    <br>
                    <p>Rua Cônego João Batista Sorg, 593</p>
                    <p>Bairro Progresso</p>
                    <p>Chapada, RS</p>
                    <p>CEP 99530-000</p>
                </div>


                <!--Telefone-->
                <div class="col-12 col-md-3 text-center mb-5">
                    <p class="h3"><img class="img-fluid" src="imagens_contato/telefone.png" alt=""> Nosso Telefone</p>
                    <br>
                    <p class="h5"><a target="_blank" href="https://wa.me/555496168921"><img class="img-fluid"
                                src="../assets/images/contato/whatsapp.png" alt="WhatsApp"></a> (54) 9 996168921</p>

                    <p></p>
                    <br>
                    <p class="h5"><a target="_blank" href="https://wa.me/555499575514"><img class="img-fluid"
                                src="../assets/images/contato/whatsapp.png" alt="WhatsApp"></a> (54) 9 99575514</p>

                </div>

                <div class="col-1"></div>

                <!--Horário de Atendimento-->
                <div class="col-12 col-md-5 mb-4">
                    <p class="h2"> <img class="img-fluid" src="../assets/images/contato/horario.png" alt=""> Horário de Atendimento</p>
                    <p class="h4">Segunda - Sexta</p>
                    <p>Manhã: 08:00 às 11:30</p>
                    <p>Tarde: 13:30 às 18:00</p>
                    <br>
                    <p class="h4">Sábado</p>
                    <p>Manhã: 08:00 às 12:00</p>
                    <p>Tarde: sem atendimento</p>
                </div>
            </div>
        </div>


        <!--Mapa do Google-->
        <div class="iframe-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3521.0000220618113!2d-53.06912562514702!3d-28.055023941897467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fce75555f4ef2d%3A0x2f46a84c0d132284!2sGringo&#39;s%20Massas!5e0!3m2!1spt-BR!2sbr!4v1694385725338!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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