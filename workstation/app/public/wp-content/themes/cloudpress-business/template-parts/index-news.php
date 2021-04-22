<?php
$cloudpress_business_home_news_title = get_theme_mod('home_news_section_title',__('Vitae Lacinia','cloudpress-business'));
$cloudpress_business_home_news_subtitle = get_theme_mod('home_news_section_discription',__('Cras Vitae Placerat','cloudpress-business'));
$cloudpress_business_home_blog_enable = get_theme_mod('latest_news_section_enable','on');
if($cloudpress_business_home_blog_enable == 'on'):?>
<section class="section-module blog" id="blog">
  <div class="container">
    <?php if(!empty($cloudpress_business_home_news_title) || !empty($cloudpress_business_home_news_subtitle)):?>
		<div class="row">
			<div class="col-md-12">
				<div class="section-header">
					<?php if(!empty($cloudpress_business_home_news_title)):?>
					<h5 class="section-subtitle"><?php echo esc_html($cloudpress_business_home_news_title);?></h5>
					<?php endif; if(!empty($cloudpress_business_home_news_subtitle)):?>
					<h2 class="section-title"><?php echo esc_html($cloudpress_business_home_news_subtitle);?></h2>
					<?php endif;?>
				</div>
			</div>
		</div>
		<?php endif;?>
  <div class="row rotate-list-view">
			<?php
      $cloudpress_business_i=0;
			$cloudpress_business_args = array( 'post_type' => 'post','post__not_in'=>get_option("sticky_posts"),'posts_per_page' => 3);
			query_posts( $cloudpress_business_args );
			if(query_posts( $cloudpress_business_args ))
			{
				while(have_posts()):the_post(); {
					if($cloudpress_business_i%2==0)
          { ?>
			        <?php if(has_post_thumbnail()){ ?>
      				<div class="col-md-4 blog-area">
      					<div class="post-thumbnail">
      						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail();?> </a>
      					</div>
      				</div>
			        <?php } ?>
      				<div class="col-md-<?php if(has_post_thumbnail()){echo 8;} else {echo 12;} ?> blog-area border-1">
      					<div class="post-content">
      						<?php if(get_theme_mod('blog_meta_section_enable',true)==true):?>
      								<div class="entry-meta">
      									<span class="entry-date"><a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date());?></time></a></span>
      									<?php $cloudpress_business_cat_list = get_the_category_list();
      									if(!empty($cloudpress_business_cat_list)) { ?>
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
					              <p><a href="<?php the_permalink(); ?>" class="more-link btn-ex-small btn-animate dark"><?php echo esc_html__('READ MORE','cloudpress-business');?></a></p>
      								</div>
      					</div>
      				</div>
  				<?php }
  				else { ?>
    				<div class="col-md-<?php if(has_post_thumbnail()){echo 8;} else {echo 12;} ?> blog-area right-blog">
    					<div class="post-content">
    						<?php if(get_theme_mod('blog_meta_section_enable',true)==true):?>
  							<div class="entry-meta">
  								<span class="entry-date"><a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date());?></time></a></span>
  								<?php $cloudpress_business_cat_list = get_the_category_list();
  								if(!empty($cloudpress_business_cat_list)) { ?>
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
									<p><a href="<?php the_permalink(); ?>" class="more-link btn-ex-small btn-animate dark"><?php echo esc_html__('READ MORE','cloudpress-business');?></a></p>
  							</div>
    					</div>
    				</div>
    				<?php if(has_post_thumbnail()) { ?>
    				<div class="col-md-4 blog-area border-1">
    					<div class="post-thumbnail">
    						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail();?> </a>
    					</div>
    				</div>
    				<?php }
  				}
  				$cloudpress_business_i++;
				}
        endwhile;
			} ?>
		</div>
      </div>
</section>
<?php endif;?>
