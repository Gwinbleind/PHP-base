<div class="carousel div_flex">
    <div class="carousel__arrow div_flex"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    <img src="<?=$product['img_large']?>" alt="">
    <div class="carousel__arrow div_flex"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    <div class="carousel__description">
        <div class="prod__collection">WOMEN COLLECTION</div>
        <div class="prod__name"><?=$product['product_name']?></div>
        <div class="prod__text">
            <?=$product['description']?>
        </div>
        <div class="prod__properties">
            <div class="prop__prop">MATERIAL: <span class="prop__value">COTTON</span></div>
            <div class="prop__prop">DESIGNER: <span class="prop__value">BINBURHAN</span></div>
        </div>
        <div class="prod__price">$561</div>
        <div class="prod__choose">
            <div class="choose__container">
                <span>CHOOSE COLOR</span>
                <select class="choose__box" name="color" id="choose color" form="Add to Cart">
                    <option value="0">White</option>
                    <option value="1">Red</option>
                    <option value="2">Black</option>
                </select>
            </div>
            <div class="choose__container">
                <span>CHOOSE SIZE</span>
                <select class="choose__box" name="size" id="choose size" form="Add to Cart">
                    <option value="1">M</option>
                    <option value="2">S</option>
                    <option value="3">L</option>
                    <option value="4">XL</option>
                    <option value="5">XXL</option>
                </select>
            </div>
            <div class="choose__container">
                <span>QUANTITY</span>
                <input class="choose__box" value="2" type="number" min="1" form="Add to Cart" id="choose quantity">
            </div>
        </div>
        <form id="Add to Cart">
            <button class="prod__add div_flex" type="submit">
                <img class="cart__img_red" src="img/Cart_red.svg">
                <span>Add to Cart</span>
            </button>
        </form>
    </div>
</div>