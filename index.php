<?php

/*Взять архив занятия, добавить 2 страницы: список новостей, детальная страница новости в
шаблон мини сайта, который мы начали делать на занятии.

Добавить в асоциативный массив новости. Написать функциями получение одной новости, списка
новостей, сгенерировать навигацию. В шаблоне вывода списка новостей показывать: дату новсти и
 название, а так же краткий текст из поля анонс. В детальной странице новости показывать: дату,
название, полный текст и источник новости.*/

require_once 'includes' . DIRECTORY_SEPARATOR . 'functions.php';


$page = @$_REQUEST['page'];

ob_start();

switch ($page)
{
    case 'about':
        $title = 'About us';
        $h1 = 'About us page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'about.php';
        break;
    case 'contact':
        $title = 'Contact us';
        $h1 = 'Contact us page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'contact.php';
        break;
    case 'newsfeed':
        $title = 'News';
        $h1 = 'News';

        include_once 'template' . DIRECTORY_SEPARATOR . 'newsfeed.php';
        break;

    case 'article1':
        $title = 'News';
        $h1 = $news['1']['title'];

        include_once 'news' . DIRECTORY_SEPARATOR . 'article1.php';
        break;

    case 'article2':
        $title = 'News';
        $h1 = $news['2']['title'];

        include_once 'news' . DIRECTORY_SEPARATOR . 'article2.php';
        break;



    case '':
    case 'home':
    default:
        $title = 'Home page';
        $h1 = 'Home page #1 title';

        include_once 'template' . DIRECTORY_SEPARATOR . 'home.php';
        break;
}

$topNav = getTopNavigation();


$content = ob_get_contents();
ob_end_clean();

 //echo $content;

include_once 'template' . DIRECTORY_SEPARATOR . '_layout.php';
