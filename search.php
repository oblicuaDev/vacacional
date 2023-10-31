<?php
$bodyClass = 'search';
include 'includes/head.php';
if ($b->searchContent($_GET['search'])) {
    $busqueda = $b->searchContent($_GET['search']);
} else {
    $busqueda = $b->searchContent($_GET['menu_search_input']);
}
?>
<main class="backLinkN">
    <div class="container">
        <a href="/" class="back isabacklink"><img src="../img/arrow_back.svg" alt="previus page"></a>
        <h3 class="search_term">Resultados para : <span><?= $_GET['search'] ? $_GET['search'] : $_GET['menu_search_input'] ?></span></h3>
        <div id="search_results">
            <?php for ($i = 0; $i < count($busqueda); $i++) {
                $value =  $b->get_alias($busqueda[$i]->title);
                $ID_blog = $busqueda[$i]->nid;
                $subID = explode(",", $busqueda[$i]->field_subp)[0];
                switch ($busqueda[$i]->type) {
                    case 'Atractivos':
                        $type = 'Atractivo';
                        $link = $lang . "/atractivo/all/".$value."-all-".$ID_blog;
                        break;
                    case 'Alrededor':
                        $type = 'Más allá de Bogota';
                        $link = "alrededor/" . $value . "/" . $ID_blog;
                        break;
                    case 'Artículo':
                        $type = 'Blog';
                        $link = $lang . "/blog/all/".$b->get_alias($value)."-".$ID_blog;
                        break;
                    case 'Eventos':
                        $type = 'Evento';
                        $link = $lang . "/evento/".$b->get_alias($value)."-".$ID_blog;
                    break;
                }
            ?>

                <a href="<?= $link ?>" data-category="<?= $type ?>" class="result wait">
                    <?php
                    $field_image = $busqueda[$i]->field_image;
                    $field_cover = $busqueda[$i]->field_cover_image;
                    if ($field_image) {
                    ?>
                        <div class="img">
                            <img loading="lazy" class="lazyload" data-src="<?= $field_image ?>" src="https://picsum.photos/20/20" alt="Bogotá">
                        </div>
                    <?php
                    } else if ($field_cover) {
                    ?>
                        <div class="img">
                            <img loading="lazy" class="lazyload" data-src="<?= $field_cover ?>" src="https://picsum.photos/20/20" alt="Bogotá">
                        </div>
                    <?php } else { ?>
                        <div class="img">
                            <img loading="lazy" class="lazyload" data-src="../img/noimg.png" src="https://picsum.photos/20/20" alt="Bogotá">
                        </div>
                    <? } ?>
                    <div class="name">
                        <h3 class="uppercase"><?= $busqueda[$i]->title ?></h3>
                        <h4 class="uppercase"><?= $type ?></h4>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</main>

<?php include 'includes/imports.php'; ?>