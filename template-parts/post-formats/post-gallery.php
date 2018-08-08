<article class="masonry__brick entry format-gallery" data-aos="fade-up">

    <div class="entry__thumb slider">
        <div class="slider__slides">

            <?php $all_slides = get_post_meta(get_the_ID(),'_philosophy_image_gallery', true);

            foreach ($all_slides as $single_slides):


            ?>

            <div class="slider__slide">
                <img src="<?php echo esc_url($single_slides)?>" alt="">
            </div>

            <?php endforeach; ?>

        </div>
    </div>

    <?php get_template_part("template-parts/common/post/posttext"); ?>

</article> <!-- end article -->