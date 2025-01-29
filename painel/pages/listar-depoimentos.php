<?php 
$depoimentos = Painel::getAll('tb_admin.depoimentos');
?>

<div class="box-content">
    <h2><i class="fas fa-database"></i> Depoimentos cadastrados</h2>

    <div class="wraper-table">
    <table>
        <tr>
            <td>Data</td>
            <td>Nome</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        <?php foreach ($depoimentos as $key => $value) { ?>
        <tr>
            <td><?php echo $value['data']; ?></td>
            <td><?php echo $value['nome']; ?></td>
            <td><a class="edit" href=""><  <i class="fas fa-edit"></i></a></td>
            <td><a class="delet" href=""><  <i class="fas fa-trash"></i></a></td>
        </tr>
        <?php } ?>
    </table>
    </div> <!--wraper-->

    <div class="paginacao">
        <a  class="page-selected" href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
    </div> <!--paginação-->
</div> <!--box-content-->