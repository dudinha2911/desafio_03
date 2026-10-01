<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sétima Arte</title>
    <link rel="icon" href="https://cdn3d.iconscout.com/3d/premium/thumb/clapper-box-3d-icon-download-in-png-blend-fbx-gltf-file-formats--movie-clapperboard-communication-pack-network-icons-6184994.png">
</head>
</head>
<body style="background-color:#1b0a26 ;">
    <header>
        <h3 style="background-color: #fcffc7; text-align: center;">🎬Cinema - Sétima Arte🎬</h3>
        <h1 style="text-align: center;color: white;">Bem-Vindo á Sétima Arte</h1>
        <p style="color: white; text-align: center;">A emoção do cinema em sua forma mais pura.</p>
        <hr>
</header>
<main>
    <br>
    <div style ="text-align: center;">
        <img style="width: 300px; height: 400px;" src="<?= $imagem?>" alt="Imagem do filme">
        <p style= "color: white"><b style="color: #fcffc7;"> Descrição do filme:</b> <?= $descricao ?></p>
        <br>
    </div>
    <h2 style="background-color: #fcffc7; text-align: center;">Resumo da Compra</h2>
<article style="color: #fcffc7; text-align: center;">Confira os detalhes da sua compra e aproveite a experiência cinematográfica!
    <br>
    <br>
    <p style= "color: white"><b style="color: #fcffc7;">Nome: </b> <?=  $nome ?></p>
    <p style= "color: white"><b style="color: #fcffc7;">Idade: </b> <?=  $idade ?> anos</p>
    <p style= "color: white"><b style="color: #fcffc7;">Estudante: </b> <?=  $estudante ?></p>
    <p style= "color: white"><b style="color: #fcffc7;">Entrada: </b> <?=  $entrada ?></p>
    <br>
    <hr>
    <br>
    <p style= "color: white"><b style="color: #fcffc7;">Filme: </b> <?=  $nomeFilme ?></p>
<p style= "color: white">
    <b style="color: #fcffc7;">Quantidade de ingressos: </b>
    <?=  $quantidade ?>
</p>
<p style= "color: white">
    <b style="color: #fcffc7;">Valor dos ingressos: </b>
    R$ <?=  number_format($precoFinalIngresso, 2, ",", "."); ?>
</p>
<br>
</article>
<h3 style="background-color: #fcffc7; text-align: center;">🍿 Produtos 🍿</h3>
<br>
<article style="text-align: center;">
<p style= "color: white">
    <b style="color: #fcffc7;">Quantidade de pipocas: </b>
    <?=  $quantidadePipoca; ?>
</p>
<p style= "color: white">
    <b style="color: #fcffc7;">Valor das pipocas: </b>
    R$ <?=  number_format($precoFinalPipoca, 2, ",", "."); ?>
</p>
<br>
<hr>
<br>
<p style= "color: white">
    <b style="color: #fcffc7;">Total sem desconto: </b>
    R$ <?= number_format($precoFinalCompra, 2, ",", "."); ?>
</p>
<p style= "color: white">
    <b style="color: #fcffc7;">Desconto: </b>
    <?=  $estudante == 'Sim' ? '10%' : '0%'; ?>
</p>
<br>
</article>
<h2 style="background-color: #fcffc7; text-align: center;">
    Total final:
    R$ <?= number_format($precoFinalCompra, 2, ",", "."); ?>
</h2 style="background-color: #fcffc7; text-align: center;">
<?php if ($entrada == "Não permitida") { ?>

    <p style= "color: white">❌ Entrada não permitida.</p>

<?php } else { ?>

    <p style= "color: white; text-align: center;">🍿 Bom filme na Sétima Arte!</p>
    <hr>

<?php } ?>

            <footer>
                <p style="color: #fcffc7; text-align: center;">&copy; 2026 Sétima Arte. Todos os direitos reservados.</p>
                <p style="color: #fcffc7; text-align: center;">&copy; SENAI - Serviço Nacional de Aprendizagem Industrial.</p>
            </footer>
    </main>
</body>
</html>