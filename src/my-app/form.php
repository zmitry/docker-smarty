<?php
    // стиль *nix (не забывайте о заглавной 'S')
    define('SMARTY_DIR', '/usr/local/lib/Smarty/libs/');
    require_once(SMARTY_DIR . 'Smarty.class.php');
    $smarty = new Smarty();
    $smarty->template_dir = "smarty/templates";
    $smarty->compile_dir = "smarty/templates_c";
    $lang="ua";
    $title="Класний сайт";
    $descr="Опис сайту";
    $content="Ця інформація є для Вас винятково корисною";
    $smarty->assign("lang",$lang);
    $smarty->assign("title", $title);
    $smarty->assign("descr",$descr);
    $smarty->assign("content",$content);
    $smarty->display("main.tpl");
?>