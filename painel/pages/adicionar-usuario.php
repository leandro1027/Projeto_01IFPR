<div class="box-content">
<h2><i class="fas fa-edit" ></i>Adicionar Usuário</h2>

<form method="post" enctype="multipart/form-data">
    <?php 
    if (isset($_POST['acao'])) {
    
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