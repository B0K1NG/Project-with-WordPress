
<link media="all" rel="stylesheet" type="text/css" href="<?php
bloginfo('stylesheet_url'); ?>" />

<article class="post">
<?php if (have_posts()) :?>
<?php while (have_posts()) : the_post();?> 

<h2 class=""><a href="<?php the_permalink() ?>" rel="bookmark"
title="Permanent Link to <?php the_title_attribute(); ?>"><?php
the_title();?></a></h2>

 <p class="entry-meta">by Author Name for <a href="#">Column
Type</a></p>
 <div class="entry-content"><!--//post-->
 <?php the_content();?>
 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque
sagittis metus. In euismod tellus id ante.</p>
<p class="left"><a class="more" href="<?php the_permalink()
?>">Read more &raquo;</a></p>
 <blockquote class="left margin-right third bg-dark2 imgquote-dark bdr rnd rnd-right shdw-centered">Lorem ipsum dolor
sit amet, consectetuer adipiscing elit.</blockquote>
 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
elit. Sed a eros nec orci volutpat vestibulum. Ut pellentesque
sagittis metus. In euismod tellus id ante.</p>
 </div><!--//.entry-content-->
 <p class="left"><a class="more" href="#">Read more
&raquo;</a></p>
 <p class="right"><a class="comments-count"
href="#">150</a></p>
 <div class="push"></div>
 <?php endwhile; ?>
<?php else : ?>
 <h2 class="center">Not Found</h2>
 <p class="center">Sorry, but you are looking for
something that isn't here.</p>
 <?php get_search_form(); ?>
<?php endif; ?>
</article>