<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$this->IncludeLangFile('template.php');

$cartId = $arParams['cartId'];

require(realpath(dirname(__FILE__)).'/top_template.php');

if ($arParams["SHOW_PRODUCTS"] == "Y" && $arResult['NUM_PRODUCTS'] > 0)
{
?>
	<div data-role="basket-item-list" class="bx-basket-item-list">

		<?if ($arParams["POSITION_FIXED"] == "Y"):?>
			<div id="<?=$cartId?>status" class="bx-basket-item-list-action" onclick="<?=$cartId?>.toggleOpenCloseCart()"><?=GetMessage("TSB1_COLLAPSE")?></div>
		<?endif?>

		<?if ($arParams["PATH_TO_ORDER"] && $arResult["CATEGORIES"]["READY"]):?>
			<div class="bx-basket-item-list-button-container">
				<a href="<?=$arParams["PATH_TO_ORDER"]?>" class="btn btn-primary"><?=GetMessage("TSB1_2ORDER")?></a>
			</div>
		<?endif?>

		<div id="<?=$cartId?>products" class="bx-basket-item-list-container">
			<?foreach ($arResult["CATEGORIES"] as $category => $items):
				if (empty($items))
					continue;
				?>
				<div class="bx-basket-item-list-item-status"><?=GetMessage("TSB1_$category")?></div>
				<?foreach ($items as $v):?>
					<div class="bx-basket-item-list-item">
						<div class="bx-basket-item-list-item-img">
							<?if ($arParams["SHOW_IMAGE"] == "Y" && $v["PICTURE_SRC"]):?>
								<?if($v["DETAIL_PAGE_URL"]):?>
									<a href="<?=$v["DETAIL_PAGE_URL"]?>"><img src="<?=$v["PICTURE_SRC"]?>" alt="<?=$v["NAME"]?>"></a>
								<?else:?>
									<img src="<?=$v["PICTURE_SRC"]?>" alt="<?=$v["NAME"]?>" />
								<?endif?>
							<?endif?>
							<div class="bx-basket-item-list-item-remove" onclick="<?=$cartId?>.removeItemFromCart(<?=$v['ID']?>)" title="<?=GetMessage("TSB1_DELETE")?>"></div>
						</div>
						<div class="bx-basket-item-list-item-name">
							<?if ($v["DETAIL_PAGE_URL"]):?>
								<a href="<?=$v["DETAIL_PAGE_URL"]?>"><?=$v["NAME"]?></a>
							<?else:?>
								<?=$v["NAME"]?>
							<?endif?>
						</div>
						<?if (true):/*$category != "SUBSCRIBE") TODO */?>
							<div class="bx-basket-item-list-item-price-block">
								<?if ($arParams["SHOW_PRICE"] == "Y"):?>
									<div class="bx-basket-item-list-item-price"><strong><?=$v["PRICE_FMT"]?></strong></div>
									<?if ($v["FULL_PRICE"] != $v["PRICE_FMT"]):?>
										<div class="bx-basket-item-list-item-price-old"><?=$v["FULL_PRICE"]?></div>
									<?endif?>
								<?endif?>
								<?if ($arParams["SHOW_SUMMARY"] == "Y"):?>
									<div class="bx-basket-item-list-item-price-summ">
										<strong><?=$v["QUANTITY"]?></strong> <?=$v["MEASURE_NAME"]?> <?=GetMessage("TSB1_SUM")?>
										<strong><?=$v["SUM"]?></strong>
									</div>
								<?endif?>
							</div>
						<?endif?>
					</div>
				<?endforeach?>
			<?endforeach?>
		</div>
	</div>

	<script>
		BX.ready(function(){
			<?=$cartId?>.fixCart();
		});
	</script>
<?
}
?>
<a href="/personal/cart/" title="Ваша корзина"
   class="header-function__item header-function__item--big">
                <span class="header-function__item-content">
                  <span class="header-function__item-content">
                    <svg class="i-icon header-function__icon" viewBox="0 0 25.5 27.4">

                    <style>.svg-icon-cart {
    fill: currentColor
                        }</style><path id="cart-XMLID_553_" class="svg-icon-cart"
                                       d="M7.2 18h15.2c1.7 0 3.1-1.4 3.1-3.1V7.9h-.6L5.5 5.2V1.9h-.1s-.1 0-.1-.1L1 .1C.7 0 .2.1.1.5s0 .8.4.9L4.3 3v16.8c0 1.6 1.2 2.9 2.8 3-.3.5-.5 1-.5 1.7 0 1.7 1.4 3 3 3 1.7 0 3-1.4 3-3 0-.6-.2-1.2-.5-1.6h7.2c-.3.5-.5 1-.5 1.6 0 1.7 1.4 3 3 3 1.7 0 3-1.4 3-3 0-1.7-1.4-3-3-3H7.2c-.9 0-1.7-.8-1.7-1.7v-2.2c.5.2 1.1.4 1.7.4zm-1.7-6.8V6.6l18.6 2.6V15c0 .9-.8 1.7-1.7 1.7H7.2c-.9 0-1.7-.8-1.7-1.7v-3.8zm16.2 11.6c.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6-.1-.9.7-1.6 1.6-1.6zm-12.2 0c.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6-.9 0-1.6-.7-1.6-1.6-.1-.9.7-1.6 1.6-1.6z"></path></svg>
                    <span class="header-function__item-count">2</span>                  </span>
                  <span class="header-function__item-text">
                    <span class="header-function__item-price">
                      <span class="b-price">2 609</span>
                    </span>                    <span class="header-function__item-num">2 товара</span>
                  </span>
                </span>
</a>
