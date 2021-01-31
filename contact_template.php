<?php
/*
*Template Name: Contact Us
*/

get_header();
?>
<!-- Header Area Start -->
<section class="breadcumb-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <?php
            get_template_part('/template-parts/page_breadcumb');
            ?>
         </div>
      </div>
   </div>
</section>

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="row text-center">
               <?php
               $halim_options = get_option('halim-options');
               $contacts = $halim_options['contact'];
               if ($contacts) {
                  foreach ($contacts as $contact) {
               ?>
                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="<?php echo $contact['contact_icon']; ?>"></i>
                           <h4><?php echo $contact['contact_title']; ?> <span><?php echo $contact['contact_desc']; ?></span></h4>
                        </div>
                     </div>

               <?php
                  }
               }
               ?>


            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <?php
                     echo do_shortcode('[contact-form-7 id="152" title="Contact Form"]');
                     ?>
                  </div>
               </div>
               <div class="col-md-5">
                  <?php
                  $google_map = $halim_options['contact-map'];
                  if ($google_map) {
                  ?>
                     <div class="google-map">
                        <iframe src="https://maps.google.com/maps?q=<?php echo $google_map['latitude']; ?>, <?php echo $google_map['longitude']; ?>&z=15&output=embed"></iframe>
                     </div>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Contact Us Area End -->
<?php
get_footer();
?>