
<?php get_header(); ?>


<?php 
    // Use template part to display About Section Content
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        $args =  array (
            $about = get_field('about'),
            'firstrow' =>  $about['first_row'],
            'secondrow' => $about['second_row']
        );
        get_template_part('template-parts/content-about', null,  $args );
    } 
} 
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

<?php  
    // Loop through posts and display ACF fields
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
            $reservationInfo = get_field('reservation');
            ?>
<!-- Reservation -->
    <section id="reservation-section" style="background-image: url(<?php echo $reservationInfo['reservation_background_image']['url']?>)">
        <div class="hero-centered-textbox">
            <h2 class="hero-text text-neutral-100 fs-primary-heading fw-bold"><?php echo $reservationInfo['large_text_field']?></h2>
            <div class="centered_button_box">
                <a class="hero-action-bttn text-neutral-100 fw-bold" href="<?php echo site_url('/reservation') ?>"><?php echo $reservationInfo['call_to_action_text'] ?></a>
            </div>
        </div>
    </section>
    <?php } ?>
<?php } ?>
    <?php get_footer(); ?>