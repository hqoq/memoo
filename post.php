<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-sm-12 col-md-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline">
            <a itemprop="url"
               href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </h1>
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person">
                <?php _e('作者: '); ?><a itemprop="name"
                                       href="<?php $this->author->permalink(); ?>"
                                       rel="author"><?php $this->author(); ?></a>
            </li>
            <li><?php _e('时间: '); ?>
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            </li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>
    <div class="row py-4">
        <div class="col post-near">上一篇: <?php $this->thePrev('%s', '没有了'); ?></div>
        <div class="col post-near text-end">下一篇: <?php $this->theNext('%s', '没有了'); ?></div>
    </div>
    <?php $this->need('comments.php'); ?>
    
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
