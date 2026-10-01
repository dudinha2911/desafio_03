<?php

// ARRAY DOS FILMES

$filmes = [
    [
        "imagem" => 'https://br.web.img3.acsta.net/pictures/19/04/26/17/30/2428965.jpg',
        "nomefilm" => 'filme1',
        "filme" => "Vingadores: Ultimato",
        "descricao" => "Os Vingadores enfrentam Thanos em uma última tentativa de salvar o universo e trazer de volta aqueles que desapareceram."
    ],
     [
        "imagem" => "https://tse1.mm.bing.net/th/id/OIP.Ly4fSVVqhf0YWZig7hH6twHaKk?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "nomefilm" => 'filme2',
        "filme" => "As Branquelas",
        "descricao" => "Dois agentes do FBI se disfarçam de duas herdeiras para protegê-las, enfrentando várias situações engraçadas."
    ],
    [
        "imagem" => "https://tse3.mm.bing.net/th/id/OIF.aEQqQ1E5EiroKH3kbsxeKQ?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "nomefilm" => 'filme3',
        "filme" => 'Minha Melhor Amiga',
        "descricao" => "Uma história sobre amizade, sentimentos e os desafios enfrentados por duas melhores amigas ao longo da vida."
    ],
    [
        "imagem" => "https://tse3.mm.bing.net/th/id/OIP.gP5pg_Mcx1SI2DkoaRBbXgHaK-?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "nomefilm" => 'filme4',
        "filme" => 'Thor: Ragnarok',
        "descricao" => "Thor precisa enfrentar novos inimigos e impedir a destruição de Asgard, contando com a ajuda de velhos e novos aliados."
    ],
    [
        "imagem" => "https://tse2.mm.bing.net/th/id/OIP.hoadaxHRuzgVuJcBygHoQwHaJ4?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "nomefilm" => 'filme5',
        "filme" => 'UP- Altas Aventuras',
        "descricao" => "Carl, um senhor viúvo, viaja para a América do Sul em uma casa presa a balões, acompanhado inesperadamente pelo jovem Russell."
    ],
    [
        "imagem" => "https://tse1.mm.bing.net/th/id/OIP.zs8RjXIvmV3ss88c6N7mIgHaLH?r=0&rs=1&pid=ImgDetMain&o=7&rm=3",
        "nomefilm" => "filme6",
        "filme" => 'Viva A Vida É Uma Festa',
        "descricao" => "Miguel, um garoto apaixonado por música, viaja ao mundo dos mortos para descobrir mais sobre sua família e seu passado."
    ]

];

// var_dump($_POST);
// Recebe dados do formulário POST de forma segura
$filme = $_POST["nomefilm"] ?? "";
$nome = $_POST["nome"] ?? "";
$idade = isset($_POST["idade"]) ? (int)$_POST["idade"] : 0;
$estudante = $_POST["pergunta"] ?? "";
$quantidade = isset($_POST["quant"]) ? (int)$_POST["quant"] : 0;
$quantidadePipoca = isset($_POST["quantpipoca"]) ? (int)$_POST["quantpipoca"] : 0;

// Procura o filme escolhido no array
$nomeFilme = "Não selecionado";
$sala = 0;
$descricao = "Sem descrição.";
$imagem = "";

foreach($filmes as $filme){
    if($filme['nomefilm'] == $_POST['filme']){
        $nomeFilme = $filme['filme'];
        $descricao = $filme['descricao'];
        $imagem = $filme['imagem'];
    }
}

function calcularDesconto($valorTotal){
    return $valorTotal * 0.10;
}

$precoFinalIngresso = $quantidade * 33;
$precoFinalPipoca = $quantidadePipoca * 15;
$precoFinalCompra = $precoFinalIngresso + $precoFinalPipoca;
$desconto = 0;

if($estudante == "Sim"){
    $desconto = calcularDesconto($precoFinalCompra);
}

$precoFinalCompra = $precoFinalCompra - $desconto;

if($idade < 12){
    $entrada = 'Entrada Negada!';
}else{
    $entrada = 'Entrada liberada!';
}
// Inclui a view para exibição
require_once "view_saida.php";
?>