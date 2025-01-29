<?php
verificaPermissaoPagina(2);
?>

<div class="box-content">
    <h2><i class="fas fa-edit" ></i>Adicionar Usuário</h2>

<form method="post" enctype="multipart/form-data">
    <?php 
    if (isset($_POST['acao'])) {
        $login = $_POST['login'];
        $nome = $_POST['nome'];
        $cargo = $_FILES['cargo'];
        $password = $_POST['password'];

        if ($login == '') {
           Painel::messageToUser('erro','Preencha o login');
        } else if ($nome == ''){
        Painel::messageToUser('erro','Preencha o nome');
        } else if ($cargo == ''){
            Painel::messageToUser('erro','Preencha o cargo');
        } else if($password == ''){
            Painel::messageToUser('erro','Preencha a senha');
    } else{

        if($cargo >= $_SESSION['cargo']){
            Painel::messageToUser('erro', 'Selecione um cargo menor que o seu!');
        }else if(Usuario::userExists($login)){
                Painel::messageToUser('erro', 'Login indisponivel');
        }else{
            //podemos add users pelo banco
            $usuario = new usuario();
            $usuario->registerUser($login, $password, $nome, $cargo);
            Painel::messageToUser('sucesso', 'Podemos adicionar');
            
        }
    }
}
?>
<div class="form-group">
        <label for="nome">Login:</label>
        <input type="text" name="Nome" required>
    </div>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
    </div>

    <div class="form-group">
        <label for="cargos">Cargo::</label>
        <select name="cargo">
            <?php 
                foreach(Painel::$cargos as $key => $value){
                    if($key <$_SESSION  ['cargo'])
                    echo '<option value="'.$key.'">'.value.'</option>';
                }
            ?>
        </select>
    </div>



    <div class="form-group">
        <label for="nome">Senha:</label>
        <input type="password" name="senha" required>
    </div>
    <div class="form-group">
        <label for="nome">Imagem:</label>
        <input type="file" name="imagem" required>
    </div>
    <div class="form-group">
        <input type="submit" name="acao" value="Adicionar">
    </div>
    </div>
</form>

</div> <!--box-conten--