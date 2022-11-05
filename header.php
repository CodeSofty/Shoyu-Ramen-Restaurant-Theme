<!-- Header here --> 
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta <?php bloginfo('charset');?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); //WP in control of whatever goes into head (like CSS/Scripts)?>
</head>
<body>
    <div class="wrapper">
    <header>
        <div class="hero">
            <div class="hero-centered-textbox">
                <h2 class="hero-text text-neutral-100 fs-primary-heading fw-bold margin-large">
                    Tasty, locally sourced, and authentically cooked ramen dishes
                </h2>
                <div class="centered_button_box">
                    <button class="hero-action-bttn text-neutral-100 fw-bold" >Make Reservation</button>
                </div>
            </div>
            <nav>
                <h1 class="logo fw-bold"><a href="<?php echo site_url();?>">SHOYU RAMEN</a></h1>
                <div class="mobile-navigation">
                    <svg class="mobile-hamburger" viewBox="0 0 100 80" width="40" height="40">
                        <rect width="70" height="10"></rect>
                        <rect y="20" width="70" height="10"></rect>
                        <rect y="40" width="70" height="10"></rect>
                    </svg>
                </div>
                <ul>
                    <li class="fw-light" ><a href="<?php echo site_url();?>">HOME</a></li>
                    <li class="fw-light"><a href="#">ABOUT</a></li>
                    <li class="fw-light"><a href="#">RESERVATION</a></li>
                    <li class="fw-light"><a href="#">HOURS & LOCATION</a></li>
                </ul>
            </nav>
            <nav>
                <div id='mobile-nav-container'>
                    <ul class='mobile-nav-list'>
                        <li class="fw-light" ><a href="<?php echo site_url();?>">HOME</a></li>
                        <li class="fw-light"><a href="#">ABOUT</a></li>
                        <li class="fw-light"><a href="#">RESERVATION</a></li>
                        <li class="fw-light"><a href="#">HOURS & LOCATION</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    