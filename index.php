<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-YEVcwkGIMj7GOwyCtn6AEVNtBwh3wJl/IljaNwLAWoomcksvhKhNWTouAqTbrj/C" crossorigin="anonymous">
    <style>
        .header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            top: 0;

        }
         .ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:rgb(12, 131, 250);
        }
        .ul li {
            float: left;/*para que os li fiquem lado a lado*/
        }
        .ul li a{
            display: block;/*para que o link ocupe todo o espaço do li*/
            color: whitesmoke;
            text-align: center;/*para que o texto fique centralizado*/
            padding: 14px 16px;
            text-decoration: none;/*para que o link não fique sublinhado*/
            font-size: 17px;/*para que o texto fique maior*/
            font-family: 'Courier New', Courier, monospace;/*para que o texto fique em uma fonte diferente*/

        }    

    </style>
    <?php
    // Inclui o arquivo de conexão com o banco de dados
    include_once("conecta.php");
    ?>

</head>

<body>

    <header class="bg-dark py-3">

        <div class="container">

            <section class="logo">
                <img src="#" />
            </section>

            <section class="navbar navbar-dark justify-content py-2">
                <ul class="navbar-nav">
                    <li><a class="nav-link text-white" href="index.php">Inicio </a></li>
                    <li><a class="nav-link text-white" href="cardapio.php">Cardápio </a> </li>
                    <li><a class="nav-link text-white" href="promocoes.php">Promoções</a></li>
                    <li><a class="nav-link text-white" href="contato.php">Contato</a></li>
                </ul>
            </section>

        </div>

    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card" style="width:100%;">
                    <img src="#" class="card-img-top" alt="hamburguer simples">
                    <div class="card-body">
                        <h5 class="card-title">Hamburguer simples </h5>
                        <p class="card-text">Uma deliciosa opção de hamburguer simples</p>
                        <?php
                        // Verifica se a variável 'preco' foi enviada via POST
                        if (isset($_POST['preco'])) {
                            // Exibe o preço com segurança usando htmlspecialchars para evitar XSS
                            echo "<p class='card-text'>Preço:" . htmlspecialchars($_POST['preco']) . "</p>";
                        } else {
                            // Exibe uma mensagem caso o preço não esteja disponível
                            echo "<p class='card-text'>Não está disponível</p>";
                        }
                        // card-text é uma classe do Bootstrap para textos dentro do corpo do cartão
                        ?>
                        <a class="btn btn-primary" href="#">Comprar</a>
                        <?php
                        // Aqui ficaria a lógica para processar a compra quando o botão for clicado
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width:100%;">
                    <img src="#" class="card-img-top" alt="X-burguer Completo">
                    <div class="card-body">
                        <h5 class="card-title">X-burguer Completo </h5>
                        <p class="card-text">Um x-burguer completo para matar sua fome!</p>
                        <?php
                        if (isset($_POST['preco'])) {
                            echo "<p class='card-text'>Preço:" . htmlspecialchars($_POST['preco']) . "</p>";
                        } else {
                            echo "<p class='card-text'>Não está disponível</p>";
                        }
                        ?>
                        <a class="btn btn-primary" href="#">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width:100%;">
                    <img src="#" class="card-img-top" alt="X-Bacon">
                    <div class="card-body">
                        <h5 class="card-title">X-Bacon </h5>
                        <p class="card-text">O clássico x-bacon que você adora.</p>
                        <?php
                        if (isset($_POST['preco'])) {
                            echo "<p class='card-text'>Preço:" . htmlspecialchars($_POST['preco']) . "</p>";
                        } else {
                            echo "<p class='card-text'>Não está disponível</p>";
                        }
                        ?>
                        <a class="btn btn-primary" href="#">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width:100%;">
                    <img src="#" class="card-img-top" alt="X-Salada">
                    <div class="card-body">
                        <h5 class="card-title">X-Salada </h5>
                        <p class="card-text">Uma opção mais leve e saborosa.</p>
                        <?php
                        if (isset($_POST['preco'])) {
                            echo "<p class='card-text'>Preço:" . htmlspecialchars($_POST['preco']) . "</p>";
                        } else {
                            echo "<p class='card-text'>Não está disponível</p>";
                        }
                        ?>
                        <a class="btn btn-primary" href="#">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card" style="width:100%;">
                    <img src="#" class="card-img-top" alt="X-Salada">
                    <div class="card-body">
                        <h5 class="card-title">X-Salada </h5>
                        <p class="card-text">Uma opção mais leve e saborosa.</p>
                        <?php
                        if (isset($_POST['preco'])) {
                            echo "<p class='card-text'>Preço:" . htmlspecialchars($_POST['preco']) . "</p>";
                        } else {
                            echo "<p class='card-text'>Não está disponível</p>";
                        }
                        ?>
                        <a class="btn btn-primary" href="#">Comprar</a>
                    </div>
                </div>
            </div>

        </div> 
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Lanchonete. Todos os direitos reservados.</p>
        <p>Desenvolvido por Kaio Cesar</p>
    </footer>
 </body>

</html>