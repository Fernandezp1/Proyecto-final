<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php if (has_post_thumbnail()) { ?>
   <figure class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
      </a>                        
   </figure>
   <?php
      }
      ?>  
   <div class="post-content">  
    <?php do_action('cloudpress_blog_meta_contents');?>                                                  
      <header class="entry-header">
         <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      </header>
      <div class="entry-content">
         <?php the_excerpt(); ?>
         <p>
            <a href="<?php the_permalink();?>" class="more-link btn-ex-small btn-animate dark"><?php echo esc_html__('READ MORE','cloudpress'); ?></a>
         </p>
       
      </div>
   </div>
</article>