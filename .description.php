<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    "NAME" => GetMessage("Список брендов из предложений"),
    "DESCRIPTION" => GetMessage("Выводим список брендов"),
    "PATH" => array(
        "ID" => "shataloff_brands_list",
        "CHILD" => array(
            "ID" => "brandsList",
            "NAME" => "Список брендов"
        )
    ),
    "ICON" => "/images/icon.gif",
);

?>