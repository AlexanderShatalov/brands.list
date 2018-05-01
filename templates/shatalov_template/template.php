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
    <?=$arResult["NAV_STRING"]?><br>
<?endif;?>
        
<div id="table_brands">
    <?foreach($arResult["ITEMS"] as $k => $arItem):?>
        <?  //формирование нового масиива
            $firstUpLetter = ucfirst(mb_substr($arItem['NAME'], 0, 1));
            $arBrands[$firstUpLetter][] = array(
                $arItem['NAME'], 
                $arItem['DETAIL_PAGE_URL'],
                $arItem['PREVIEW_PICTURE']['SRC'],
                $arItem['PREVIEW_PICTURE']['WIDTH'],
                $arItem['PREVIEW_PICTURE']['HEIGHT'],
                $arItem['PREVIEW_PICTURE']['ALT'],
                $arItem['PREVIEW_PICTURE']['TITLE']
            );
            
        ?>
    <?endforeach;?>    
        <div class="row">
            <? //вывод элементов на страницу?>
            <?foreach ($arBrands as $letter => $newBrands):?>
            <ul class="brands-item">
                <li><b><?=$letter?></b>
                    <ul>
                        <?foreach ($newBrands as $brand):?>
                            <a href="<?=$brand[1]?>"><?=$brand[0] . '<br>'?></a>  
                        <?endforeach;?>
                        </li>
                    </ul>
                </li>
            </ul>
            <?endforeach;?>
            
        <?    
            //echo '<pre>';
            //var_dump(intval(count($arBrands)/3));
            //echo '</pre>';
        ?>
        </div>
    </div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <br><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
