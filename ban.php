<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

header('X-Frame-Options: deny');

$list = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);

$ip = $list[0];

if($ip=='218.67.222.169'||$ip=='111.165.252.138'||$ip=='111.165.235.239'||$ip=='221.197.234.192'||$ip=='218.67.221.243'){
/*
    echo '<link rel="icon" href="https://cdn.luogu.com.cn/upload/image_hosting/zchrutle.png">';
    echo '<link rel="stylesheet" href="https://helloos.repl.co/usr/themes/default/otherpage.css">';
    echo '<link rel="stylesheet" href="https://helloos.repl.co/usr/themes/default/grid.css">';
    echo '<title>403:0717，滚出去！</title>';
    echo '<div id="box">';
    echo '<div class="center"><img alt="LOGO" src="https://cdn.luogu.com.cn/upload/image_hosting/zchrutle.png" class="logo"/>';
    echo '<h1>0717,滚出去！</h1>';
    echo '<h3>您的IP地址：';
    echo $ip;
    echo '</h3></div><h3>出了什么事？</h3>';
    echo '本IP地址可能来自一位xxs——0717placeholder，此人在本站发布多条垃圾信息，滥用网站资源。<br/>有关更多信息，请访问其<a href="https://yu22c0w0.github.io/0717">言论存档页面</a>';
    echo '<h3>如何恢复？</h3>';
    echo '您可以在<a href="https://www.wikidot.com/account/messages#/new/8288810">wikidot私信</a>站长';
    echo '</div>';*/
    echo '<script>if(window.location.host==\'helloos.repl.co\'){window.location.href="https://helloos.eu.org/cloudflare_verify.html";}else{window.location.href="/cloudflare_verify.html"}</script>';
    exit;
}
if($ip==''){
    echo '<link rel="icon" href="https://cdn.luogu.com.cn/upload/image_hosting/zchrutle.png">';
    echo '<link rel="stylesheet" href="https://helloos.repl.co/usr/themes/default/otherpage.css">';
    echo '<link rel="stylesheet" href="https://helloos.repl.co/usr/themes/default/grid.css">';
    echo '<title>403:访问出现错误！</title>';
    echo '<div id="box">';
    echo '<div class="center"><img alt="LOGO" src="https://cdn.luogu.com.cn/upload/image_hosting/zchrutle.png" class="logo"/>';
    echo '<h1>不好意思，您不能访问本网站！</h1>';
    echo '<h3>您的IP地址：';
    echo $ip;
    echo '</h3></div><h3>出了什么事？</h3>';
    echo '您可能在本站发布了恶意评论或者违反本站规定。网站所有者已暂时禁止你访问本站。';
    echo '<h3>如何恢复？</h3>';
    echo '请私信本站站长询问。<br/>';
    echo '<div class="center"><a href="https://www.luogu.com.cn/chat">洛谷私信</a> | <a href="https://www.wikidot.com/account/messages#/new/8288810">wikidot私信</a> | <a href="mailto:HelloOSMe@outlook.com">邮箱</a></div>';
    echo '</div>';
    exit;
}

if(preg_match('/(?i)msie [1-9]/',$_SERVER['HTTP_USER_AGENT'])){
    echo '<link rel="icon" href="https://cdn.luogu.com.cn/upload/image_hosting/zchrutle.png">';
    echo '<link rel="stylesheet" href="https://helloos.repl.co/usr/themes/default/otherpage.css">';
    echo '<link rel="stylesheet" href="https://helloos.repl.co/usr/themes/default/grid.css">';
    echo '<title>本网页不能在IE浏览器/IE模式下打开</title>';
    echo '<div id="box">';
    echo '<div class="center"><img alt="LOGO" src="https://cdn.luogu.com.cn/upload/image_hosting/zchrutle.png" class="logo"/>';
    echo '<h1>本网页不能在IE浏览器/IE模式下打开</h1>';
    echo '</h3></div><h3>出了什么事？</h3>';
    echo '请使用主流浏览器（safari,Chrome）访问本站，我们不再支持IE浏览器。';
    echo '</div>';
    exit;
}
?>