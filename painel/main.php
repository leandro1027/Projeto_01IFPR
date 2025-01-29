<?php
if (isset($_GET['logout'])) {
    Painel::logout();
}
?>

<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <title>Painel de controle</title>
</head>

<body>
    <!--Barra lateral painel-->
    <aside>
        <div class="box-usuario">
            <?php if ($_SESSION['img'] == '') { ?>
                <div class="avatar-usuario">
                    <i class="fa-solid fa-user"></i>
                </div><!--avatar usuario-->
            <?php } else { ?>

                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL; ?>uploads/<?php echo $_SESSION['img']; ?>" alt="">
                </div>
            <?php } ?>

            <div class="nome-usuario">
                <h2><?php echo $_SESSION['nome']; ?></h2>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div><!--nome usuario-->
        </div><!--box usuario-->

        <div class="items-menu">
            <h2>Cadastro</h2>
            <a <?php selecionaMenu('cadastrar-slide')?> href="">Slide</a>
            <a <?php selecionaMenu('cadastrar-depoimento')?> href="<?php echo INCLUDE_PATH_PAINEL; ?>Cadastrar-depoimento">Depoimentos</a>
            <a <?php selecionaMenu('cadastrar-servico')?> href="">Serviço</a>
            <h2>Gestão</h2>
            <a <?php selecionaMenu('listar-slides')?> href="">Slide</a>
            <a <?php selecionaMenu('listar-Depoimentos')?> href="<?php echo INCLUDE_PATH_PAINEL; ?>listar-depoimentos">Depoimentos</a>
            <a <?php selecionaMenu('listar-servicos')?> href="">Serviços</a>
            <h2>Usuario</h2>
            <a <?php selecionaMenu('editar-usuario')?> href="<?php echo INCLUDE_PATH_PAINEL; ?>editar-usuario">Editar</a>
            <a <?php selecionaMenu('adicionar-usuario')?> <?php verificaPermissaoMenu(2) ?> href="<?php echo INCLUDE_PATH_PAINEL;?>adicionar-usuario"></a>
            <h2>Configuração</h2>
            <a <?php selecionaMenu('editar')?> href="">Editar</a>
        </div><!--items-menu-->

    </aside>
    <!--Barra lateral painel-->
    <header>

        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout=1">
                    <i class="fas fa-sign-out" aria-hidden="true"></i>
                </a>
            </div>

            <div class="home-btn">
                <a <?php if(@$_GET['url'] == ''){ ?> style="color:black:" <?php } ?>
                    href="<?php echo INCLUDE_PATH_PAINEL; ?>">
                    <i class="fa-solid fa-house" aria-hidden="true"></i></a>
            </div>
            <div class="clear"></div>
        </div>
    </header>

    <div class="content">
        <?php
        Painel::loadPage();
        ?>
    </div><!-- content -->

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Jquery -->

    <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/jquery_masks.js"></script>

</body>

</html>