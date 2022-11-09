<!-- Footer here  --> 

<Footer>
    <div class='col-1'>
        <h3 class="logo fw-bold"><a class="text-accent-800" href="#">SHOYU RAMEN</a></h3>
        <div class="textbox"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Possimus accusantium quos.
        </div>
    </div>

    <div class="col-1" id="location">
        <h3 class="text-accent-800 fw-bold">Business Hours </h3>
        <div class="footer_hours"> 
            <div class="footer_hours_leftside">
                Monday - Friday</br>
                Saturday</br>
                Sunday 
            </div>

            <div class="footer_hours_rightside">
                09:00 - 22:00 </br>
                11:00 - 00:00 </br>
                11:00 - 23:00
            </div>
        </div>
    </div>

        <div class="col-1">
            <h3 class="text-accent-800 fw-bold">Contact Us</h3>
            <address>
                26985 Brighton Lane </br>
                Lake Forest, CA 92630
            </address>
            <div>(444) 444-4444</div>
            <div class="social-icons">
                <a href="#"> <div class='social-icon_container'><img src="<?php echo get_template_directory_uri();?>/images/facebook-icon.svg"></div></a>
                <a href="#"> <div class='social-icon_container'><img src="<?php echo get_template_directory_uri();?>/images/twitter-icon.svg"></div></a>
                <a href="#"> <div class='social-icon_container'><img src="<?php echo get_template_directory_uri();?>/images/instagram-icon.svg"></div></a>
            </div>
        </div>
    </div>
</Footer>
</div> <!--  Wrapper div closing tag -->
<?php wp_footer();?>
</body>
</html>