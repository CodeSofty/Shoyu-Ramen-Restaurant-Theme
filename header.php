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
    <h1 class="logo"><a href="#">SHOYU RAMEN</a></h1>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">RESERVATION</a></li>
                <li><a href="#">HOURS & LOCATION</a></li>
            </ul>
        </nav>
    </header>