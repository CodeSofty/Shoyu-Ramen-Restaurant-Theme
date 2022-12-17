
<?php get_header(); ?>

<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        $about = get_field('about');
        $firstRow =  get_field['first_row'];
        $SecondRow = get_field['second_row'];
            ?>
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
                <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular"><?php echo $firstRow['row_heading']?></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc gravida felis at tellus tempus convallis 
                    maximus a dui. Fusce porta urna vitae ullamcorper facilisis. Fusce ipsum felis, tempus quis cursus eleifend, 
                    accumsan non sem. In auctor ac leo in imperdiet. Etiam rutrum, dolor quis porta dignissim, sapien leo porta 
                    tortor, in viverra nibh purus quis enim. Fusce varius eleifend iaculis. Nullam pulvinar libero eros, ac 
                    scelerisque eros sollicitudin eget.
                </p>
            </div>
        </div>
        <div class="about-right-side flex-row">
            <div class=" about-text flex-col">
                    <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular">Our Promise</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc gravida felis at tellus tempus convallis 
                        maximus a dui. Fusce porta urna vitae ullamcorper facilisis. Fusce ipsum felis, tempus quis cursus eleifend, 
                        accumsan non sem. In auctor ac leo in imperdiet. Etiam rutrum, dolor quis porta dignissim, sapien leo porta 
                        tortor, in viverra nibh purus quis enim. Fusce varius eleifend iaculis. Nullam pulvinar libero eros, ac 
                        scelerisque eros sollicitudin eget.
                    </p>
                </div>
                <div class='image-container'>
                    <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-cooking-large.jpg" alt="a close up of cooking noodles in a pan" media="(min-width: 650px)">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-cooking-small.jpg" alt="a close up of cooking noodles in a pan" media="(min-width: 300px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-cooking-small.jpg" alt="a close up of cooking noodles in a pan">
                    </picture>
                </div>
            </div>
    </section>

<?php    } 

}?>
<?php get_footer(); ?>