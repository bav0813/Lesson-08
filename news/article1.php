<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 24.02.18
     * Time: 22:04
     */



    require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.'newscontent.php';



    $artcleNo='1';



    echo '<i>'.$news[$artcleNo]['datetime'].'     '.$news[$artcleNo]['source'].'</i><br><br>'.$news[$artcleNo]['description'].'<br>';





