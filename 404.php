<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('sidebar.php'); ?>
<div class="col-mb-12 col-tb-8 col-offset-1" id="main">
    <!--col-tb-offset-2-->
    <div class="error-page">
        <h2 class="post-title">404 - <?php _e('电脑文件丢失啦！'); ?></h2>
        <p><?php _e('OS的电脑里没有这个文件哦！你可以试着搜索一下相似的文件：'); ?></p>
        <form method="post">
            <p><input type="text" name="s" class="text" autofocus/></p>
            <p>
                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
            </p>
        </form>
    </div>

</div><!-- end #content-->

<br/>
<?php $this->need('footer.php'); ?>
