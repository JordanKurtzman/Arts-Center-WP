<?php get_header()?>

<main class="mainblog">

    <div class="sidebar" id="sideBar">
        <?php get_sidebar('sidebar-1');?>

    </div>
    
    <div class="blog-container">
        
        <div class="blog">
            <h1 class="blog__heading">LA County Arts Center:<span class="italic"> Blog</span></h1>
        <?php 
        while(have_posts()) {
            the_post();?>
            
                
                    <div class="blog__item">
                        <h2 class="blog__item--heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    </div>
                    <div class="blog__date">
                        <p>by <?php the_author_posts_link();?> on <?php the_date('F j, Y')?> at <?php the_time('g:i a'); ?> in <?php echo get_the_category_list(', ') ?></p>
                    </div>
                    <div class="blog__excerpt">
                        <?php the_excerpt();?>
                        <p><a class="blog__excerpt--link" href="<?php the_permalink();?>">Continue reading</a></p>
                    </div> 
                
    <?php   } ?>
    <div class="blog__pagination"> <?php echo paginate_links();?> </div>


        </div>
    </div>

    


</main>






<?php get_footer()?>
    