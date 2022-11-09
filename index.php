<!-- Default page -->
<?php get_header(); 
while(have_posts()){
    the_post(); // Keeps track of posts in loop ?>
<h2 class="text-neutral-900  fw-light fs-secondary-heading"><?php the_title();?></h2>
<section id="about-section">
    <div class="about-left-side flex-row col-reverse">
        <div class='image-container'>
            <picture>
                <source srcset="<?php echo get_template_directory_uri();?>/images/about-restaurant-large.jpg" alt="interior picture of a nice restaurant" media="(min-width: 650px)">
                <source srcset="<?php echo get_template_directory_uri();?>/images/about-restaurant-small.jpg" alt="interior picture of a nice restaurant" media="(min-width: 300px)">
                <img src="<?php echo get_template_directory_uri();?>/images/about-restaurant-small.jpg" alt="interior picture of a nice restaurant">
            </picture>
        </div>
        <div class="about-text flex-col">
            <p>
                <?php the_content();?>
            </p>
        </div>
    </div>
</section>

<?php } ?>

    <?php get_footer(); ?>