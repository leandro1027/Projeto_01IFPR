<div class="box-content"><
<h2><i class ="fas fa-edit"></i> Adicionar Depoimentos</h2>/div>

<form method="post" enctype="multipart/form-data">
    <?php 
    if(isset($_POST['acao'])){
        Painel::messageToUser('sucesso', 'Depoimento cadastrado com sucesso!');
    }
    ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="nome">Depoimento:</label>
        <textarea name="depoimento"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="acao" value="Cadastrar">
    </div>
</form>