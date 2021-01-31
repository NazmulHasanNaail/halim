   <!-- CTA Area Start -->
   <?php
   $halim_options = get_option('halim-options');

   $cta_switcher = $halim_options['cta-switcher'];
   if ($cta_switcher) {
   ?>
      <section class="cta">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h4><?php echo $halim_options['cta_title']; ?> <span><?php echo $halim_options['cta_desc']; ?></span></h4>
               </div>
               <div class="col-md-6 text-center">
                  <a href="<?php echo $halim_options['button_link']; ?>" class="box-btn"><?php echo $halim_options['button_text']; ?><i class="fa fa-angle-double-right"></i></a>
               </div>
            </div>
         </div>
      </section>
   <?php
   }
   ?>

   <!-- CTA Area End -->
   <!-- Footer Area End -->
   <footer class="footer-area pt-50 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <?php
               if (is_active_sidebar('footer-widget-1')) {
                  dynamic_sidebar('footer-widget-1');
               }
               ?>
            </div>

            <div class="col-lg-2 col-md-6">
               <?php
               if (is_active_sidebar('footer-widget-2')) {
                  dynamic_sidebar('footer-widget-2');
               }
               ?>
            </div>

            <div class="col-lg-4 col-md-6">
               <?php
               if (is_active_sidebar('footer-widget-3')) {
                  dynamic_sidebar('footer-widget-3');
               }
               ?>
            </div>
            <div class="col-lg-3 col-md-6">
               <?php
               if (is_active_sidebar('footer-widget-4')) {
                  dynamic_sidebar('footer-widget-4');
               }
               ?>
            </div>
         </div>

         <div class="row copyright">
            <div class="col-md-6">
               <?php
               $copy_switcher = $halim_options['copy-switcher'];
               if ($copy_switcher) {
               ?>
                  <p>&copy; <?php echo $halim_options['copyright_title']; ?></p>
               <?php
               }
               ?>
            </div>
            <div class="col-md-6 text-right">
               <?php
               $social_switcher = $halim_options['f-s-switcher'];
               $socila_icons = $halim_options['f-social_links'];
               if ($social_switcher and $socila_icons) {
               ?>
                  <ul>
                     <?php
                     foreach ($socila_icons as $socila_icon) {
                     ?>
                        <li><a href="<?php echo $socila_icon['f_social_link']; ?>" target="<?php echo $halim_options['f-opt-select']; ?>"><i class="<?php echo $socila_icon['f_social_icon']; ?>"></i></a></li>
                     <?php
                     }
                     ?>
                  </ul>
               <?php
               }
               ?>

            </div>
         </div>
      </div>
   </footer>
   <!-- Footer Area End -->
   <!-- Main JS -->
   <?php
   wp_footer();
   ?>
   </body>

   </html>