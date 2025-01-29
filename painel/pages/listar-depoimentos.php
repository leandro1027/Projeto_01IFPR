<?php 
$depoimentos = Painel::getAll('tb_admin.depoimentos');
?>

<div class="box-content">
    <h2><i class="fas fa-database"></i> Depoimentos cadastrados</h2>

    <table>
        <tr>
            <td>Data</td>
            <td>Nome</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        <?php foreach ($depoimentos as $key =>$values ) { ?>
        <tr>
            <td>29/01/2025</td>
            <td>Leandro</td>
            <td><a class="edit" href=""><  <i class="fas fa-edit" ></i></a></td>
            <td><a class="delet" href=""><  <i class="fas fa-trash" ></i></a></td>
        </tr>
        <?php } ?>
    </table>
</div>