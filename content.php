<?php the_post(  ); ?>
<h3><?php the_title();?></h3>
<p>Post Format: <?php echo get_post_format() ?></p>
<div class="thumbnail img"><?php the_post_thumbnail('thumbnail') ?></div> <?php  // options: 'large'?>
<small>Posted on <?php the_time('F j, Y'); ?> at <?php the_time( 'g:i a' )?>, in <?php the_category();?></small>
<p><?php the_content( )?></p>
<hr>
