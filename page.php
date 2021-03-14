<?php get_header();?>
<div class="page">
    <?php while(have_posts()){
        the_post(); ?>
        <h1 class="page__header"><?php the_title();?></h1>
        <div class="page__content">
        <?php the_content();
    }?>
    </div>
</div>
<?php get_footer();?>