<?php
get_header();
?>

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

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
               <?php
               while(have_posts()){
                  the_post();
                  get_template_part('/template-parts/blog-single-content');
               }
                  
               ?>
            </div>
            <div class="col-xl-4">
                <?php
                if(is_active_sidebar('main-sidebar')){
                    dynamic_sidebar('main-sidebar');
                }
                ?>
            </div>
        </div>
    </div>
</section>

 <?php
get_footer();
 ?>