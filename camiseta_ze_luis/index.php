<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Camisetas</title>
</head>

<body>

    <div class="card">
        <img decoding="async" src="./logo_resized.jpg" alt="Imagem de exemplo">
        <h5>Pedido de Camisetas</h5>
        <form method="POST" action="./camisetas.php">

            <div class="principal">
                <div class="tudo">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu Nome">
                </div>

                <div class="tudo">
                    <label for="tamanho">Tamanho:</label>
                    <input type="text" name="tamanho" id="tamanho" placeholder="Qual o tamanho?">
                </div>

                <div class="tudo">
                    <label for="qtd">Quantidade:</label>
                    <input type="text" name="qtd" id="qtd" placeholder="Quantas camisetas serão?">
                </div>
            </div>
            <div class="btn">
                <button type="submit" class="btn btn-primary botao2">Enviar</button>
            </div>
        </form>
    </div>


</body>

</html>