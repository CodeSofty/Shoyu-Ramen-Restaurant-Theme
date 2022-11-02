<!-- About -->
    <?php get_header(); ?>
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
                <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular">Our Passion</h2>
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
                            <div class='menu-item-price'>$15.00</div>
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
                            <div class='menu-item-price'>$15.00</div>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<!-- Reservation -->
    <section id="reservation-section">
        <div class="hero-centered-textbox">
            <h2 class="hero-text text-neutral-100 fs-primary-heading fw-bold">Hungry? Make Your Dining Reservation Today!</h2>
            <div class="centered_button_box">
                <button class="text-neutral-100 fw-bold" >Make Reservation</button>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>