<?php
get_header();
?>
<!-- Header Area Start -->
<section class="breadcumb-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <?php
            get_template_part('/template-parts/page-breadcumb');
            ?>
         </div>
      </div>
   </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row">
         <?php
         while (have_posts()) {
            the_post();
         ?>
            <div class="col-md-4">
               <div class="single-blog">
                  <?php the_post_thumbnail();  ?>
                  <div class="post-content">
                     <div class="post-title">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                     </div>
                     <div class="pots-meta">
                        <ul>
                           <li><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>"><?php echo get_the_date(); ?></a></li>
                           <li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a></li>
                        </ul>
                     </div>
                     <?php the_excerpt(); ?>
                     <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         <?php
         }
         ?>
      </div>
   </div>
</section>
<!-- Latest News Area End -->
<?php
get_footer();
?>