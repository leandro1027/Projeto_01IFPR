<!--banner-principal-->
<section class="banner-principal">
    <div style="background-image:url('<?php echo INCLUDE_PATH; ?>assets/img/bg_slide1.jpg')" class="banner-single"></div> <!--banner single-->
    <div style="background-image:url('<?php echo INCLUDE_PATH; ?>assets/img/bg_slide2.png')" class="banner-single"></div> <!--banner single-->
    <div style="background-image:url('<?php echo INCLUDE_PATH; ?>assets/img/bg_slide3.jpg')" class="banner-single"></div> <!--banner single-->

    <div class="overlay"></div>
    <!--Overlay-->
    <div class="center">
        <form action="">
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" id="email" required>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
<!--bullets-->
<div class="bullets">
</div>
<!--bullets-->

</section>
<!--banner-principal-->

<!--descricao-autor-->
<section class="descricao-autor">
    <div class="center">
        <div class="w50 left">
            <h2>Leandro</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Provident nostrum tenetur earum adipisci minus velit saepe
                maxime soluta ad? Consequuntur, pariatur? Earum temporibus ex
                iure dolorum consectetur quasi tenetur velit.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Provident nostrum tenetur earum adipisci minus velit saepe
                maxime soluta ad? Consequuntur, pariatur? Earum temporibus ex
                iure dolorum consectetur quasi tenetur velit.</p>
        </div>
        <div class="w50 left">
            <img src="<?php echo INCLUDE_PATH; ?>assets/img/local-trabalho.jpg" alt="Local de trabalho">
        </div>
        <div class="clear"></div>
        <!--clear float-->
    </div>
    <!--center-->
</section>
<!--descricao-autor-->

<!--especialidades-->
<section class="especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidades">
            <h3><i class="fa-brands fa-html5"></i></h3>
            <h3>HTML 5</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Provident nostrum tenetur earum adipisci minus velit saepe
                maxime soluta ad? Consequuntur, pariatur? Earum temporibus ex
                iure dolorum consectetur quasi tenetur velit.</p>
        </div>
        <div class="w33 left box-especialidades">
            <h3><i class="fa-brands fa-css3"></i></h3>
            <h3>CSS 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Provident nostrum tenetur earum adipisci minus velit saepe
                maxime soluta ad? Consequuntur, pariatur? Earum temporibus ex
                iure dolorum consectetur quasi tenetur velit.</p>
        </div>
        <div class="w33 left box-especialidades">
            <h3><i class="fa-brands fa-js"></i></h3>
            <h3>JS</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Provident nostrum tenetur earum adipisci minus velit saepe
                maxime soluta ad? Consequuntur, pariatur? Earum temporibus ex
                iure dolorum consectetur quasi tenetur velit.</p>
        </div>
        <div class="clear"></div>
        <!--clear float-->
    </div>
    <!--center-->
</section>
<!--especialidades-->

<!--extras-->
<section class="extras">
    <div class="center">
        <div id="depoimentos" class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos</h2>
                <?php 
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.depoimentos`
                                                        ORDER BY order_id DESC LIMIT 3");
                    $sql->execute();
                    $depoimentos= $sql->fetchAll();
                    foreach($depoimentos as $key => $value){
                    ?>
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">
                            <?php echo $value['depoimento'];?>
                </p>
                <p class="nome-autor"><?php	echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                    </div>
                <?php } ?>
        <!--center-->
        <div id="servicos" class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
                <ul>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsum eveniet, ratione magnam repellendus nobis vitae
                        laborum fugiat deleniti omnis harum eius hic inventore
                        asperiores, explicabo nisi unde optio eos magni.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsum eveniet, ratione magnam repellendus nobis vitae
                        laborum fugiat deleniti omnis harum eius hic inventore
                        asperiores, explicabo nisi unde optio eos magni.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsum eveniet, ratione magnam repellendus nobis vitae
                        laborum fugiat deleniti omnis harum eius hic inventore
                        asperiores, explicabo nisi unde optio eos magni.
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!--clear float-->
    </div>
    <!--center-->
</section>
<!--extras-->