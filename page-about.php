<?php get_header(); ?>

<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
    // Use template part to display About Page Content
        $args =  array (
            $about = get_field('about'),
            'firstrow' =>  get_field('first_row'),
            'secondrow' => get_field('second_row')
        );
        get_template_part('template-parts/content-about', null,  $args );
            ?>


<?php    } 

}?>
<?php get_footer(); ?>