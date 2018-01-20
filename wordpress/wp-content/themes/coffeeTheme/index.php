<?php
get_header();
?>

<?php

    if (have_posts()) :
        while (have_posts()) : the_post(); 

            //the_content();
         get_template_part('content', get_post_format());
        
         endwhile; 
        
        else:
            echo '<p>Content Coming Soon</p>';
            
        endif; 
?>

<?php
get_footer();
?>