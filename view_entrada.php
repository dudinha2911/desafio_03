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
        <h1 style="text-align: center;color: white;"">Bem-Vindo á Sétima Arte</h1>
        <p style="color: white; text-align: center;">A emoção do cinema em sua forma mais pura.</p>
        <hr>
    </header>
    <main>
        <h2 style="background-color:#fcffc7; text-align: center;">Quem nós somos</h2>
        <p style="color: white; text-align: center;">No Sétima Arte, ir ao cinema é mais do que assistir a um filme: é viver uma experiência única. Combinamos som e imagem de alta tecnologia, conforto absoluto e os melhores lançamentos para que você sinta cada emoção na tela grande!.</p>
        <div style="text-align: center;">
            <img style="width: 440px; height: 240px;" src="Gemini_Generated_Image_ubchl2ubchl2ubch.jpg" alt="logo">
            <figcaption style="color: white;">Logo - Sétima Arte</figcaption>
        </div>
        <hr>
        <h2 style="background-color:#fcffc7; text-align: center;">Compre seu ingresso aqui!</h2>
        <p style="color: #fcffc7; text-align: center;"><b>Valor do ingresso(sem desconto) = R$33,00</b></p>
        <p style="color: #fcffc7; text-align: center;"><b>Valor da pipoca = R$15,00</b></p>
        <br>
        <form action="Controller.php" method="post" style="text-align: center; color: white;">
            <!-- Nome -->
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui..." required>
            <br><br>
            <!-- E-mail -->
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email aqui..." required>
            <br><br>
            <!-- Idade -->
            <label for="idade">Idade</label>
            <input type="number" id="idade" name="idade" placeholder="Digite sua idade aqui..." required>
            <br><br><br><br>
            <!-- Estudante sim / nn -->
            <label>Você é estudante?</label>
            <label for="sim">Sim, sou</label>
            <input type="radio" value="Sim" id="sim" name="pergunta">
            <label for="nao">Não, não sou</label>
            <input type="radio" value="Nao" id="nao" name="pergunta">
            <br><br><br><br>
            <!-- Ingressos -->
            <label for="quant">Quantidade de Ingressos</label>
            <input type="number" id="quant" name="quant" placeholder="Digite a quantidade..." required>
            <br><br>
            <!-- Filmes -->
            <label for="filme">Selecione o filme</label>
            <select name="filme" id="filme" required>
                <option value="" selected disabled>
                    Selecionar...
                </option>
                <option value="filme1">Vingadores: Ultimato</option>
                <option value="filme2">As Branquelas</option>
                <option value="filme3">Minha Melhor Amiga</option>
                <option value="filme4">Thor: Ragnarok</option>
                <option value="filme5">UP- Altas Aventuras</option>
                <option value="filme6">Viva A Vida É Uma Festa</option>
            </select>
            <br><br>
            <!-- Pipoca -->
            <label for="quantpipoca">🍿Pipoca🍿</label>
            <input type="number" name="quantpipoca" id="quantidade" placeholder="Quantidade pipoca...">
            <br><br><br>
            <button type="submit">Enviar</button>
            <hr>
            <footer>
                <p style="color: #fcffc7; text-align: center;">&copy; 2026 Sétima Arte. Todos os direitos reservados.</p>
                <p style="color: #fcffc7; text-align: center;">&copy; SENAI - Serviço Nacional de Aprendizagem Industrial.</p>
            </footer>

        </form>

    </main>
</body>
</html>