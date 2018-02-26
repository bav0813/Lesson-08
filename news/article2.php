<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 25.02.18
     * Time: 15:29
     */



    require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'template'.DIRECTORY_SEPARATOR.'newscontent.php';

    $artcleNo='2';



    echo '<i>'.$news[$artcleNo]['datetime'].'     '.$news[$artcleNo]['source'].'</i><br><br>'.$news[$artcleNo]['description'].'<br>';


