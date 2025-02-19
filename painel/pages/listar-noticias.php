<?php
    if(isset($_GET['excluir'])){
        $idExcluir = intval($_GET['excluir']);
        $selectImagem = MySql::conectar()->prepare("SELECT capa
                                                    FROM `tb_admin.noticias`
                                                    WHERE id = ?");
        $selectImagem->execute(array($idExcluir));
        $imagem = $selectImagem->fetch()['capa'];
        Painel::deleteFile($imagem);
        Painel::delete('tb_admin.noticias', $idExcluir);
        Painel::redirect(INCLUDE_PATH_PAINEL.'listar-noticias');
    }else if(isset($_GET['order']) && isset($_GET['id'])){
        Painel::orderItem('tb_admin.noticias', $_GET['order'], $_GET['id']);
    }

$paginaAtual = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
$porPagina = 4;
$noticias = Painel::getAll('tb_admin.noticias', ($paginaAtual - 1) * $porPagina, $porPagina);
?>

<div class="box-content">
    <h2><i class="fas fa-database"></i> Notícias cadastrados</h2>

    <div class="wraper-table">
        <table>
            <tr>
                <td>Título</td>
                <td>Categoria</td>
                <td>Imagem</td>
                <td>Editar</td>
                <td>Excluir</td>
                <td>Descer</td>
                <td>Subir</td>
            </tr>
            <?php foreach ($noticias as $key => $value) { 
                $nomeCategoria = Painel::get('tb_admin.categorias',
                                            'id = ?',
                                            array($value['categoria_id']))['nome'];
            ?>
            <tr>
                <td><?php echo $value['titulo']; ?></td>
                <td><?php echo $nomeCategoria ?></td>
                <td><img style="width:60px; height=60px;" ;
                        src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $value['capa'];?>"></td>
                <td><a class="edit"
                        href="<?php echo INCLUDE_PATH_PAINEL ?>editar-noticias?id=<?php echo $value['id']; ?>"><i
                            class="fas fa-edit"></i></a></td>
                <td><a actionBtn="delete" class="delete"
                        href="<?php echo INCLUDE_PATH_PAINEL ?>listar-noticias?excluir=<?php echo $value['id'];?>"><i
                            class="fas fa-trash"></i></a></td>
                <td><a class="order-down"
                        href="<?php echo INCLUDE_PATH_PAINEL; ?>listar-noticias?order=up&id=<?php echo $value['id']; ?>"><i
                            class="fa-solid fa-angle-down"></i></a></td>
                <td><a class="order-up"
                        href="<?php echo INCLUDE_PATH_PAINEL; ?>listar-noticias?order=down&id=<?php echo $value['id']; ?>"><i
                            class="fa-solid fa-angle-up"></i></a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <!--wraper table-->

    <div class="paginacao">
        <?php 
            $totalPaginas = ceil(count(Painel::getAll('tb_admin.noticias')) / $porPagina);
            for ($i = 1; $i <= $totalPaginas ; $i++){
                if($i == $paginaAtual)
                    echo '<a class="page-selected" href="' . INCLUDE_PATH_PAINEL . 'listar-noticias?pagina=' . $i . '">' . $i . '</a';
                else
                    echo '<a href="' . INCLUDE_PATH_PAINEL . 'listar-noticias?pagina=' . $i . '">' . $i . '</a>';
            }
        ?>
    </div>
    <!--paginacao-->
</div>
<!--box content-->