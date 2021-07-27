<?php get_header()?>
    <div id="main">
        <section class="main">
            <div class="main__container">
                <div class="main__container--heading">
                    <h1 class="main__container--heading-primary">RIA Links Artists</h1>
                    <h2 class="main__container--heading-secondary">for Systems Change</h2>
                </div>
                <div class="main__container--paragraph">
                    <p class="main__container--paragraph-text">Do you ever ask yourself what artists can do to resist and change our dysfunctional societal systems
based on profit, exploitation, and competition? The neo-liberal approach to our environment has led to
an existential climate crisis that puts life on this planet in critical peril.
Climate change calls out for immediate responses from all of us according to our talents and capabilities.
What can artists do?</p>
<p>Ria Links Artists for Systems Change aims to bring together critical artists from Ottawa and elsewhere, to
discuss collective and individual possibilities and generate ideas for action.</p>
                </div>
            </div>
            <div class="main__middle">
                <div class="main__middle--salons-in-the-cloud">
                    <h2><a href="<?php echo get_category_link(get_cat_ID('Salons in the Cloud'));?>" class="main__middle--salons-in-the-cloud-linkheading">Salons in the Cloud</a></h2>
                    <p class="main__middle--salons-in-the-cloud-p">Salons in the cloud are open to anyone, artists and non-artists, interested in, or curious about, art and systems change.</p>
                    <p class="main__middle--salons-in-the-cloud-p">We invite artists from all disciplines, artists’ collectives, and study-groups who share a drive to work for systems
                    change through their art in and around Ottawa, to showcase their projects and discuss their ideas in a Ria Links Salon.</p>
                    <h3 class="main__middle--salons-in-the-cloud-heading-secondary">Salons in the Cloud will last as long as we can find presenters.</h3>
               
                </div>
                <div class="main__middle--mailing-list">
                    <h2 class="main__middle--mailing-list-heading">Sign up for our mailing list</h2>
                    <?php echo do_shortcode('[contact-form-7 id="99" title="Mailing List"]');?>
                </div>
            </div> 
            <div class="main__bottom">
                <div class="main__bottom--image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ria-logo.png" alt="" class="main__bottom--image">
                </div>
                <div class="main__bottom--text">
                    <p>Ria Links Artists for Systems Change is an emerging online program that is an offshoot from RIA Research in Art, a
                    voluntary artists initiative that Petra Halkes and René Price organized and ran from their home in Ottawa from 2006 –
                    2020.
                    </p>
                </div>
            </div>
        </section>

    </div>


<?php get_footer()?>