<?php if( have_posts() ): while( have_posts() ): the_post();?>

<?php echo '<p class="content-p">' . get_the_content() . '</p>';?>

<?php endwhile; else: endif;?>