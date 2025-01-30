<?php 
if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
    $depoimento = Painel::get('tb_admin.depoimentos', 'id = ?'. array($id));
}else{
    Painel::messageToUser('erro', 'id não existe');
    die();
}
?>


<div class="box-content"><
<h2><i class ="fas fa-plus"></i> Editar Depoimentos</h2>/div>

<form method="post" enctype="multipart/form-data">
    <?php 
    if(isset($_POST['acao'])){
        if (Painel::update($_POST)) {
            Painel::messageToUser('sucesso','Depoimento editado com sucesso!');
            $depoimento = Painel::get('tb_admin.depoimentos', 'id=?', array($id));
        }else{
        Painel::messageToUser('erro', 'Campos vazios não são permitidos!');
        }
    }
    ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $depoimento['nome']?>">
    </div>
    <div class="form-group">
        <label for="nome">Depoimento:</label>
        <textarea name="depoimento"><?php echo $depoimento['depoimento']?></textarea>
    </div>
    <div class="form-group">
        <label for="nome">Data:</label>
        <input fomato="data" type="text" name="data" value="<?php echo $depoimento['data']?>" >
    </div>


    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="hidden" name="nomeTabela" value="tb_admin.depoimentos">
        <input type="submit" name="acao" value="Atualizar">
    </div>
</form>