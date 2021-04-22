<?php
   /**
    * The default template for displaying content
    */
   ?>
<article class="page-content" id="post-<?php the_ID(); ?>">
   <?php 
      if(has_post_thumbnail())
      {
      	if ( is_single() ) 
      	{
      		the_post_thumbnail( '', array( 'class'=>'img-responsive','alt' => get_the_title() ) );
      	}
      	else
      	{
      		echo '<figure class="post-thumbnail" href="'.esc_url(get_the_permalink()).'">';
      		the_post_thumbnail( '', array( 'class'=>'img-responsive','alt' => get_the_title() ) );
      		echo '</figure>';
      	}
      }?>	
   <div class="entry-content">
      <?php the_content(); wp_link_pages(); ?>
   </div>
</article>