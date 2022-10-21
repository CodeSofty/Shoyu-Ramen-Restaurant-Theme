<!-- Home page here -->
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
    <section id="menu-section">
        <h2 class="text-neutral-900  fw-light fs-secondary-heading">RAMEN</h2>
        <div class='menu-wrapper'>
            <div class='menu-list-left'> 
                <ul>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Tori Paitan</h3>
                        <div class='menu-item-description'>rich chicken broth / pork belly / bean sprouts / fried garlic / ajitama / negi</div>
                        <div class='menu-item-price'>$15.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Spicy Miso</h3>
                        <div class='menu-item-description'>rich chicken broth / roasted garlic miso / spicy pork meatballs / corn / bean sprouts / ajitama / goma / negi</div>
                        <div class='menu-item-price'>$14.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Yasai (V)</h3>
                        <div class='menu-item-description'>vegan broth / tofu / roasted tomato / mushrooms / fried shallots / negi / (gf noodles available)</div>
                        <div class='menu-item-price'>$16.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Kare Mazemen</h3>
                        <div class='menu-item-description'>thick noodles / brothless / house-made curry sauce / chicken confit / beet pickled ginger / negi / goma</div>
                        <div class='menu-item-price'>$16.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Mushroom Mazemen (V)</h3>
                        <div class='menu-item-description'>thick noodles / brothless / mushroom sauce / beet pickled ginger / negi / fried shallots</div>
                        <div class='menu-item-price'>$14.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Chilled Ramen</h3>
                        <div class='menu-item-description'>chilled noodles / brothless / sesame dressing / shrimp / surimi / mustard greens / negi / fried shallots / vegan available</div>
                        <div class='menu-item-price'>$7.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Kid Ramen</h3>
                        <div class='menu-item-description'>rich chicken broth & noodles only / vegan available</div>
                        <div class='menu-item-price'>$6.00</div>
                    </li>
                </ul>
            </div>
            <div class='menu-list-right'> 
                <ul>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Tori Paitan</h3>
                        <div class='menu-item-description'>rich chicken broth / pork belly / bean sprouts / fried garlic / ajitama / negi</div>
                        <div class='menu-item-price'>$15.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Spicy Miso</h3>
                        <div class='menu-item-description'>rich chicken broth / roasted garlic miso / spicy pork meatballs / corn / bean sprouts / ajitama / goma / negi</div>
                        <div class='menu-item-price'>$14.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Yasai (V)</h3>
                        <div class='menu-item-description'>vegan broth / tofu / roasted tomato / mushrooms / fried shallots / negi / (gf noodles available)</div>
                        <div class='menu-item-price'>$16.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Kare Mazemen</h3>
                        <div class='menu-item-description'>thick noodles / brothless / house-made curry sauce / chicken confit / beet pickled ginger / negi / goma</div>
                        <div class='menu-item-price'>$16.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Mushroom Mazemen (V)</h3>
                        <div class='menu-item-description'>thick noodles / brothless / mushroom sauce / beet pickled ginger / negi / fried shallots</div>
                        <div class='menu-item-price'>$14.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Chilled Ramen</h3>
                        <div class='menu-item-description'>chilled noodles / brothless / sesame dressing / shrimp / surimi / mustard greens / negi / fried shallots / vegan available</div>
                        <div class='menu-item-price'>$7.00</div>
                    </li>
                    <li>
                        <h3 class='menu-item-title text-primary-400 fw-bold'>Kid Ramen</h3>
                        <div class='menu-item-description'>rich chicken broth & noodles only / vegan available</div>
                        <div class='menu-item-price'>$6.00</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="reservation-section">
        <div class="hero-centered-textbox">
            <h2 class="hero-text text-neutral-100 fs-primary-heading fw-bold">Hungry? Make Your Dining Reservation Today!</h2>
            <div class="centered_button_box">
                <button class="text-neutral-100 fw-bold" >Make Reservation</button>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>