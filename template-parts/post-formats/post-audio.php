
<?php
$philosophy_audio_file="";
if(function_exists("the_field")){



    $philosophy_audio_file = get_field("sourelink");
}


?>


<article class="masonry__brick entry format-audio" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="<?php the_permalink();?>" class="entry__thumb-link">
           <?php the_post_thumbnail("philosophy-squuareimage");?>
        </a>
        <div class="audio-wrap">
            <audio id="player" src="<?php echo esc_url($philosophy_audio_file)?>" width="100%" height="42" controls="controls"></audio>
        </div>
    </div>

    <?php get_template_part("template-parts/common/post/posttext"); ?>

</article> <!-- end article -->