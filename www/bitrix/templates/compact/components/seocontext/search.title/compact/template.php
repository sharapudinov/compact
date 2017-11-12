<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
CUtil::InitJSCore(array('jquery'));
$this->setFrameMode(true); ?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if (strlen($INPUT_ID) <= 0)
    $INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if (strlen($CONTAINER_ID) <= 0)
    $CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

$ITEMS_RESULT_CONTAINER_ID='mCSB_1_container';
$CATEGORY_RESULT_CONTAINER_ID='mCSB_2_container';
$TABS_HEAD_ID ='tabs_container';
$TABS_BODY_ID= 'b-tabs__body';

if ($arParams["SHOW_INPUT"] !== "N"):?>
    <div id="<?=$CONTAINER_ID?>" class="header-search header-main__search">

        <form method="get" action="<? echo $arResult["FORM_ACTION"] ?>" autocomplete="off">
            <div class="header-search__input-wrap">
                <div class="header-search__input-icon">
                    <svg class="i-icon" viewBox="0 0 22.1 23.7">

                        <style>.svg-icon-search {
                                fill: currentColor
                            }</style>
                        <path class="svg-icon-search" id="search-XMLID_60_"
                              d="M21.9 22.4l-5-5c2-1.8 3.2-4.5 3.2-7.4 0-5.5-4.5-10-10-10S0 4.5 0 10.1s4.5 10.1 10.1 10.1c2.1 0 4-.6 5.7-1.7l5.1 5.1c.1.1.3.2.5.2s.4-.1.5-.2c.3-.4.3-.9 0-1.2zM1.5 10.1c0-4.7 3.8-8.6 8.6-8.6s8.6 3.8 8.6 8.6-3.8 8.6-8.6 8.6-8.6-3.9-8.6-8.6z"></path>
                    </svg>
                </div>
                <input id="<? echo $INPUT_ID ?>" class="header-search__input" type="text"
                       placeholder="<?= GetMessage("CT_BST_SEARCH_BUTTON"); ?>" name="q"
                       value="">
                <button type="submit" class="header-search__input-submit" disabled="disabled">
                    <svg class="i-icon" viewBox="0 0 22.1 23.7">

                        <style>.svg-icon-search {
                                fill: currentColor
                            }</style>
                        <path class="svg-icon-search" id="search-XMLID_60_"
                              d="M21.9 22.4l-5-5c2-1.8 3.2-4.5 3.2-7.4 0-5.5-4.5-10-10-10S0 4.5 0 10.1s4.5 10.1 10.1 10.1c2.1 0 4-.6 5.7-1.7l5.1 5.1c.1.1.3.2.5.2s.4-.1.5-.2c.3-.4.3-.9 0-1.2zM1.5 10.1c0-4.7 3.8-8.6 8.6-8.6s8.6 3.8 8.6 8.6-3.8 8.6-8.6 8.6-8.6-3.9-8.6-8.6z"></path>
                    </svg>
                </button>
                <div class="header-search__close"></div>
            </div>
        </form>
        <div class="header-search__wrap b-tabs">

            <div id="<?echo $TABS_HEAD_ID?>" class="b-tabs__head b-tabs__head--blue-border header-search__tabs-head_n">
                <div id="search-items" class="header-search__tab b-tabs__head-item active" data-tab-btn="search-items">Товары</div>
                <div id="search-categories" class="header-search__tab b-tabs__head-item" data-tab-btn="search-categories">Категории</div>
            </div>
            <div id="<?=$TABS_BODY_ID?>" class="header-search__tabs-body b-tabs__body">

                <div  id="mCSB1" class="header-search__tab-body b-tabs__body-item active"
                     data-tab-body="search-items">

                </div>
                <div  id="mCSB2" class="header-search__tab-body b-tabs__body-item"
                     data-tab-body="search-categories">
                </div>
            </div>
        </div>
    </div>
<? endif ?>
<script>
    BX.ready(function () {
        $("#mCSB1, #mCSB2").mCustomScrollbar({
            axis: "y",
            advanced:{ autoScrollOnFocus: "div.header-search__product a" }
        });
        var mySearch=new JCTitleSearch({
            'AJAX_PAGE': '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
            'ITEMS_RESULT_CONTAINER_ID': '<?echo $ITEMS_RESULT_CONTAINER_ID?>',
            'CATEGORY_RESULT_CONTAINER_ID': '<?echo $CATEGORY_RESULT_CONTAINER_ID?>',
            "TABS_HEAD_ID": '<?echo $TABS_HEAD_ID?>',
            "TABS_BODY_ID": '<?echo $TABS_BODY_ID?>',
            'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
            'INPUT_ID': '<?echo $INPUT_ID?>',
            'MIN_QUERY_LEN': 2,
            'SEARCH_TYPE': 'items'
        });



    });
</script>

