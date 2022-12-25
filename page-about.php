
<?php get_header(); ?>

<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        $firstRow =  get_field('first_row');
        $secondRow = get_field('second_row');
            ?>
<section id="about-section">
        <div class="about-left-side flex-row col-reverse">
            <div class='image-container'>
            <picture>
                <source srcset="<?php echo $firstRow['row_image']['sizes']['about-image_smll']?>" alt="interior picture of a nice restaurant" media="(min-width: 650px)">
                <source srcset="<?php echo $firstRow['row_image']['sizes']['about-image_lrg']?>" alt="interior picture of a nice restaurant" media="(min-width: 300px)">
                <img src="<?php echo $firstRow['row_image']['url']?>" alt="interior picture of a nice restaurant">
            </picture>
            </div>
            <div class="about-text flex-col">
                <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular"><?php echo $firstRow['row_heading']?></h2>
                <p>
                <?php echo $firstRow['row_text']?>
                </p>
            </div>
        </div>
        <div class="about-right-side flex-row">
            <div class=" about-text flex-col">
            <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular"><?php echo $secondRow['row_heading']?></h2>
                    <p>
                    <?php echo $secondRow['row_text']?>
                    </p>
                </div>
                <div class='image-container'>
                <picture>
                    <source srcset="<?php echo $secondRow['row_image']['sizes']['about-image_smll']?>" alt="interior picture of a nice restaurant" media="(min-width: 650px)">
                    <source srcset="<?php echo $secondRow['row_image']['sizes']['about-image_lrg']?>" alt="interior picture of a nice restaurant" media="(min-width: 300px)">
                    <img src="<?php echo $secondRow['row_image']['url']?>" alt="interior picture of a nice restaurant">
                </picture>
                </div>
            </div>
    </section>

<?php    } 

}?>
<?php get_footer(); ?>