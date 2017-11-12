<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
//test_dump($arResult);

if (!empty($arResult["CATEGORIES"])):?>
    <? foreach ($arResult["CATEGORIES"] as $category_id => $arCategory):?>


        <? foreach ($arCategory["ITEMS"] as $i => $arItem):?>
            <? if (isset($arResult["ELEMENTS"][$arItem["ITEM_ID"]])):
                $arElement = $arResult["ELEMENTS"][$arItem["ITEM_ID"]];
            endif; ?>
            <div class="header-search__categories">
                <a class="header-search__categories-link" href="<? echo $arCategory["URL"] ?>">
                    <span class="header-search__categories-select"><? echo $arCategory["TITLE"] ?></span>
                </a>
            </div>
        <? endforeach; ?>
    <? endforeach; ?>
<? endif; ?>

