<?php
if(!isset($_GET['p'])){


 include ROOT_PATH."./view/inc/menu.php";

}elseif(in_array($_GET['p'],ARRAY_VALID_PAGES)){

    include ROOT_PATH."./view/inc/".$_GET['p'].".php";
    
}else{
    include ROOT_PATH."./view/inc/erreur404.php";
}