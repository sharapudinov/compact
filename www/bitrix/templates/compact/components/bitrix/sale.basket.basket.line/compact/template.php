<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * @global string $componentPath
 * @global string $templateName
 * @var CBitrixComponentTemplate $this
 */
$cartStyle = 'bx-basket';
$cartId = "bx_basket".$this->randString();
$arParams['cartId'] = $cartId;

if ($arParams['POSITION_FIXED'] == 'Y')
{
	$cartStyle .= "-fixed {$arParams['POSITION_HORIZONTAL']} {$arParams['POSITION_VERTICAL']}";
	if ($arParams['SHOW_PRODUCTS'] == 'Y')
		$cartStyle .= ' bx-closed';
}
else
{
	$cartStyle .= ' bx-opener';
}
?><script>
var <?=$cartId?> = new BitrixSmallCart;
</script>
<div id="<?=$cartId?>" class="<?=$cartStyle?>"><?
	/** @var \Bitrix\Main\Page\FrameBuffered $frame */
	$frame = $this->createFrame($cartId, false)->begin();
		require(realpath(dirname(__FILE__)).'/ajax_template.php');
	$frame->beginStub();
		$arResult['COMPOSITE_STUB'] = 'Y';
		require(realpath(dirname(__FILE__)).'/top_template.php');
		unset($arResult['COMPOSITE_STUB']);
	$frame->end();
?></div>
<script type="text/javascript">
	<?=$cartId?>.siteId       = '<?=SITE_ID?>';
	<?=$cartId?>.cartId       = '<?=$cartId?>';
	<?=$cartId?>.ajaxPath     = '<?=$componentPath?>/ajax.php';
	<?=$cartId?>.templateName = '<?=$templateName?>';
	<?=$cartId?>.arParams     =  <?=CUtil::PhpToJSObject ($arParams)?>; // TODO \Bitrix\Main\Web\Json::encode
	<?=$cartId?>.closeMessage = '<?=GetMessage('TSB1_COLLAPSE')?>';
	<?=$cartId?>.openMessage  = '<?=GetMessage('TSB1_EXPAND')?>';
	<?=$cartId?>.activate();
</script>
<a href="https://shop.bolid.ru/catalog/cart/" title="Ваша корзина"
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
