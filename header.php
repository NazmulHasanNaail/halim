<!DOCTYPE html>
<html lang="en">
<?php
$halim_options = get_option('halim-options');
$fav_icon = $halim_options['fav_icon'];
?>
<head>
   <meta charset="utf-8">
   <link rel="shortcut icon" href="<?php echo $fav_icon['url']; ?>" type="image/x-icon">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php
   wp_head();
   ?>
</head>

<body>
   <section class="header-top">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="header-left">
                  <?php
                  
                  if ($halim_options['header-email']) {
                  ?>
                     <a href="mailto:<?php echo $halim_options['header-email']; ?>"><i class="fa fa-envelope"></i> <?php echo $halim_options['header-email']; ?></a>
                  <?php
                  }
                  ?>
                  <?php
                  if ($halim_options['header-phone']) {
                  ?>
                     <a href="tel: <?php echo $halim_options['header-phone']; ?>"><i class="fa fa-phone"></i> <?php echo $halim_options['header-phone']; ?></a>
                  <?php
                  }
                  ?>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
               <div class="header-social">
                  <?php
                  $socials = $halim_options['header_social_links'];
                  if ($socials) {
                     foreach ($socials  as $social) {
                  ?>
                        <a href="<?php echo $social['header_social_link']; ?>"><i class="<?php echo $social['header_social_icon']; ?>"></i></a>
                  <?php
                     }
                  }
                  ?>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Header Area Start -->
   <header class="header header-fixed">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <nav class="navbar navbar-expand-md navbar-light">
                  <?php
                  $logo = $halim_options['logo'];
                  if ($logo['url']) {
                  ?>
                     <a class="navbar-brand" href="<?php echo site_url();  ?>">
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['url']; ?>">
                     </a>
                  <?php
                  } else {
                  ?>
                     <a class="navbar-brand" href="<?php echo site_url();  ?>">Halim</a>
                  <?php
                  }
                  ?>

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                     <?php
                     wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'navbar-nav ml-auto',
                     ));
                     ?>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!-- Header Area Start -->