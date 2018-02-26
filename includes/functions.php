<?php

    //require_once 'template' . DIRECTORY_SEPARATOR . 'newscontent.php'; //works
    require_once __DIR__.'/..'.DIRECTORY_SEPARATOR.'template' . DIRECTORY_SEPARATOR . 'newscontent.php';




function getTopNavigation()
{
    $navHtml = '';

    $pages = [
        ['href' => '?page=home', 'title' => 'Home page'],
        ['href' => '?page=about', 'title' => 'About us'],
        ['href' => '?page=contact', 'title' => 'Contact us'],
        ['href' => '?page=newsfeed', 'title' => 'News'],


    ];

    if (!empty($pages)) {
        $navHtml .= '<ul>';
        foreach ($pages as $i => $page) {
            $navHtml .= '<li><a href="'. $page['href'] .'">'. $page['title'] .'</a></li>';
        }
        $navHtml .= '</ul>';
    }

    return $navHtml;
}



    function announce($text, $chars){

        if (mb_strlen($text)>$chars) {

            $arr = preg_split('//u',$text,-1,PREG_SPLIT_NO_EMPTY);
            $i=$chars-1;
            while ($i>=0) {
                if ($arr[$i] <>' ') {
                    $i--;
                }
                else {

                    array_splice($arr,$i+1);
                    $out=implode($arr);
                    break;

                }

                $out='cannot split';
            }
        }
        else {
            $out=$text;}

        return $out.'...';
    }


    function getNewsFeed()
    {
        global $news;
        $charsLimitation=30;


        $newsHtml='';
        if (!empty($news)) {
            $newsHtml .= '<ul>';
            foreach ($news as $i => $new) {
                $newsHtml .= '<li><a href="'. $new['link'] .'">' . $new['datetime']  .'         '.  announce($new['title'],$charsLimitation) . '</a></li>';
            }
            $newsHtml .= '</ul>';
        }
        return $newsHtml;
    }