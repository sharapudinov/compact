<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult["CATEGORIES"])):?>
		<?foreach($arResult["CATEGORIES"] as $category_id => $arCategory):?>

			<?foreach($arCategory["ITEMS"] as $i => $arItem):?>
                <?if(isset($arResult["ELEMENTS"][$arItem["ITEM_ID"]])):
					$arElement = $arResult["ELEMENTS"][$arItem["ITEM_ID"]];
                ?>
            <div class="header-search__product product-small">

            <div class="product-small__wrap">
                    <a class="product-small__image-wrap"
                       href="<?echo $arItem["URL"]?>"><img
                                class="product-small__image" src="<?echo $arElement["PICTURE"]["src"]?>"
                                alt=""></a>
                    <div class="product-small__content">
                        <a href="<?echo $arItem["URL"]?>"
                           class="product-small__title"><?echo $arItem["NAME"]?></a>
                        <div class="product-small__article">Артикул: <span> 12321</span></div>
                        <div class="product-small__developer">
                            Производитель: <a class="product-small__developer-link" href="/search/?q=Источник плюс">Источник
                                плюс</a>
                        </div>
                    </div>
                </div>
            </div>
                <?endif;?>

        <?endforeach;?>

    <?endforeach;?>
<?endif;?>


