<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>SM Locações</title>
</head>
<body>
  

<!-- Rodapé com link para redes sociais -->
<footer class="w-100 footer bg-dark d-flex flex-wrap justify-content-center align-items-center py-3 my-0 border-top">
    <div class="col-md-4 d-flex align-items-center justify-content-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="mb-3 mb-md-0 text-white">© SM Locações</span>
    </div>

    <!-- Ícones de Redes Sociais -->
    <div class="d-flex justify-content-center my-3">
        <a href="https://facebook.com" target="_blank" class="mx-2">
            <img src="img/rede-social/facebook.png" width="50px" height="50px" alt="Facebook">
        </a>
        <a href="https://instagram.com" target="_blank" class="mx-2">
            <img src="img/rede-social/instagram.png" width="50px" height="50px" alt="Instagram">
        </a>
        <a href="https://whatsapp.com" target="_blank" class="mx-2">
            <img src="img/rede-social/whatsapp.png" width="50px" height="50px" alt="WhatsApp">
        </a>
    </div>

    <!-- Área de Conteúdo Centralizado -->
    <div class="container">
        <div class="row fundo-rodape justify-content-center">
            <!-- Área de Localização -->
            <div class="col-md-4">
                <div class="mb-4">
                    <address>
                        Rua Novo Millenium, Número 28 - Ferraz de Vasconcelos - São Paulo - SP - CEP 085366-10<br>
                        <span class="glyphicon glyphicon-phone-alt"></span> (11) 995421-1439<br>
                        <span class="glyphicon glyphicon-envelope"></span>
                    </address>
                    <div class="embed-responsive embed-responsive-4by3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.874554391457!2d-46.382093499999996!3d-23.537013899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce651ffa560ee7%3A0xd962a86c9db5bd96!2sR.%20Novo%20Millenium%20-%20Ferraz%20de%20Vasconcelos%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1729278743344!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>

            <!-- Links Úteis -->
            <div class="col-md-4">
                <div class="mb-4">
                    <h4>Links</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="index.php" class="text-danger nav-link">
                                <span class="glyphicon glyphicon-home"></span> Página Inicial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="quemsomos.php" class="text-danger nav-link">
                                <span class="glyphicon glyphicon-ok-sign"></span> Quem Somos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="produtos.php" class="text-danger nav-link">
                                <span class="glyphicon glyphicon-cutlery"></span> Produtos
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Formulário de Contato -->
            <div class="col-md-4">
                <div class="mb-4">
                    <h4>Contato</h4>
                    <form action="rodape_contato_envia.php" method="post">
                        <div class="mb-3 input-group">
                            <span class="input-group-text">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" name="nome_contato" placeholder="Digite seu nome" class="form-control" required>
                        </div>

                        <div class="mb-3 input-group">
                            <span class="input-group-text">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="email" name="email_contato" placeholder="Digite seu email" class="form-control" required>
                        </div>

                        <div class="mb-3 input-group">
                            <span class="input-group-text">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </span>
                            <textarea name="comentario_contato" placeholder="Digite seu comentário" class="form-control" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Enviar <span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>