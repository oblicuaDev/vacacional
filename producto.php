<?php
$bodyClass = 'portal products';
include 'includes/head.php';
$prodTax = $vacacional->getprodTax($_GET['prodId']);
$coverImage = $urlGlobal . $prodTax->field_banner_prod;
$products = $vacacional->getProductsRel($_GET['prodId']);
$descargables = $vacacional->getDescargables($_GET['prodId']);

?>
<main data-productid="<?=$_GET['prodId'] ?>" id="mainPortal">
    <section class="banner"
        style="background-image:url(<?=$coverImage ?  $coverImage : 'img/noimg.png' ?> );">
        <div class="container">
        <div class="intro-txt">
            <h2 class="uppercase"><?=$prodTax->name?></h2>
            <?=$prodTax->field_intro_prod?>
        </div>
        </div>
    </section>
    <h3>Conoce los atractivos turisticos</h3>
    <section class="portal_list">
        <div class="right">
            <div class="grid-atractivos">
                <?php 
                $colors = ["#ff7c47","#5097ff","#5dc390"]
                ?>
                <?php for ($i=0; $i < count($products); $i++) { $prod = $products[$i]; ?>
                    <a href="/<?=$lang?>/explora/<?=$b->get_alias($prod->title)?>/<?=$prod->nid?>" target="_blank" class="prod-item" style="background-color: <?=$colors[$i % 3]?>">
                        <img src="<?=$urlGlobal?><?=$prod->field_icon?>" alt="">
                        <h4><?=$prod->title?></h4>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>
    <h3>Descargables</h3>
    <div class="descargables">
    <?php for ($i=0; $i < count($descargables); $i++) { $descar = $descargables[$i]; ?>
        <a href="<?=$descar->field_download_file?>" target="_blank" class="descargables-item">
<div class="img"><img loading='lazy' data-src="<?=$descar->field_image ? $urlGlobal . $descar->field_image : 'img/noimg.png'?>" alt='bogota' class='zone_img lazyload' src='https://picsum.photos/20/20'></div><span class="name uppercase"><?=$descar->title?></span></a>
    <?php } ?>
    </div>
    <section class="banco-imagenes-grid">
        <article style="background-image:url(https://res.cloudinary.com/instituto-turismo-bogota/video/upload/w_1200/v1676572635/videos%20banco%20de%20imagenes/35.opt.idt_mitos_y_leyendas_color_final_1_rpp2sh.jpg);"><a href="<?=$prodTax->field_link_youtube?>"><h4><img src="/banco-imagenes/img/film.png" alt="video">Videos</h4></a></article>
        <article style="background-image:url(/drpl/sites/default/files/2022-03/pexels-photo-7613843.jpeg);"><a href="<?=$prodTax->field_link_bi?>"><h4><img src="/vacacional/images/camera.svg" alt="banco">Banco de imágenes</h4></a></article>
        <article style="background-image:url(/drpl/sites/default/files/2022-12/169_Ricardo_ygda6m.jpg);"><a href="<?=isset($prodTax->field_link_pla) ? $prodTax->field_link_pla : '/es/plan-bogota/'?>"><h4><img src="/vacacional/images/logo_pb-icon.svg" alt="banco">Reserva tu plan</h4></a></article>
    </section>
    <? include 'includes/imports.php'?>
   