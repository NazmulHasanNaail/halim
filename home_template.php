<?php
/*
*Template Name: Home
*/
get_header();
?>
<!-- Slider Area Start -->
<section class="slider-area" id="home">
   <div class="slider owl-carousel">
      <?php
      $arg = array(
         'post_type' => 'sliders',
         'posts_per_page' => 3,
      );

      $query = new WP_Query($arg);
      while ($query->have_posts()) {
         $query->the_post();
         $sub_heading = get_field('sub_heading');
         $sub_text = get_field('btn_text');
         $sub_link = get_field('btn_link');
      ?>
         <div class="single-slide" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="slide-table">
                        <div class="slide-tablecell">
                           <h4><?php echo $sub_heading; ?></h4>
                           <h2><?php the_title(); ?></h2>
                           <?php the_content();

                           if ($sub_text) {
                           ?>
                              <a href="<?php echo $sub_link; ?>" class="box-btn"><?php echo $sub_text;  ?> <i class="fa fa-angle-double-right"></i></a>
                           <?php
                           }
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <?php
      }
      wp_reset_postdata();
      ?>
   </div>
</section>
<!-- Slider Area Start -->
<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <?php
            $halim_options = get_option('halim-options');
            ?>
            <h3><span><?php echo $halim_options['about_heading_sub_title']; ?></span> <?php echo $halim_options['about_heading_title']; ?></h3>
         </div>
         <div class="col-md-6">
            <p><?php echo $halim_options['about_heading_description']; ?></p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-7">
            <div class="about">
               <div class="page-title">
                  <h4><?php echo $halim_options['about_content_title']; ?></h4>
               </div>
               <p><?php echo $halim_options['about_content_desc']; ?></p>
               <a href="<?php echo $halim_options['about_page_link']; ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
            </div>
         </div>
         <div class="col-md-5">
            <?php
            $features = $halim_options['about_features'];
            if ($features) {
               foreach ($features as $feature) {
            ?>
                  <div class="single_about">
                     <i class="<?php echo $feature['about_feature_icon'];  ?>"></i>
                     <h4><?php echo $feature['about_features_title'];  ?></h4>
                     <p><?php echo $feature['about_featurs_desc'];  ?></p>
                  </div>
            <?php
               }
            }
            ?>
         </div>
      </div>
   </div>
</section>
<!-- About Area End -->
<!-- Choose Area End -->
<section class="choose">
   <div class="container">
      <div class="row pt-100 pb-100">
         <div class="col-md-6">
            <div class="faq">
               <div class="page-title">
                  <h4>faq</h4>
               </div>
               <div class="accordion" id="accordionExample">

                  <?php
                  $fAQS = $halim_options['about_faq'];
                  $i = 0;
                  if ($fAQS) {
                     foreach ($fAQS as $fAQ) {
                        $i++
                  ?>
                        <div class="card">
                           <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $i ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $fAQ['about_faq_title']; ?>
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseOne<?php echo $i ?>" class="collapse<?php if ($i == 1) {
                                                                                    echo 'show';
                                                                                 }  ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                 <?php echo $fAQ['about_faq_desc']; ?>
                              </div>
                           </div>
                        </div>
                  <?php
                     }
                  }
                  ?>

               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="skills">
               <div class="page-title">
                  <h4>our skills</h4>
               </div>
               <?php
               $skills = $halim_options['about_skill'];
               if ($skills) {
                  foreach ($skills as $skill) {
               ?>
                     <div class="single-skill">
                        <h4><?php echo $skill['about_skill_title']; ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $skill['about_skill_number']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill['about_skill_number']; ?>%</div>
                     </div>

               <?php
                  }
               }
               ?>

            </div>
         </div>
      </div>
   </div>
</section>
<!-- Choose Area End -->
<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <h3><span>who we are?</span> our services</h3>
         </div>
         <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
         </div>
      </div>
      <div class="row">
         <?php
         $arg = array(
            'post_type' => 'Services',
            'posts_per_page' => 6,
         );
         $query = new WP_Query($arg);
         while ($query->have_posts()) {
            $query->the_post();
            $icon = get_field('services_icon');
         ?>
            <div class="col-lg-4 col-md-6">
               <!-- Single Service -->
               <div class="single-service">
                  <i class="<?php echo $icon; ?>"></i>
                  <h4><?php the_title(); ?></h4>
                  <?php the_content();  ?>
               </div>
            </div>

         <?php
         }
         wp_reset_postdata();
         ?>
      </div>
   </div>
</section>
<!-- Services Area End -->

<!-- Counter Area End -->
<section class="counter-area">
   <div class="container-fluid">
      <div class="row">
         <?php
         $skills = $halim_options['Counter'];
         if ($skills) {
            foreach ($skills as $skill) {
         ?>
               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php echo $skill['counter_icon']; ?>"></i><span class="counter"><?php echo $skill['counter_number']; ?></span><?php echo $skill['counter_title']; ?></span></h4>
                  </div>
               </div>
         <?php
            }
         }
         ?>


      </div>
   </div>
</section>
<!-- Counter Area End -->
<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <h3><span>who we are?</span> creative team</h3>
         </div>
         <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
         </div>
      </div>
      <div class="row">

         <?php
         $arg = array(
            'post_type' => 'teams',
            'posts_per_page' => 3,
            'orderby' => 'menu_order',
            'order' => 'ASC'

         );
         $query = new WP_Query($arg);
         while ($query->have_posts()) {
            $query->the_post();

            $facebook = get_field('facebook');
            $twitter = get_field('twitter');
            $linkdin = get_field('linkdin');
            $google_plus = get_field('google_plus');

         ?>
            <div class="col-md-4">
               <div class="single-team">
                  <?php the_post_thumbnail();  ?>
                  <div class="team-hover">
                     <div class="team-content">
                        <h4><?php the_title(); ?> <span><?php the_content();  ?></span></h4>
                        <ul>
                           <?php
                           if ($facebook) {
                           ?>
                              <li><a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a></li>
                           <?php
                           }

                           if ($twitter) {
                           ?>
                              <li><a href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a></li>
                           <?php
                           }

                           if ($linkdin) {
                           ?>
                              <li><a href="<?php echo $linkdin ?>"><i class="fa fa-linkedin"></i></a></li>
                           <?php
                           }

                           if ($google_plus) {
                           ?>
                              <li><a href="<?php echo $google_plus ?>"><i class="fa fa-google-plus"></i></a></li>
                           <?php
                           }
                           ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         <?php
         }
         wp_reset_postdata();
         ?>
      </div>
   </div>
</section>
<!-- Team Area End -->

<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
   <div class="container">
      <div class="row section-title white-section">
         <div class="col-md-6 text-right">
            <h3><span>who we are?</span> what client say</h3>
         </div>
         <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="testimonials owl-carousel">

               <?php
               $arg = array(
                  'post_type' => 'testimonials',
               );
               $query = new WP_Query($arg);
               while ($query->have_posts()) {
                  $query->the_post();

                  $name = get_field('name');
                  $description = get_field('description');
                  $designation = get_field('designation');
               ?>
                  <div class="single-testimonial">
                     <div class="testi-img">
                        <?php the_post_thumbnail(); ?>
                     </div>
                     <p><?php echo $description; ?></p>
                     <h4><?php echo $name; ?> <span><?php echo $designation; ?></span></h4>
                  </div>

               <?php
               }
               wp_reset_postdata();
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Testimonilas Area End -->
<!-- Latest News Area Start -->
<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <h3><span>who we are?</span> latest news</h3>
         </div>
         <div class="col-md-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
         </div>
      </div>
      <div class="row">
         <?php
         $arg = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
         );

         $query = new WP_Query($arg);
         while ($query->have_posts()) {
            $query->the_post();
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