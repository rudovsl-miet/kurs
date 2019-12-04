<?php?>

<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="stylesheet" href="css/template_styles.css">
    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/css/template_styles.css");?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<header>
    <div class="container">
        <div class="heading clearfix">
            <div class="logo">
                <a href="index.html"><?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    );?>

                </a>
            </div>
            <div class="menu">
                <nav>
                    <ul class="mmenu">
                        <li>
                            <a href="#">Casio</a>
                        </li>
                        <li>
                            <a href="#">Tissot</a>
                        </li>
                        <li>
                            <a href="#">Omega</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="container">