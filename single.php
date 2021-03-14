<?php get_header();?>

<div class="post-container">
    <?php while(have_posts()){
                the_post(); ?>
    <div class="post">

        <h2 class="post__heading"><?php the_title();?></h2>

        <div class="post__box--container">
            <div class="post__box">
                <div class="post__box--home">
                    <a class="post__box--homelink" href="<?php echo site_url('/news');?>"><i class="fas fa-home"></i>Blog Home</a>
                </div>
                <div class="post__box--author">
                    <p>Posted by <a href="<?php get_the_author_posts_link();?>"><?php echo get_the_author();?></a> on <?php the_date('F j, Y')?> at <?php the_time('g:i a'); ?> in <?php echo get_the_category_list(', ') ?></p>
                </div>
            </div>
        </div>

        <div class="post__content">
            <?php the_content();?>
        </div>
        <?php }?>

    </div>
<div>

<?php get_footer();?>