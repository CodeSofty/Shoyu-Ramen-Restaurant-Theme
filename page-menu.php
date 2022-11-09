<?php get_header(); ?>
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
<?php get_footer(); ?>