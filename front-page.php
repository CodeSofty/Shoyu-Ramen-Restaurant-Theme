
<?php get_header(); ?>


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
            $about = get_field('about');
            $firstRow = $about['first_row']; 
            $secondRow = $about['second_row'];
            ?>

    <section id="about-section">
        <div class="about-left-side flex-row col-reverse">
            <div class='image-container'>
                <img src="<?php echo $firstRow['first_row_image']['url']?>">
                <!-- <picture>
                    <source srcset="" alt="interior picture of a nice restaurant" media="(min-width: 650px)">
                    <source srcset="" alt="interior picture of a nice restaurant" media="(min-width: 300px)">
                    <img src="" alt="interior picture of a nice restaurant">
                </picture> -->
            </div>
            <div class="about-text flex-col">
                <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular"><?php $firstRowHeading = $about['first_row']['heading']; echo $firstRowHeading ?></h2>
                <p><?php $firstRowText = $about['first_row']['first_row_text']; echo $firstRowText ?>
                </p>
            </div>
        </div>
        <div class="about-right-side flex-row">
            <div class=" about-text flex-col">
                    <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular"><?php $secondRowHeading = $about['second_row']['heading']; echo $secondRowHeading ?></h2>
                    <p><?php $secondRowText = $about['second_row']['second_row_text']; echo $secondRowText ?>
                    </p>
                </div>
                <div class='image-container'>
                    <img src="<?php echo $secondRow['second_row_image']['url']?>">
                    <!-- <picture> -->
                    <!-- <source srcset="<?php  the_post_thumbnail('about-image')?>" alt="a close up of cooking noodles in a pan" media="(min-width: 650px)">
                        <source srcset="<?php  the_post_thumbnail('about-image')?>" alt="a close up of cooking noodles in a pan" media="(min-width: 300px)">
                        <img src="<?php  the_post_thumbnail('about-image')?>" alt="a close up of cooking noodles in a pan"> -->
                    <!-- </picture> -->
                </div>
            </div>
    </section>

<?php } // end while
} // end if
?>


<!-- Menu -->
    <section id="menu-section">
        <h2 class="text-neutral-900  fw-light fs-secondary-heading">RAMEN</h2>
        <div class='menu-wrapper'>
            <div class='menu-list-left'> 
                <ul>
                    <li>
                        <?php 
                        $dishes = array(
                            'post_type' =>'dish'
                        );
                        $menu_query = new WP_Query($dishes);

                        // Loop through posts and display them on the menu list

                        while($menu_query->have_posts()) { 
                            $menu_query->the_post(); ?>
                            <h3 class='menu-item-title text-primary-400 fw-bold'><?php the_title(); ?></h3>
                            <div class='menu-item-description'><?php the_excerpt();?></div>
                            <div class='menu-item-price'>$<?php the_field('menu_dish_price');?></div>
                        <?php } ?>
                    </li>
                </ul>
            </div>
            <div class='menu-list-right'> 
                <ul>
                    <li>
                    <?php 
                        $ramen_dishes = array(
                            'post_type' =>'dish'
                        );
                        $menu_query = new WP_Query($ramen_dishes);

                        // Loop through posts and display them on the menu list

                        while($menu_query->have_posts()) { 
                            $menu_query->the_post(); ?>
                            <h3 class='menu-item-title text-primary-400 fw-bold'><?php the_title(); ?></h3>
                            <div class='menu-item-description'><?php the_excerpt();?></div>
                            <div class='menu-item-price'>$<?php the_field('menu_dish_price');?></div>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php  if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
            $reservationInfo = get_field('reservation');
            ?>
<!-- Reservation -->
    <section id="reservation-section" style="<?php echo $reservationInfo['reservation_background_image']['url']?>">
        <div class="hero-centered-textbox">
            <h2 class="hero-text text-neutral-100 fs-primary-heading fw-bold"><?php echo $reservationInfo['large_text_field']?></h2>
            <div class="centered_button_box">
            <a class="hero-action-bttn text-neutral-100 fw-bold" href="<?php echo site_url('/reservation') ?>"><?php echo $reservationInfo['call_to_action_text']?></a>
            </div>
        </div>
    </section>
    <?php } ?>
<?php } ?>
    <?php get_footer(); ?>