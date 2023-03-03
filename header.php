<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php header('X-Frame-Options: deny');?>
<?php header('Content-Security-Policy: frame-ancestors none'); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="msvalidate.01" content="922C7DE1DEC03121E11D1770BBB2207D" />
    <meta name="description" content="欢迎！来看看OS的博客站吧！">
    <script type="text/javascript">
function mb_sidebar_hide(){
    var a = document.getElementById('secondary');
    a.style.display='none';
    a.style.zIndex='0';
    a.style.background='rgba(255, 255, 255, 0.7)';
    a.style.transition='none';
    a = document.getElementsByClassName('container');
    a[1].style.margin='auto';
}
function mb_sidebar_show(){
    var a = document.getElementById('secondary');
    a.style.display='block';
    a.style.position='fixed';
    a.style.zIndex='1';
    a.style.background='#00000000';
    a.style.transition='all 0.25s ease';
    a = document.getElementsByClassName('container');
    a[1].style.margin='0';
}
function pressbutton(){
    var a = document.getElementById('secondary');
    if(a.style.display=='block') mb_sidebar_hide();
    else mb_sidebar_show();
}
function changetheme(){
    var a=document.getElementsByTagName('link');
    if(a[3].href=="<?php $this->options->themeUrl('style.css'); ?>"){
        a[3].href="<?php $this->options->themeUrl('style-dark.css'); ?>";
    }else{
        a[3].href="<?php $this->options->themeUrl('style.css'); ?>";
    }
}
function timesay(){
    var date=new Date(),str='';
    date=parseInt(date/1000/3600%24+8);
    if((date>=8&&date<=11)||(date>=14&&date<18)){str='努力吧~';}
    else if(date>=12&&date<=13){str='该吃午饭喽！';}
    else if(date>=18&&date<=21){str='休息休息吧~别再测试JS啦！';}
    else if((date>=22&&date<=24)||(date>=0&&date<=6)){str='现在是睡觉时间哦~';}
    else{str='早上好啊！';}
    console.log('欢迎您朋友！\n现在是'+date+'点，'+str);
}
function password(pass){
    var passwd=$("#inputpass").text();
    if(pass==passwd){
        document.getElementById('password').style.display='block';
    }else{
        document.write('密码错误');
    }
}
function autodo(){
    var date=new Date();
    date=date/1000/3600%24+8;
    timesay();
    if(window.location.host=='helloos.repl.co'){
        window.location.href="https://helloos.eu.org/";
    }
}
    document.addEventListener('copy', function (event) {
        let clipboardData = event.clipboardData || window.clipboardData;
        if (!clipboardData) { return; }
        let text = window.getSelection().toString();
        let add = "\n----------\n除非特别声明，本文遵循CC-BY-SA-4.0协议，转载时请附上作者和原文链接。\n作者：HelloOSMe\n原文："+window.location.href;
        if (text) {
            event.preventDefault();
            clipboardData.setData('text/plain', text + add);
            document.querySelector('#result').innerText = text + add;
        }
    });

    window.onblur=function(){
        var title=document.getElementsByTagName('title');
        title[0].innerHTML= "页面崩溃啦 ~";
    }
    window.onfocus=function(){
        var title=document.getElementsByTagName('title');
        //title[0].innerHTML= "又好啦 ~ | <?php $this->options->title(); ?>";
       title[0].innerHTML="<?php $this->archiveTitle(['category' => _t('分类 %s 下的文章'),'search'   => _t('包含关键字 %s 的文章'),'tag'      => _t('标签 %s 下的文章'),'author'   => _t('%s 发布的文章')], '', ' - '); ?><?php $this->options->title(); ?>";
    }
    </script>
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="icon" href="<?php $this->options->logoUrl() ?>">
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('other.css'); ?>">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body onload="autodo();">
<header id="header" class="clearfix">
    <div class="col-12">
                <nav id="nav-menu" class="clearfix" role="navigation">
                        <div id="logo">
                        <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>"/>
                        </div>
            <div class="site-search col-3 kit-hidden-tb">
                        <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                            <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                            <input type="text" id="s" name="s" class="text" placeholder="<?php _e('搜索博客！'); ?>"/>
                            <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                        </form>
                    </div>

                    <a<?php if ($this->is('index')): ?> class="current"<?php endif; ?>
                        href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <a<?php if ($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>
                            href="<?php $pages->permalink(); ?>"
                            title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
            </div>
    <div class="container">
        <div class="row">
            <br/> <br/> <br/>
            <div class="mobile-show">
            
            </div>
           <!--<div class="site-name col-mb-12 col-9">
                <?php if ($this->options->logoUrl): ?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>"/>
                    </a>
                <?php else: ?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                    <p class="description"><?php $this->options->description() ?></p>
                <?php endif; ?>
            </div>-->
        </div><!-- end .row -->
    </div>
    <a class="mobile-icon" onclick="pressbutton();">
        <svg height="30" width="30">
            <path d="M0,5,30,5" stroke="#888" stroke-width="5"/>
            <path d="M0,14,30,14" stroke="#888" stroke-width="5"/>
            <path d="M0,23,30,23" stroke="#888" stroke-width="5"/>
        </svg>
    </a>
    <a class="change-theme" onclick="changetheme();" style="left:0;display:none;">
<!--暂时禁用，有bug-->
<img class="themeimg" style="width:30px;margin:2px 3px 2px 3px;" src="/usr/themes/OSMe/img/ms.png" alt="" />
    </a>
</header><!-- end #header -->
<div id="body">
    <div class="container">
        <div class="row">

    
    
