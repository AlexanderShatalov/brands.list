<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<div id="table_brands">
<?foreach($arResult["ITEMS"] as $k => $arItem):?>
    <?  
            $firstUpLetter = ucfirst(mb_substr($arItem['NAME'], 0, 1));
            $arBrands[$firstUpLetter][] = array($arItem['NAME'], $arItem["DETAIL_PAGE_URL"]);
            //$arBrands[$firstUpLetter][][$i] = $arItem["DETAIL_PAGE_URL"];
            
        //бренды по буквам в массиве $arBrands
    ?>
<?endforeach;?>    
        <?
        echo '<pre>';
        //var_dump($arBrands[0][$firstUpLetter]);
        //var_dump($d);
        print_r($arBrands);
            //var_dump(ucfirst(mb_substr($arItem['NAME'], 0, 1)));
        echo '</pre>';
        ?>
        
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
