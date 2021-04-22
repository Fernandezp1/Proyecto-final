<?php
   $home_news_title=get_theme_mod('home_news_section_title',__('Latest News','cloudpress'));
   $home_news_subtitle=get_theme_mod('home_news_section_discription',__('From Our Blog','cloudpress'));
   $home_blog_enable=get_theme_mod('latest_news_section_enable','on');
   if($home_blog_enable=="on"):
   ?>
<section class="section-module blog" id="blog">
   <div class="container-fluid">
      <?php if(!empty($home_news_title) || !empty($home_news_subtitle)):?>
      <div class="row">
         <div class="col-md-12">
            <div class="section-header">
               <?php if(!empty($home_news_title)):?>
               <h5 class="section-subtitle"><?php echo esc_html($home_news_title);?></h5>
               <?php endif; if(!empty($home_news_subtitle)):?>
               <h2 class="section-title"><?php echo esc_html($home_news_subtitle);?></h2>
               <?php endif;?>    
            </div>
         </div>
      </div>
      <?php endif;?>
      <div class="row">
            <?php
               $args = array( 'post_type' => 'post','post__not_in'=>get_option("sticky_posts"),'posts_per_page' => 3) ;    
               query_posts( $args );
               if(query_posts( $args ))
               {
               while(have_posts()):the_post();
               { ?>
            <div class="col-md-4">
               <article class="post">
                  <?php if(has_post_thumbnail()){ ?>                    
                  <figure class="post-thumbnail">
                     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                  </figure>
                  <?php } ?>
                  <div class="post-content">
                     <?php if(get_theme_mod('blog_meta_section_enable',true)==true):?>
                     <div class="entry-meta">
                        <span class="entry-date"><a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date());?></time></a></span>
                        <?php $cat_list = get_the_category_list();
                           if(!empty($cat_list)) { ?>
                        <span class="cat-links"><?php the_category(' '); ?></span>
                        <?php }
                           if(has_tag()):?>
                        <span class="tag-links"><?php the_tags('',' ');?></span>
                        <?php endif;?>
                     </div>
                     <?php endif;?>
                     <header class="entry-header">
                        <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                     </header>
                     <div class="entry-content">
                        <?php the_excerpt();?>
                        <p><a href="<?php the_permalink(); ?>" class="more-link btn-ex-small btn-animate border"><?php echo esc_html__('READ MORE','cloudpress');?></a></p>
                     </div>
                  </div>
               </article>
            </div>
            <?php  } endwhile; }?>        
      </div>
   </div>
</section>
<?php endif;?>