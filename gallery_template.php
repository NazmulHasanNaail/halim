<?php
/*
*Template Name: Gallery
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

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <?php
            $arg = array(
                'post_type'=>'gallery',
                'post_per_page'=>-1,
            );
            $query = new WP_Query($arg);
            while($query->have_posts()){
                $query->the_post();

                $img = get_field('gallery_img');
            ?>
            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php echo $img['url'];  ?>" alt="<?php the_title(); ?>">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php echo $img['url'];  ?>" class="gallery"><i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
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
<?php
get_footer();
?>