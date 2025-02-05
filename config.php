<?php
 
    /*cria uma sessão ou retorna o atual com base em um identificaor passado por
     meio de uma solicitação GET ou POST ou passado por meio de um cookie*/
    session_start();

    define('INCLUDE_PATH', 'http://localhost/Projeto_01testee/'); // Definir o domínio do site

    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    //fuso horario de SP
    date_default_timezone_set('America/Sao_Paulo');

    define(constant_name: 'NOME_EMPRESA', 'IFPR');

    define ('BASE_DIR_PAINEL', __DIR__.'/painel/');

    //Banco de dados
    //Hospedagem
    define('HOST', 'localhost');
    //Banco
    define('DATABASE', 'projeto_01');
    //Usuario
    define('USER', 'root');
    //Senha
    define('PASSWORD', '');

    $autoload = function($class){
        include('assets/classes/'.$class.'.php'); // Carregando a classe: 'Email'
    };

    spl_autoload_register($autoload);

    //função para os cargos dentro do painel
    function pegaCargo($indice){
        return Painel::$cargos[$indice];
    }

    function selecionaMenu($menuItem){
        $url = explode('/', @$_GET['url'])[0];
        if ($url == $menuItem){
            echo 'class="menu-active"';

        }
    }

    function verificaPermissaoMenu($permissao){
        if ($_SESSION['cargo'] >= $permissao){
            return true;
        }else{
            echo 'style="display:none"';
        }
        
    }

    function verificaPermissaoPagina($permissao){
        if ($_SESSION['cargo'] >= $permissao) {
            return true;
    }else{
        include('painel/pages/permissao_negada.php');
        die();
    }
}

?>