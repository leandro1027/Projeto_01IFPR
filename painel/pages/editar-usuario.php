<div class="box-content">

<h2><i class ="fas fa-edit"></i> Editar usuário</h2>

<form method ="post"enctype="multipart/form-data">
    <?php
        if(isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $password = $_POST['password'];
            $imagem = $FILES['imagem'];
            $imagem_atual = $_POST['imagem_atual'];
            $usuario = new Usuario();

            if ($imagem['name'] != '') {
                # usuario selecionou a img...
                if(Painel::validImage($imagem)){
                    Painel::deleteFile($imagem_atual);
                    $imagem = Painel::uploadFile($imagem);
                    if($usuario->updateUser($nome, $password, $imagem)){
                        $_SESSION['img'] = $imagem;
                        Painel::messageToUser('Sucesso', 'Atualizado com sucesso!');
                    }else{
                        Painel::messageToUser('erro', 'Não foi possivel atualizar!');
                    }
                    }else{
                        Painel::messageToUser('erro', 'Formatos de imagem permitidos (JPEG, JPG ou PNG');
                    }
                }
        }
        ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="Nome" required value="<?php echo $_SESSION['nome']; ?>">
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="password" required value="<?php echo $_SESSION['password']; ?>">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem">
        <input type="hidden" name="imagem_atual" value ="<?php echo $_SESSION['img']; ?>">
    </div>
    <div class="form-group">
        <input type="submit" name="acao" value="Atualizar">
    </div>
    </div>
    
</form>