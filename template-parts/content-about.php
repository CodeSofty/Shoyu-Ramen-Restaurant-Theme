<section id="about-section">
        <div class="about-left-side flex-row col-reverse">
            <div class='image-container'>
            <picture>
                <source srcset="<?php echo $args['firstrow']['row_image']['sizes']['about-image_smll']?>" alt="interior picture of a nice restaurant" media="(min-width: 650px)">
                <source srcset="<?php echo $args['firstrow']['row_image']['sizes']['about-image_lrg']?>" alt="interior picture of a nice restaurant" media="(min-width: 300px)">
                <img src="<?php echo $args['firstrow']['row_image']['url']?>" alt="interior picture of a nice restaurant">
            </picture>

            </div>
            <div class="about-text flex-col">
                <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular"><?php $firstRowHeading = $args['firstrow']['row_heading']; echo $firstRowHeading ?></h2>
                <p><?php $firstRowText = $args['firstrow']['row_text']; echo $firstRowText ?>
                </p>
            </div>
        </div>
        <div class="about-right-side flex-row">
            <div class=" about-text flex-col">
                    <h2 class="about-heading text-neutral-900 fs-secondary-heading fw-regular"><?php $secondRowHeading = $args['secondrow']['row_heading']; echo $secondRowHeading ?></h2>
                    <p><?php $secondRowText = $args['secondrow']['row_text']; echo $secondRowText ?>
                    </p>
                </div>
                <div class='image-container'>
                    <picture>
                        <source srcset="<?php echo $args['secondrow']['row_image']['sizes']['about-image_smll']?>" alt="a close up of cooking noodles in a pan" media="(min-width: 650px)">
                        <source srcset="<?php echo $args['secondrow']['row_image']['sizes']['about-image_lrg']?>" alt="a close up of cooking noodles in a pan" media="(min-width: 300px)">
                        <img src="<?php echo $args['secondrow']['row_image']['url']?>" alt="a close up of cooking noodles in a pan">
                    </picture>
                </div>
            </div>
    </section>