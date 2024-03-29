<?php
/*
 * Template Name: Single Blog
 * Template Post Type: news
 */
?>
<?php get_header(); ?>
    <div class="page-content" id="content">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Posts loop -->
            <!-- Terug Knop -->
            <div class="single-title">
                <a href="<?php echo home_url() . $collection;?>"><div class="go-back"><i class="fas fa-chevron-circle-left"></i><span class="terug"><?php echo $back; ?></span></div></a>
            </div>

            <!-- Title -->
            <h2 class="blogtitle"><?php the_title(); ?></h2>

    <div class="row post-block" id="post-<?php the_ID(); ?>">
        <div class="col-6">
            <!-- Thumbnail -->
            <a href="<?php echo get_the_post_thumbnail_url() ?>"
               class="swipebox " rel="post-gallery-<?php the_ID(); ?>">
                <div class="single-post-thumbnail">
            <?php echo the_post_thumbnail('small'); ?>
                </div>
            </a>
            <?php echo do_shortcode( '[post_gallery]' ); ?>
            <!-- Thumbnail End -->
        </div>
        <div class="col-6">

            <!-- Subtitle -->
            <p class="post-title">
                <?php the_field('prijs'); ?>€<br>
            </p>
            <p class="single-post-subtitle">
                <?php echo $label_1; the_field('carrosserie'); ?><br>
                <?php echo $label_2; the_field('transmissie'); ?><br>
                <?php echo $label_3; the_field('kilometerstand'); ?>KM<br>
                <?php echo $label_4; the_field('bouwjaar'); ?><br>
                <?php echo $label_5; the_field('kenteken'); ?><br>

            </p>
            <!-- Content -->

        </div>
        <h2 class="blogtitle" id="slogan"><?php the_field('slogan'); ?><br></h2>
        <div class="single-content"><?php the_content(); ?></div>
    </div>



        </div>


        <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php
$content = get_the_content();
if (strlen($content) < 240) {
    echo "<style>.page-content{padding-bottom:20vmax}</style>";
}
?>





<?php get_footer(); ?>