<?php

function home()
{
    /*$links = get_links();
    $links['/home']['active'] = true;
    $buttons = theme_links($links);*/
    
    $smarty = newTemplate();
    $title = 'Home';
    $text = 'Level Up!';
    $footer = 'Deamond style!';
    $smarty->assign('title', $title);
    $smarty->assign('text', $text);
    $smarty->assign('footer', $footer);
    $links = array('/','login');
    $names = array('Home','Login');
    $buttons = null;
    $i = 0;
    foreach($links as $path => $link)
    {
        $button = $smarty->fetch('nav.tpl');
        $smarty->assign('link', $path);
        $smarty->assign('name', $name[$i]);
        if ($i == 0) $smarty->assign('activity',' active');
        else $smarty->assign('activity', null);
        $buttons .= $button;
    }
    $smarty->assign('buttons', $buttons);
    $smarty->display('page.tpl');
}

function login()
{
    $smarty = newTemplate();
    $title = 'Registration';
    $text = $smarty->fetch('login.tpl');
    $footer = 'Deamond style!';
    $smarty->assign('title', $title);
    $smarty->assign('text', $text);
    $smarty->assign('footer', $footer);
    $links = array('/','login');
    $names = array('Home','Login');
    $buttons = null;
    for ($i = 0; $i <= 2; ++$i)
    {
        $button = $smarty->fetch('nav.tpl');
        $smarty->assign('link', $links[$i]);
        $smarty->assign('name', $names[$i]);
        if($i == 1) $smarty->assign('activity',' active');
        else $smarty->assign('activity', null);
        $buttons .= $button;
    }
    $smarty->assign('buttons', $buttons);
    $smarty->display('page.tpl');
}

Router::get('^\/$', 'home');
Router::get('^\/login(\/?)$', 'login');

?>