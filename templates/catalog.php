<div class="container">
	<div class="products__box products__box_x3 div_flex">
		<?if (!empty($catalog)):?>
			<?foreach ($catalog as $item):?>
				<div class="product__element">
					<a href="/?page=product&id=<?=$item['id']?>" class="product__content">
						<img src="<?=$item['img_medium']?>" alt="" class="product__img">
						<div class="product__name"><?=$item['product_name']?></div>
						<div class="product__price"><?=number_format($item['price'],2,',','.')?></div>
					</a>
					<a href="#" data-product__id="<?=$item['id']?>" class="product__add">Add to Cart</a>
					<img src="img/stars5.jpg" alt="stars" class="product__stars">
				</div>
			<?endforeach;?>
		<?else:?>
			Пусто
		<?endif;?>
	</div>
</div>
