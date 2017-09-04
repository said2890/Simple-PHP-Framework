<?php

include_once __DIR__.'/ShoppingCartCtrl.php';

$basketCtrl = new ShoppingCartCtrl;
$productsInBasket = $basketCtrl->getProducts()
?>

<div class="row">
    <div class="col-md-12">
        <h2>Список покупок</h2>
    </div>
</div>

<div class="shopping-basket-table">
    <div class="container header visible-md visible-lg visible-xl">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6"></div>
            <div class="col-md-2">Цена</div>
            <div class="col-md-2">Количество</div>
        </div>
    </div>
    <div class="container body">
        <?php foreach($productsInBasket as $item) { ?>
            <div class="row">
                <?php if($basketCtrl->basketIsEmpty()) { ?>
                    <div class="col-md-12 col-sm-12">Корзина пуста</div>
                <?php } else { ?>
                    <form id="<?php echo $productId = $item->getId(); ?>" action="ShoppingCartRouter.php" method="post">
                        <div class="col-md-2 col-sm-2"><img src="images/hair_clipper.jpg" /></div>
                        <div class="col-md-6 col-sm-6">
                            <div class="product-description"><?php echo $item->getDescription(); ?></div>
                            <div class="product-title"><?php echo $item->getName(); ?></div>
                            <div class="product-maker"><?php echo $item->getBrand(); ?></div>
                            <div class="product-category"><?php echo $item->getCategories(); ?></div>
                            <div class="product-remove">
                                <input type="hidden" name="remove" value="<?php echo $productId; ?>" />
                                <a href="#" onclick="document.getElementById('<?php echo $productId; ?>').submit();">Удалить</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 product-price"><?php echo $item->getPrice(); ?></div>
                        <div class="col-md-2 col-sm-2 product-quantity">
                            <input type="number" min="1" value="<?php echo $item->getQuantity($productId); ?>">
                        </div>
                    </form>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>