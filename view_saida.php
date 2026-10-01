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
    <div style ="text-align: center;">
        <img style="width: 300px; height: 400px;" src="<?= $imagem?>" alt="Imagem do filme">
        <p style= "color: white"><b> Descrição do filme:</b> <?= $descricao ?></p>
    </div>
    <h2 style="background-color: #fcffc7; text-align: center;">Resumo da Compra</h2>
    <p style= "color: white"><b>Nome: </b> <?=  $nome ?></p>
    <p style= "color: white"><b>Idade: </b> <?=  $idade ?> anos</p>
<p style= "color: white"><b>Estudante: </b> <?=  $estudante ?></p>
<p style= "color: white"><b>Entrada: </b> <?=  $entrada ?></p>
<hr>
<p style= "color: white"><b>Filme: </b> <?=  $nomeFilme ?></p>
<p style= "color: white">
    <b>Quantidade de ingressos: </b>
    <?=  $quantidade ?>
</p>
<p style= "color: white">
    <b>Valor dos ingressos: </b>
    R$ <?=  number_format($precoFinalIngresso, 2, ",", "."); ?>
</p>
<h3 style="background-color: #fcffc7; text-align: center;">🍿 Produtos</h3>
<p style= "color: white">
    <b>Quantidade de pipocas: </b>
    <?=  $quantidadePipoca; ?>
</p>
<p style= "color: white">
    <b>Valor das pipocas: </b>
    R$ <?=  number_format($precoFinalPipoca, 2, ",", "."); ?>
</p>
<hr>
<p style= "color: white">
    <b>Total sem desconto: </b>
    R$ <?= number_format($precoFinalCompra, 2, ",", "."); ?>
</p>
<p style= "color: white">
    <b>Desconto: </b>
    <?=  $estudante == 'Sim' ? '10%' : '0%'; ?>
</p>
<h2 style="background-color: #fcffc7; text-align: center;">
    Total final:
    R$ <?= number_format($precoFinalCompra, 2, ",", "."); ?>
</h2 style="background-color: #fcffc7; text-align: center;">
<?php if ($entrada == "Não permitida") { ?>

    <p style= "color: white">❌ Entrada não permitida.</p>

<?php } else { ?>

    <p style= "color: white">🍿 Bom filme na Sétima Arte!</p>

<?php } ?>
    </main>
</body>
</html>