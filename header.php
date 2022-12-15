<!-- Header here --> 
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta <?php bloginfo('charset');?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
    <div class="wrapper">
    <header>
        
        <div class="hero"  <?php if(is_front_page()) { ?>style= "background-image:url('/wp-content/themes/shoyu-ramen/images/hero-bg-small.jpg')"<?php }?>> 
            <!-- hero_background_image -->
        <nav>
                <h1 class="logo fw-bold"><a href="<?php echo site_url();?>">SHOYU RAMEN</a></h1>
                <div class="mobile-navigation">
                    <svg class="mobile-hamburger" id="mobile_svg" viewBox="0 0 100 80" width="40" height="40">
                        <rect width="70" height="10"></rect>
                        <rect y="20" width="70" height="10"></rect>
                        <rect y="40" width="70" height="10"></rect>
                    </svg>
                </div>
                <ul>
                    <li class="fw-light" ><a href="<?php echo site_url();?>">HOME</a></li>
                    <li class="fw-light"><a href="<?php echo site_url('/about')?>">ABOUT</a></li>
                    <li class="fw-light"><a href="<?php echo site_url('/menu')?>">MENU</a></li>
                    <li class="fw-light"><a href="<?php echo site_url('/reservation')?>">RESERVATION</a></li>
                    <li class="fw-light"><a href="<?php echo site_url('#location')?>">HOURS & LOCATION</a></li>
                </ul>
            </nav>
            <nav>
                <div class='mobile-nav'>
                    <ul class='mobile-nav-list'>
                        <li class="fw-light" ><a href="<?php echo site_url();?>">HOME</a></li>
                        <li class="fw-light"><a href="<?php echo site_url('/about')?>">ABOUT</a></li>
                        <li class="fw-light"><a href="<?php echo site_url('/menu')?>">MENU</a></li>
                        <li class="fw-light"><a href="<?php echo site_url('/reservation')?>">RESERVATION</a></li>
                        <li class="fw-light"><a href="<?php echo site_url('#location')?>">HOURS & LOCATION</a></li>
                    </ul>
                    <div id="close-out">
                        X
                    </div>
                </div>
            </nav>
            <?php if(is_front_page()) { ?>
            <div class="hero-centered-textbox">
                <h2 class="hero-text text-neutral-100 fs-primary-heading fw-bold margin-large">
                    Tasty, locally sourced, and authentically cooked ramen dishes
                </h2>
                <div class="centered_button_box">
                <a class="hero-action-bttn text-neutral-100 fw-bold" href="<?php echo site_url('/reservation') ?>"> Make Reservation</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </header>
    