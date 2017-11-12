<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
$curPage = $APPLICATION->GetCurPage(true);
?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>" class="desktop landscape">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico"/>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header>
    <div class="header">
        <div class="header__top">
            <div class="container">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "top_mobile", array(
                    "ROOT_MENU_TYPE" => "left",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_THEME" => "site",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "3",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                    false
                ); ?>

            </div>
        </div>
        <div class="header__main">
            <div class="container container--no-padding">
                <div class="header-main">
                    <div class="header-main__left">
                        <a class="header-main__left-logo" title="Торговый дом Болид">
                            <svg class="i-icon" viewBox="0 0 426.2 157.5">

                                <style>.svg-icon-logo {
                                        fill: currentColor
                                    }</style>
                                <g id="logo-XMLID_1_">
                                    <path id="logo-XMLID_2_" class="svg-icon-logo"
                                          d="M154.5 128.3h6.9v28.5h-6.9z"></path>
                                    <path id="logo-XMLID_31_" class="svg-icon-logo"
                                          d="M143.4 139.4h-3.1v-11.1h-6.9v28.5h10c4 0 8.3-1.4 8.3-8.7 0-7-4.2-8.7-8.3-8.7zm-2 12.3h-1.1v-7.1h1.2c1.7 0 3.3.8 3.3 3.7 0 2.7-1.4 3.4-3.4 3.4z"></path>
                                    <path id="logo-XMLID_34_" class="svg-icon-logo"
                                          d="M185.6 139.4h-3.1v-6h8.7v-5.1h-15.5v28.5h10c4 0 8.3-1.4 8.3-8.7-.1-7-4.3-8.7-8.4-8.7zm-1.9 12.3h-1.1v-7.1h1.2c1.7 0 3.3.8 3.3 3.7-.1 2.7-1.5 3.4-3.4 3.4z"></path>
                                    <path id="logo-XMLID_35_" class="svg-icon-logo"
                                          d="M117.2 139.9c-.5 2.3-.8 6.3-1.1 9-.3-2.7-.6-6.7-1.1-9l-2.2-11.6h-9.6v28.5h6.6v-8.6c0-3.9-.2-7.9-.4-13.8l4.3 22.4h4.8l4.3-22.4c-.1 5.8-.4 10-.4 13.8v8.6h6.6v-28.5h-9.6l-2.2 11.6z"></path>
                                    <path id="logo-XMLID_36_" class="svg-icon-logo"
                                          d="M9.7 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7h-6.9v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.2-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2H19v-2.6c0-4.4-2.9-8-9.3-8z"></path>
                                    <path id="logo-XMLID_37_" class="svg-icon-logo"
                                          d="M53 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7h-6.9v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.2-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2h6.9v-2.6c0-4.4-2.9-8-9.3-8z"></path>
                                    <path id="logo-XMLID_38_" class="svg-icon-logo"
                                          d="M28.2 146.2c.2-3.2 1-7.7 1-10.8v-7.1h-6.6v28.5h6.7l5.9-17.3c-.3 3-1.2 7.7-1.2 10.7v6.6h6.6v-28.5H34l-5.8 17.9z"></path>
                                    <path id="logo-XMLID_39_" class="svg-icon-logo"
                                          d="M64.6 134H70v22.8h6.3V134h5.1v-5.7H64.6z"></path>
                                    <path id="logo-XMLID_40_" class="svg-icon-logo"
                                          d="M84.1 156.8H100v-5.4h-9.1v-6.8h8.4v-5.4h-8.4v-5.5h9.1v-5.4H84.1z"></path>
                                    <path id="logo-XMLID_43_" class="svg-icon-logo"
                                          d="M355.2 127.7c-6.5 0-9.3 3.5-9.3 8v12.8c0 5.7 2.9 8.9 9.2 8.9 6.4 0 9.3-3.2 9.3-8.9v-12.8c0-4.4-2.7-8-9.2-8zm2.4 22c0 1.7-1.2 2.5-2.4 2.5s-2.4-.8-2.4-2.5v-14.4c0-1.6 1.2-2.4 2.4-2.4s2.4.8 2.4 2.4v14.4z"></path>
                                    <path id="logo-XMLID_44_" class="svg-icon-logo"
                                          d="M311.1 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7h-6.9v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.1-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2h6.9v-2.6c0-4.4-2.9-8-9.3-8z"></path>
                                    <path id="logo-XMLID_45_" class="svg-icon-logo"
                                          d="M335.4 139.1h-4.5v-10.8H324v28.5h6.9v-12h4.5v12h6.8v-28.5h-6.8z"></path>
                                    <path id="logo-XMLID_46_" class="svg-icon-logo"
                                          d="M376.6 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7H379v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.2-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2h6.9v-2.6c0-4.4-2.8-8-9.3-8z"></path>
                                    <path id="logo-XMLID_47_" class="svg-icon-logo"
                                          d="M388.2 134h5.4v22.8h6.3V134h5.1v-5.7h-16.8z"></path>
                                    <path id="logo-XMLID_48_" class="svg-icon-logo"
                                          d="M419 128.3l-5.8 17.9c.2-3.2 1-7.7 1-10.8v-7.1h-6.6v28.5h6.7l5.9-17.3c-.3 3-1.2 7.7-1.2 10.7v6.6h6.6v-28.5H419z"></path>
                                    <path id="logo-XMLID_49_" class="svg-icon-logo"
                                          d="M197.4 156.8h16v-5.4h-9.1v-6.8h8.4v-5.4h-8.4v-5.5h9.1v-5.4h-16z"></path>
                                    <path id="logo-XMLID_52_" class="svg-icon-logo"
                                          d="M246.1 127.7c-6.5 0-9.3 3.5-9.3 8v12.8c0 5.7 2.9 8.9 9.2 8.9 6.4 0 9.3-3.2 9.3-8.9v-12.8c0-4.4-2.7-8-9.2-8zm2.3 22c0 1.7-1.2 2.5-2.4 2.5s-2.4-.8-2.4-2.5v-14.4c0-1.6 1.2-2.4 2.4-2.4s2.4.8 2.4 2.4v14.4z"></path>
                                    <path id="logo-XMLID_53_" class="svg-icon-logo"
                                          d="M228.8 141.8c2.8-1.3 4-3.1 4-6.6 0-4-3.1-7.5-8.6-7.5-4.9 0-8.6 3.3-8.6 9.2h6.3c0-2.9.6-4.2 2.3-4.2 1.6 0 2.3 1.3 2.3 3.5 0 2-1.1 3.2-2.1 3.2h-1.6v5.1h1c2.2 0 3 1.1 3 3.7 0 3.2-.7 4.2-2.5 4.2-1.5 0-2.4-1-2.4-4.2h-6.3c0 7.3 4.8 9.2 9 9.2 5.4 0 9.1-2.6 9.1-8.3.1-5-2-6.2-4.9-7.3z"></path>
                                    <path id="logo-XMLID_54_" class="svg-icon-logo"
                                          d="M259 156.8h6.8V134h4.6v22.8h6.8v-28.5H259z"></path>
                                    <path id="logo-XMLID_57_" class="svg-icon-logo"
                                          d="M285.8 128.3l-6.2 28.5h6.8l.9-5.7h5.2l1 5.7h6.7l-6.3-28.5h-8.1zM288 146l1.8-12.5 1.8 12.5H288z"></path>
                                </g>
                                <g id="logo-XMLID_3_">
                                    <path id="logo-XMLID_5_" class="svg-icon-logo"
                                          d="M156.2 45.4c-22.1 0-22.1 0-22.1 16 0 15.9 0 15.9 22 15.9 22.1 0 22.1 0 22.1-15.9 0-16 0-16-22-16z"></path>
                                    <path id="logo-XMLID_16_" class="svg-icon-logo"
                                          d="M78.4 45.2H44.3v8.4h34.1c2.9 0 4.8-1.1 4.8-4.2 0-3.2-2-4.2-4.8-4.2z"></path>
                                    <path id="logo-XMLID_17_" class="svg-icon-logo"
                                          d="M77.6 67.5H44.3v9.9h33.3c3.3 0 5.6-1.7 5.6-4.7 0-4.3-2.3-5.2-5.6-5.2z"></path>
                                    <path id="logo-XMLID_18_" class="svg-icon-logo"
                                          d="M362.7 46.2h-31.4v30.1h31.4c8.3 0 10.6-3.6 10.6-15s-2.3-15.1-10.6-15.1z"></path>
                                    <path id="logo-XMLID_21_" class="svg-icon-logo"
                                          d="M293.2 13.6V.2H274v13.4H0v95.7h426.2V13.6h-133zm-210 78.9H25.1V30.1h55.8c9.3 0 19.2 1.1 19.2 17.6 0 6.9-3 11.2-6.4 12.8 5.8 2.5 8.6 7.2 8.6 14.8.1 12.7-5.5 17.2-19.1 17.2zm72.9.9c-40.4-.1-41.2-2.1-41.2-32.1 0-29.9.8-32.1 41.2-32.1 40.3 0 41.3 2.3 41.3 32.1-.1 30-1 32.1-41.3 32.1zm117.9-.9h-62.8V30.1h19.2v46.3H274v16.1zm19.2-16.1H274V13.7h19.2v62.7zm72.7 16.1h-53.8V30.1h53.8c22.4 0 26.6 7.2 26.6 31.3s-4.2 31.1-26.6 31.1z"></path>
                                </g>
                            </svg>
                        </a>
                        <div class="header-main__left-catalog header-catalog-btn">
                            <div class="header-catalog-btn__icon">
                                <div class="header-catalog-btn__icon-line"></div>
                                <div class="header-catalog-btn__icon-line"></div>
                                <div class="header-catalog-btn__icon-line"></div>
                                <div class="header-catalog-btn__icon-line"></div>
                            </div>
                            <div class="header-catalog-btn__text">КАТАЛОГ</div>
                            <div class="header-catalog-btn__arrow"></div>
                        </div>
                    </div>
                    <div class="header-main__center-wrap">
                        <div class="header-main__center">
                            <div class="header-main__center-items">
                                <div class="header-main__mobile-menu">
                                    <div class="header-main__mobile-menu-line"></div>
                                    <div class="header-main__mobile-menu-line"></div>
                                    <div class="header-main__mobile-menu-line"></div>
                                </div>
                                    <? $APPLICATION->IncludeComponent(
	"bitrix:search.title",
	"catalog",
	array(
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "15",
		"CHECK_DATES" => "N",
		"SHOW_OTHERS" => "N",
		"PAGE" => SITE_DIR."catalog/",
		"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
		"CATEGORY_0" => array(
			0 => "iblock_catalog",
		),
		"CATEGORY_0_iblock_catalog" => array(
			0 => "all",
		),
		"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "search",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SHOW_PREVIEW" => "Y",
		"PREVIEW_WIDTH" => "75",
		"PREVIEW_HEIGHT" => "75",
		"CONVERT_CURRENCY" => "Y",
		"COMPONENT_TEMPLATE" => "compact",
		"ORDER" => "rank",
		"USE_LANGUAGE_GUESS" => "Y",
		"PRICE_VAT_INCLUDE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "300",
		"CURRENCY_ID" => "RUB"
	),
	false
); ?>

                                <a class="header-main__center-logo" title="Интернет-магазин Compact">
                                    <svg class="i-icon" viewBox="0 0 426.2 157.5">

                                        <style>.svg-icon-logo {
                                                fill: currentColor
                                            }</style>
                                        <g id="logo-XMLID_1_">
                                            <path id="logo-XMLID_2_" class="svg-icon-logo"
                                                  d="M154.5 128.3h6.9v28.5h-6.9z"></path>
                                            <path id="logo-XMLID_31_" class="svg-icon-logo"
                                                  d="M143.4 139.4h-3.1v-11.1h-6.9v28.5h10c4 0 8.3-1.4 8.3-8.7 0-7-4.2-8.7-8.3-8.7zm-2 12.3h-1.1v-7.1h1.2c1.7 0 3.3.8 3.3 3.7 0 2.7-1.4 3.4-3.4 3.4z"></path>
                                            <path id="logo-XMLID_34_" class="svg-icon-logo"
                                                  d="M185.6 139.4h-3.1v-6h8.7v-5.1h-15.5v28.5h10c4 0 8.3-1.4 8.3-8.7-.1-7-4.3-8.7-8.4-8.7zm-1.9 12.3h-1.1v-7.1h1.2c1.7 0 3.3.8 3.3 3.7-.1 2.7-1.5 3.4-3.4 3.4z"></path>
                                            <path id="logo-XMLID_35_" class="svg-icon-logo"
                                                  d="M117.2 139.9c-.5 2.3-.8 6.3-1.1 9-.3-2.7-.6-6.7-1.1-9l-2.2-11.6h-9.6v28.5h6.6v-8.6c0-3.9-.2-7.9-.4-13.8l4.3 22.4h4.8l4.3-22.4c-.1 5.8-.4 10-.4 13.8v8.6h6.6v-28.5h-9.6l-2.2 11.6z"></path>
                                            <path id="logo-XMLID_36_" class="svg-icon-logo"
                                                  d="M9.7 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7h-6.9v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.2-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2H19v-2.6c0-4.4-2.9-8-9.3-8z"></path>
                                            <path id="logo-XMLID_37_" class="svg-icon-logo"
                                                  d="M53 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7h-6.9v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.2-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2h6.9v-2.6c0-4.4-2.9-8-9.3-8z"></path>
                                            <path id="logo-XMLID_38_" class="svg-icon-logo"
                                                  d="M28.2 146.2c.2-3.2 1-7.7 1-10.8v-7.1h-6.6v28.5h6.7l5.9-17.3c-.3 3-1.2 7.7-1.2 10.7v6.6h6.6v-28.5H34l-5.8 17.9z"></path>
                                            <path id="logo-XMLID_39_" class="svg-icon-logo"
                                                  d="M64.6 134H70v22.8h6.3V134h5.1v-5.7H64.6z"></path>
                                            <path id="logo-XMLID_40_" class="svg-icon-logo"
                                                  d="M84.1 156.8H100v-5.4h-9.1v-6.8h8.4v-5.4h-8.4v-5.5h9.1v-5.4H84.1z"></path>
                                            <path id="logo-XMLID_43_" class="svg-icon-logo"
                                                  d="M355.2 127.7c-6.5 0-9.3 3.5-9.3 8v12.8c0 5.7 2.9 8.9 9.2 8.9 6.4 0 9.3-3.2 9.3-8.9v-12.8c0-4.4-2.7-8-9.2-8zm2.4 22c0 1.7-1.2 2.5-2.4 2.5s-2.4-.8-2.4-2.5v-14.4c0-1.6 1.2-2.4 2.4-2.4s2.4.8 2.4 2.4v14.4z"></path>
                                            <path id="logo-XMLID_44_" class="svg-icon-logo"
                                                  d="M311.1 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7h-6.9v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.1-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2h6.9v-2.6c0-4.4-2.9-8-9.3-8z"></path>
                                            <path id="logo-XMLID_45_" class="svg-icon-logo"
                                                  d="M335.4 139.1h-4.5v-10.8H324v28.5h6.9v-12h4.5v12h6.8v-28.5h-6.8z"></path>
                                            <path id="logo-XMLID_46_" class="svg-icon-logo"
                                                  d="M376.6 127.7c-6.5 0-9.3 3.6-9.3 8.1v12.4c0 6.6 3 9.3 9.3 9.3 6.4 0 9.3-2.8 9.3-9.3v-2.7H379v3.8c0 2.1-1 3-2.5 3-1.4 0-2.3-.8-2.3-3V135c0-1.5 1.2-2.1 2.3-2.1 1.1 0 2.5.7 2.5 2.2v3.2h6.9v-2.6c0-4.4-2.8-8-9.3-8z"></path>
                                            <path id="logo-XMLID_47_" class="svg-icon-logo"
                                                  d="M388.2 134h5.4v22.8h6.3V134h5.1v-5.7h-16.8z"></path>
                                            <path id="logo-XMLID_48_" class="svg-icon-logo"
                                                  d="M419 128.3l-5.8 17.9c.2-3.2 1-7.7 1-10.8v-7.1h-6.6v28.5h6.7l5.9-17.3c-.3 3-1.2 7.7-1.2 10.7v6.6h6.6v-28.5H419z"></path>
                                            <path id="logo-XMLID_49_" class="svg-icon-logo"
                                                  d="M197.4 156.8h16v-5.4h-9.1v-6.8h8.4v-5.4h-8.4v-5.5h9.1v-5.4h-16z"></path>
                                            <path id="logo-XMLID_52_" class="svg-icon-logo"
                                                  d="M246.1 127.7c-6.5 0-9.3 3.5-9.3 8v12.8c0 5.7 2.9 8.9 9.2 8.9 6.4 0 9.3-3.2 9.3-8.9v-12.8c0-4.4-2.7-8-9.2-8zm2.3 22c0 1.7-1.2 2.5-2.4 2.5s-2.4-.8-2.4-2.5v-14.4c0-1.6 1.2-2.4 2.4-2.4s2.4.8 2.4 2.4v14.4z"></path>
                                            <path id="logo-XMLID_53_" class="svg-icon-logo"
                                                  d="M228.8 141.8c2.8-1.3 4-3.1 4-6.6 0-4-3.1-7.5-8.6-7.5-4.9 0-8.6 3.3-8.6 9.2h6.3c0-2.9.6-4.2 2.3-4.2 1.6 0 2.3 1.3 2.3 3.5 0 2-1.1 3.2-2.1 3.2h-1.6v5.1h1c2.2 0 3 1.1 3 3.7 0 3.2-.7 4.2-2.5 4.2-1.5 0-2.4-1-2.4-4.2h-6.3c0 7.3 4.8 9.2 9 9.2 5.4 0 9.1-2.6 9.1-8.3.1-5-2-6.2-4.9-7.3z"></path>
                                            <path id="logo-XMLID_54_" class="svg-icon-logo"
                                                  d="M259 156.8h6.8V134h4.6v22.8h6.8v-28.5H259z"></path>
                                            <path id="logo-XMLID_57_" class="svg-icon-logo"
                                                  d="M285.8 128.3l-6.2 28.5h6.8l.9-5.7h5.2l1 5.7h6.7l-6.3-28.5h-8.1zM288 146l1.8-12.5 1.8 12.5H288z"></path>
                                        </g>
                                        <g id="logo-XMLID_3_">
                                            <path id="logo-XMLID_5_" class="svg-icon-logo"
                                                  d="M156.2 45.4c-22.1 0-22.1 0-22.1 16 0 15.9 0 15.9 22 15.9 22.1 0 22.1 0 22.1-15.9 0-16 0-16-22-16z"></path>
                                            <path id="logo-XMLID_16_" class="svg-icon-logo"
                                                  d="M78.4 45.2H44.3v8.4h34.1c2.9 0 4.8-1.1 4.8-4.2 0-3.2-2-4.2-4.8-4.2z"></path>
                                            <path id="logo-XMLID_17_" class="svg-icon-logo"
                                                  d="M77.6 67.5H44.3v9.9h33.3c3.3 0 5.6-1.7 5.6-4.7 0-4.3-2.3-5.2-5.6-5.2z"></path>
                                            <path id="logo-XMLID_18_" class="svg-icon-logo"
                                                  d="M362.7 46.2h-31.4v30.1h31.4c8.3 0 10.6-3.6 10.6-15s-2.3-15.1-10.6-15.1z"></path>
                                            <path id="logo-XMLID_21_" class="svg-icon-logo"
                                                  d="M293.2 13.6V.2H274v13.4H0v95.7h426.2V13.6h-133zm-210 78.9H25.1V30.1h55.8c9.3 0 19.2 1.1 19.2 17.6 0 6.9-3 11.2-6.4 12.8 5.8 2.5 8.6 7.2 8.6 14.8.1 12.7-5.5 17.2-19.1 17.2zm72.9.9c-40.4-.1-41.2-2.1-41.2-32.1 0-29.9.8-32.1 41.2-32.1 40.3 0 41.3 2.3 41.3 32.1-.1 30-1 32.1-41.3 32.1zm117.9-.9h-62.8V30.1h19.2v46.3H274v16.1zm19.2-16.1H274V13.7h19.2v62.7zm72.7 16.1h-53.8V30.1h53.8c22.4 0 26.6 7.2 26.6 31.3s-4.2 31.1-26.6 31.1z"></path>
                                        </g>
                                    </svg>
                                </a>
                                <div class="header-main__center-items-wrap mobile-menu">
                                    <div class="mobile-menu__head">
                                        Меню
                                        <div class="mobile-menu__head-close"></div>
                                    </div>
                                    <div class="header-main__center-item header-main__center-phone">
                                        <a href="tel:74957757155" class="header-main__center-link"
                                           title="Интернет-магазин Compact">+7 (499) 938-40-39</a>
                                    </div>
                                    <div class="header-main__center-item header-main__center-feedback">
                                        <a href="#modal-textback" class="header-main__center-link modal-popup"
                                           title="Напишите нам">
                                            <svg class="i-icon header-main__center-feedback-icon header-main__center-item-icon"
                                                 viewBox="0 0 22.3 14.7">

                                                <style>.svg-icon-envelope {
                                                        fill: currentColor
                                                    }</style>
                                                <path class="svg-icon-envelope" id="envelope-XMLID_686_"
                                                      d="M22.3.4V.3l-.1-.1s-.1-.1-.2-.1H.5C.4 0 .4 0 .3 0S.2.1.1.1L0 .2v14.2l.1.1h21.7l.1-.1V14L22.3.4c0 .1 0 .1 0 0zm-1 12.8l-6.6-5 6.6-6.5v11.5zM1 1.7l6.6 6.5-6.6 5V1.7zm10.2 8.6L1.7 1h18.9l-9.4 9.3zM8.4 8.9l2.5 2.4c.1.1.2.1.4.1s.3 0 .4-.1L14 8.9l6.4 4.8H2l6.4-4.8z"></path>
                                            </svg>
                                            <span class="header-main__center-link-text">Напишите нам</span>
                                        </a>
                                    </div>
                                    <div class="header-main__center-item header-main__center-auth">
                                        <div class="header-main__center-item">
                                            <svg class="i-icon header-main__center-auth-icon header-main__center-item-icon"
                                                 viewBox="0 0 20.7 20.7">

                                                <style>.svg-icon-user {
                                                        fill: currentColor
                                                    }</style>
                                                <path class="svg-icon-user" id="user-XMLID_647_"
                                                      d="M15.8 15.1c-.4-.5-1-.9-1.8-1.2-.2-.1-.3-.1-.5-.2-.5-.2-1-.3-1.2-.7-.1-.2-.1-.4-.1-.6v-.8s0-.1.1-.1c.1-.1.2-.3.3-.5.2-.3.3-.6.3-.9.3-.1.5-.5.6-.8.1-.3.1-.8-.1-1 .3-1.1.6-2.6-.1-3.7-.3-.4-.8-.7-1.3-.7l-.1-.1v-.1c-.1-.1-.2-.2-.4-.3-.6-.2-1.4-.1-1.9 0s-1 .3-1.4.7c-.7.6-1 1.6-1 3 0 .4.1.8.1 1.2-.3.3-.2.7-.2.9.1.3.2.8.6.9.1.4.3.7.4.9.1.1.1.2.2.4l.1.1v1.3c0 .6-.8.8-1.4 1-.1 0-.3.1-.4.1-.8.3-1.5.7-1.9 1.2-.1.1-.1.4 0 .5.1.1.3.1.5 0 .4-.5 1.1-.9 2-1.2.6-.2 1.6-.5 1.8-1.5.1-.4.1-.7 0-1.1v-.3c0-.2-.1-.4-.2-.5l-.1-.1c-.2-.3-.4-.7-.5-1.2 0-.1-.2-.2-.3-.2 0 0-.1-.1-.2-.3 0-.1-.1-.3 0-.4.2-.1.3-.3.2-.4-.2-1-.3-2.3.2-3.3.4-.7 1.3-1.1 2.6-1.1.2 0 .4 0 .5.1l.1.1s0 .1.1.1c.2.2.3.3.6.3.2 0 .4.1.6.2.4.3.4 1 .4 1.4 0 .6-.1 1.3-.3 2.1 0 .2 0 .3.2.4 0 .1 0 .2-.1.4 0 .1-.1.2-.2.3h-.2c-.1 0-.2.1-.2.2-.1.4-.2.8-.4 1.2 0 .1-.1.1-.1.2-.1.1-.2.3-.2.5v.4c0 .4 0 1 .2 1.4.3.6 1 .9 1.6 1.1.9.3 1.6.7 2.1 1.2.1.1.2.1.2.1h.1c.1 0 .2-.1.3-.2-.1-.2-.1-.3-.2-.4zm-7.2-3.6z"></path>
                                                <path class="svg-icon-user" id="user-XMLID_633_"
                                                      d="M10.4 20.7C4.7 20.7 0 16.1 0 10.4S4.7 0 10.4 0s10.4 4.6 10.4 10.4-4.7 10.3-10.4 10.3zm0-19.9C5.1.8.8 5.1.8 10.4S5.1 20 10.4 20s9.6-4.3 9.6-9.6C19.9 5.1 15.7.8 10.4.8z"></path>
                                            </svg>
                                            <a href="#modal-login" class="header-main__center-link modal-popup"
                                               title="Вход">Вход</a>
                                            <span class="header-main__center-item-slash">/</span>
                                            <a href="https://shop.bolid.ru/registration/"
                                               class="header-main__center-link header-main__center-link--solid"
                                               title="Регистрация"> Регистрация</a>
                                        </div>
                                    </div>

                                    <div class="col-md-12 hidden-xs">
                                        <? $APPLICATION->IncludeComponent("bitrix:menu", "top_mobile", array(
                                            "ROOT_MENU_TYPE" => "left",
                                            "MENU_CACHE_TYPE" => "A",
                                            "MENU_CACHE_TIME" => "36000000",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "MENU_THEME" => "site",
                                            "CACHE_SELECTED_ITEMS" => "N",
                                            "MENU_CACHE_GET_VARS" => array(),
                                            "MAX_LEVEL" => "3",
                                            "CHILD_MENU_TYPE" => "left",
                                            "USE_EXT" => "Y",
                                            "DELAY" => "N",
                                            "ALLOW_MULTI_SELECT" => "N",
                                        ),
                                            false
                                        ); ?>

                                </div>
                            </div>
                        </div>
                        <div class="header-main__right header-function">
                            <a href="https://shop.bolid.ru/compare/" class="header-function__item"
                               title="Сравнение выбранных товаров">
                <span class="header-function__item-content">
                  <svg class="i-icon header-function__icon" viewBox="0 0 20.8 22.9">

                  <style>.svg-icon-comparison {
                          fill: currentColor
                      }</style><g id="comparison-XMLID_554_"><path class="svg-icon-comparison"
                                                                   id="comparison-XMLID_633_"
                                                                   d="M11 5.2L7.6 1.7c-.3-.2-.6-.2-.9 0-.2.3-.2.6 0 .9L9.2 5h-8V.6C1.2.3.9 0 .6 0S0 .3 0 .6v21.7c0 .3.3.6.6.6s.6-.3.6-.6V6.2h8L6.7 8.7c-.2.2-.2.6 0 .9.1 0 .3.1.4.1s.3-.1.4-.2L11 6c.3-.2.3-.6 0-.8z"></path><path
                                  class="svg-icon-comparison" id="comparison-XMLID_635_"
                                  d="M20.2 0c-.3 0-.6.3-.6.6v16.1h-8l2.4-2.4c.2-.2.2-.6 0-.9-.2-.2-.6-.2-.9 0l-3.5 3.5c-.2.2-.2.6 0 .9l3.5 3.5c.1.1.3.2.4.2s.3-.1.4-.2c.2-.2.2-.6 0-.9L11.5 18h7.9v4.4c0 .3.3.6.6.6s.6-.3.6-.6V.6c.2-.3-.1-.6-.4-.6z"></path></g></svg>
                                  </span>
                            </a>
                            <a href="https://shop.bolid.ru/favorites/" class="header-function__item"
                               title="Избранные товары">

                <span class="header-function__item-content">
                  <svg class="i-icon header-function__icon" viewBox="0 0 25.5 22.9">

                  <style>.svg-icon-liked {
                          fill: currentColor
                      }</style><g id="liked-XMLID_554_"><path id="liked-XMLID_573_" class="svg-icon-liked"
                                                              d="M18.2 0c-2.1 0-4.1.9-5.5 2.5C11.4.9 9.4 0 7.2 0 3.2 0 0 3.2 0 7.2c0 1.9.7 3.7 2 5.1l9.1 9.9c.4.5 1 .7 1.6.7.6 0 1.2-.3 1.6-.7l9.1-9.9c1.3-1.4 2.1-3.2 2.1-5.1 0-4-3.3-7.2-7.3-7.2zm4.2 11.4l-9.1 9.9c-.2.2-.4.3-.6.3s-.4-.1-.6-.3L3 11.4c-1-1.1-1.6-2.6-1.6-4.2C1.4 4 4 1.4 7.2 1.4c2 0 3.8 1 4.9 2.6v.1c.1.2.3.3.6.3.2 0 .4-.1.6-.3 1.1-1.7 2.9-2.7 4.9-2.7 3.2 0 5.9 2.6 5.9 5.9 0 1.5-.6 3-1.7 4.1z"></path></g></svg>
                                  </span>
                            </a>
                            <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "compact", array(
                                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                                "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                "SHOW_PERSONAL_LINK" => "N",
                                "SHOW_NUM_PRODUCTS" => "Y",
                                "SHOW_TOTAL_PRICE" => "Y",
                                "SHOW_PRODUCTS" => "N",
                                "POSITION_FIXED" =>"N",
                                "SHOW_AUTHOR" => "Y",
                                "PATH_TO_REGISTER" => SITE_DIR."login/",
                                "PATH_TO_PROFILE" => SITE_DIR."personal/"
                            ),
                                false,
                                array()
                            );?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-fake"></div>
</header>



<? if ($curPage != SITE_DIR . "index.php"): ?>
    <div class="row">
        <div class="col-lg-12" id="navigation">
            <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "-"
            ),
                false,
                Array('HIDE_ICONS' => 'Y')
            ); ?>
        </div>
    </div>
    <h1 class="bx-title dbg_title" id="pagetitle"><?= $APPLICATION->ShowTitle(false); ?></h1>
<? endif ?>
