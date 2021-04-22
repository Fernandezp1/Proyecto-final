<article class="post">
   <div class="post-content-detail">
    <?php 
        if((get_theme_mod('cloudpress_enable_single_post_date', true) === true) || (get_theme_mod('cloudpress_enable_single_post_category', true) === true) || (get_theme_mod('cloudpress_enable_single_post_tag', true) === true)):
        ?>
      <div class="entry-meta">
         <?php
            $cloudpress_blog_meta_sort = get_theme_mod('cloudpress_blog_meta_sort', array('blog_date', 'blog_category', 'blog_tag', 'blog_author', 'blog_commment',));
            if (!empty($cloudpress_blog_meta_sort) && is_array($cloudpress_blog_meta_sort)) :
                foreach ($cloudpress_blog_meta_sort as $cloudpress_blog_meta_sort_key => $cloudpress_blog_meta_sort_val) :
                    if (get_theme_mod('cloudpress_enable_single_post_date', true) === true):
                        if ('blog_date' === $cloudpress_blog_meta_sort_val) :
                            ?>
         <span class="entry-date">
         <a href="<?php echo esc_url(home_url('/')); ?>/<?php echo esc_html(date('Y/m', strtotime(get_the_date()))); ?>"><time><?php echo esc_html(get_the_date()); ?></time></a>
         </span>
         <?php
            endif;
            endif;
            
            if (get_theme_mod('cloudpress_enable_single_post_category', true) === true):
            if ('blog_category' === $cloudpress_blog_meta_sort_val) :
                $cat_list = get_the_category_list();
                if (!empty($cat_list)) {
                    ?>
         <span class="cat-links"><?php the_category(" "); ?></span>
         <?php
            }
            endif;
            endif;
            
            if (get_theme_mod('cloudpress_enable_single_post_tag', true) === true):
            if ('blog_tag' === $cloudpress_blog_meta_sort_val) :
            $tag_list = get_the_tag_list();
            if (!empty($tag_list)) {
                ?><span class="tag-links"><?php the_tags('', '', ''); ?></span><?php
            }
            endif;
            endif;
            endforeach;
            endif;
            ?>
      </div>
       <?php endif;?> 
      <header class="entry-header">
         <h3 class="entry-title"><?php the_title(); ?></h3>
      </header>
   </div>

   <?php if (has_post_thumbnail()) { ?>
   <figure class="post-thumbnail">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>                       
   </figure>
   <?php } ?>
   <div class="post-content <?php if (!has_post_thumbnail()) { echo 'featured';} ?>">
      <div class="entry-content">
         <?php the_content(); ?>
         <?php  wp_link_pages(); ?>
      </div>
   </div>
</article>