<!-- Home page here -->
    <?php get_header(); ?>
    <section id="about-section">
        <div class="about-left-side flex-row col-reverse">
            <picture>
                <source srcset="<?php echo get_template_directory_uri();?>/images/about-restaurant-large.jpg" alt="interior picture of a nice restaurant" media="(min-width: 650px)">
                <source srcset="<?php echo get_template_directory_uri();?>/images/about-restaurant-small.jpg" alt="interior picture of a nice restaurant" media="(min-width: 300px)">
                <img src="<?php echo get_template_directory_uri();?>/images/about-restaurant-small.jpg" alt="interior picture of a nice restaurant">
            </picture>
            <div class="about-text flex-col">
                <h2 class="text-neutral-900 fs-secondary-heading fw-regular">Our Passion</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Quae eum rerum maiores labore pariatur maxime 
                    adipisci eaque ipsam quaerat assumenda accusamus rem,
                    nobis hic aperiam esse facilis laudantium dolor atque!
                </p>
            </div>
        </div>
        <div class="about-right-side flex-row">
            <div class=" about-text flex-col">
                    <h2 class="text-neutral-900 fs-secondary-heading fw-regular">Our Promise</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Quae eum rerum maiores labore pariatur maxime 
                        adipisci eaque ipsam quaerat assumenda accusamus rem,
                        nobis hic aperiam esse facilis laudantium dolor atque!
                    </p>
                </div>
                <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-cooking-large.jpg" alt="a close up of cooking noodles in a pan" media="(min-width: 650px)">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/images/about-cooking-small.jpg" alt="a close up of cooking noodles in a pan" media="(min-width: 300px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-cooking-small.jpg" alt="a close up of cooking noodles in a pan">
                </picture>
            </div>
    </section>
    <section id="menu-section">
        <h2 class="text-neutral-900 fw-light">RAMEN</h2>
        <ul class="menu-slide-one">
            <li class="menu-item">
                <h3 class="text-primary-400 fw-bold">Menu Item Title</h3>
                <p>
                    Menu Item Description
                <div>Menu Item Price</div>
                </p>
            </li>
        </ul>
    </section>
    <section id="reservation-section">
        <div class="hero-centered-textbox">
            <h2 class="hero-text text-neutral-100 fs-secondary-heading fw-bold">Hungry? Make Your Dining Reservation Today!</h2>
            <div class="centered_button_box">
                <button class="text-neutral-100 fw-bold" >Make Reservation</button>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>