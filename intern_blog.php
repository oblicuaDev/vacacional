<?php 
    $bodyClass = 'intern_blog';
	include "includes/head.php";
	$blog = $b->blogs($_GET['blogID'],$_GET['productID']);
	$blog = $blog[0];
	$prodRel = $b->products(0,$blog->field_prod_rel)->title;
	$blogsRel = $b->blogs("all",($_GET['productID'] ? $_GET['productID'] : 'all'),4,0,1);
	// Abrir archivo de más leidos
	switch ($_GET['lang']) {
		case 'es':
			$fileToOpen = "../masleidos_es.json";
			break;
		case 'en':
			$fileToOpen = "../masleidos_en.json";
			break;
		case 'pt':
			$fileToOpen = "../masleidos_pt.json";
			break;
	}
	$myfile = fopen($fileToOpen , "r") or die("Unable to open file!");
	$content = json_decode(fread($myfile, filesize($fileToOpen)));
	$prodRel = $b->get_alias($prodRel);
	if($prodRel){
		$prodRel = $b->get_alias($prodRel);
	}else {
		$prodRel = 'all';
	}
	$templateArray = array(
		"id" => $_GET['blogID'],
		"title" => $blog->title,
		"url" => "blog/".$prodRel."/".$b->get_alias($blog->title)."-".$_GET['productID']."-".$_GET['blogID'],
		"readings" => 1
	);
	$exist = 0;
	foreach ($content as $singleBlogPosition) {
		if($singleBlogPosition->id === $_GET['blogID']) {
			$exist = 1;
			$singleBlogPosition->readings++; 
		}
	}
	if($exist == 0){
		array_push($content, $templateArray);
	}
	$content2 = json_encode($content);
	$myfile2 = fopen($fileToOpen , "w") or die("Unable to open file!");
	fwrite($myfile2, $content2);
	fclose($myfile2);
?>
<main>
	<div class="banner" style="background-image:url(<?=($blog->field_cover_image ? $urlGlobal . $blog->field_cover_image : '/img/noimg.png')?>)">
	<div class="txt">
	<h3 class="uppercase"><?=$prodRel?> </h3>
		<h1 class="uppercase"><?=$blog->title?></h1>
		<div class="intro"><?=$blog->field_intro_blog?></div>
	</div>
	</div>
	<div class="content">
		<h3 class="uppercase"><?=$blog->field_date?></h3>
		<div class="blog_content">
			<?=$blog->body?>
		</div>
	</div>
	<?php if(count($blogsRel) > 0){ ?>
		<div class="container_interest">
			<h2 class="title">También te puede interesar</h2>
			<ul class="blog_rel">
				<?php 
				for ($countBlogs=0; $countBlogs < count($blogsRel); $countBlogs++) { 
					$singleBlog = $blogsRel[$countBlogs];
					if($singleBlog->nid != $_GET['blogID']){
						$singleProdNameRel = $b->products(0,$singleBlog->field_prod_rel)->title != "" ? $b->products(0,$singleBlog->field_prod_rel)->title : 'all';
						$url = "blog/".$b->get_alias($singleProdNameRel)."/".$b->get_alias($singleBlog->title)."-".$singleBlog->field_prod_rel."-".$singleBlog->nid;
						$image = $singleBlog->field_image != "" ? $urlGlobal.$singleBlog->field_image : "/img/noimg.png";
						echo "
							<li>
							<a
							href='".$url."'
							data-aos='flip-left'
							class='big blog_item'
							data-productid='".$b->products(0, $singleBlog->field_prod_rel)->nid."'
							>
							<div class='img'>
								<img
								loading='lazy'
								data-src='".$image."'
								alt='".$singleBlog->title."'
								class='zone_img lazyload'
								src='https://picsum.photos/20/20'
								/>
							</div>
							<div class='desc'>
								<h3 class='uppercase'>".$b->products(0, $singleBlog->field_prod_rel)->title."</h3>
								<h2 class='uppercase'>".$singleBlog->title."</h2>
								<small>".$singleBlog->field_date."</small>
							</div>
							</a>
							</li>
						";
					}
				}
				?>
			</ul>
		</div>
	<?php } ?>

</main>
<? include 'includes/imports.php'?>