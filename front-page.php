<?php get_header()?>
    <div id="main">
        <section class="main">
            
            <div class="main__container">
                <h1 class="main__container--heading">LA County Community Arts Center</h1>                
                <div class="main__container--paragraph">
                    <p class="main__container--paragraph-text">Our program aims to provide quality visual arts education to youth in Los Angeles County.</p>
                    <p class="main__container--paragraph-text">Thanks to the support of our community, we have been able to provide year-round after-school programs, enrichment, and day camp in LA County since 1998.</p>
                </div>
            </div>
            <div class="main__middle">

     

                <div class="glide__container">
                    <div class="glide" id="hero">
                        <div class="glide__track" data-glide-el="track" id="track">
                            <ul class="glide__slides">
                                <li class="glide__slide"><div class="glide__image--container"><img class="glide__image" src="<?php bloginfo('template_url'); ?>/images/antenna-ohNCIiKVT1g-unsplash.jpg"></div></li>
                                <li class="glide__slide"><div class="glide__image--container"><img class="glide__image"  src="<?php bloginfo('template_url'); ?>/images/barbara-froes-Yhsdub0hV1A-unsplash.jpg"></div></li>
                                <li class="glide__slide"><div class="glide__image--container"><img class="glide__image" src="<?php bloginfo('template_url'); ?>/images/content-pixie-woMD-vhzOHI-unsplash.jpg"></div></li>
                                <li class="glide__slide"><div class="glide__image--container"><img class="glide__image" src="<?php bloginfo('template_url'); ?>/images/dea-piratedea-a1dGfN3S_SM-unsplash.jpg"></div></li>
                                <li class="glide__slide"><div class="glide__image--container"><img class="glide__image" src="<?php bloginfo('template_url'); ?>/images/elena-mozhvilo-xw8DfYBaNbQ-unsplash.jpg"></div></li>
                                <li class="glide__slide"><div class="glide__image--container"><img class="glide__image" src="<?php bloginfo('template_url'); ?>/images/jeswin-thomas-zzrlRlPI6iE-unsplash.jpg"></div></li>
                                <li class="glide__slide"><div class="glide__image--container"><img class="glide__image" src="<?php bloginfo('template_url'); ?>/images/mike-fox-P5PhmW-OoJg-unsplash (1).jpg"></div></li>
                            </ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
                        </div>     
                    </div>  
                                  
                </div>

                <div class="main__middle--mailing-list">
                    <h2 class="main__middle--mailing-list-heading">Sign up for our mailing list</h2>
                    <?php echo do_shortcode('[contact-form-7 id="35" title="Untitled"]');?>
                </div>
            </div> 
            
        </section>

    </div>


<?php get_footer()?>