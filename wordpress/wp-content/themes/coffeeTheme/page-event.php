<?php
get_header();
?>

<!--Grabbing the post from the wordpress database-->
<?php
   
    // these are the arguements for the weekly SPECIALS!
    $argsSP = array(
        'post_type' => 'post',
        'post_per_page' => 7,
        'orderby' => 'ID',
        'category_name' => 'special'
    );
    // ending of the arguements

    //these are the arguements for the daily Events
        $argsDaily = array(
            'post_type' => 'post',
            'post_per_page' => 2,
            'category_name' => 'event'
        );
    //end of arguements

    $weeklySP = new WP_Query($argsSP);
    $event = new WP_Query($argsDaily);
?>
<!--Ending the grabbing of the post-->

<!--Carosoul -->
<div class="carousel">
    <?php if($weeklySP -> have_posts()): while($weeklySP->have_posts()): $weeklySP->the_post(); ?>
    
    <div class="carousel-item">
    <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>"> </a>
    <a href="<?php the_permalink(); ?>"> <h4 class="center-align"><?php the_title(); ?></h4> </a>
    </div>
    
    <?php endwhile; else: echo '<p>We do not have week</p>'; endif; ?>

</div>

<!--End of Carosoul-->

<!--List of 2 Cards-->
<div class="row">
<?php if($event -> have_posts()): while($event->have_posts()): $event->the_post(); ?>
    <div class="col s12 m6 l6">
        <div class="card">
            <div class="card-image">
                <img src="<?php the_post_thumbnail_url(); ?>">
                <span class="card-title"><?php the_title(); ?></span>
            </div>
            <div class="card-content">
                <p><?php the_content(); ?></p>
            </div>
            <div class="card-action">
                <a href="<?php the_permalink(); ?>">View Event</a>
            </div>
        </div>
    </div>
    <?php endwhile; else: echo '<p>We do not have events this weekend </p>'; endif; ?>   
</div>

<!--End list of Cards-->


<?php
get_footer();
?>