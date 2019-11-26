<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 */
?>

<?php get_header(); ?>

    <div class="container">
        <div class="block1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                <div class="block1content">
                    <?php the_content();?>
                </div>
                <a href="<?php the_permalink(); echo $about_link; ?>" class="perma-button"><?php echo $about; ?></a>
            <?php endwhile;
            else:?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
        <div class="block2">
            <div class="row footer-widget-wrapper">
                <?php
                if(is_active_sidebar('index-widget-1')){?>
                    <div class="col-4"><?php dynamic_sidebar('index-widget-1');?></div><?php
                }

                if(is_active_sidebar('index-widget-2')){?>
                    <div class="col-4"><?php dynamic_sidebar('index-widget-2');?></div><?php
                }

                if(is_active_sidebar('index-widget-3')){?>
                    <div class="col-4"><?php dynamic_sidebar('index-widget-3');?></div><?php
                }

                ?>
            </div>
        </div>







        <!--Index Post Block-->
        <div class="block3">
            <?php
            if (strpos($url,'/en/') !== false) {
                $category_id = 46;
            }else{
                $category_id = 3;
            }
            ?>
            <a href="<?php the_permalink(); ?>/blog/#content"><h2 class="cat-name"><?php echo get_cat_name( $category_id );?> </h2></a>
            <h3 class="cat-description"><?php echo $recent_cars;?></h3>
            <?php


            $catquery = new WP_Query( 'cat='. $category_id . '&posts_per_page=2' );

            if ( $catquery->have_posts() ) :
                while($catquery->have_posts()) : $catquery->the_post();
                           ?>

                    <?php if ($catquery->current_post % 2 == 0): ?>
<!--                        Post Content Start-->
                        <div class="row post-block" id="post-<?php the_ID(); ?>">
                            <div class="col-6">
<!--                                 Title-->
                                <a href="<?php the_permalink(); ?>#content"> <h4 class="post-title"><?php the_title(); ?></h4></a>
                                <a href="<?php the_permalink(); ?>#content">
                                    <p class="post-subtitle">
                                        <?php echo $label_1; the_field('carrosserie'); ?><br>
                                        <?php echo $label_2; the_field('transmissie'); ?><br>
                                        <?php echo $label_3; the_field('kilometerstand'); ?>KM<br>
                                        <?php echo $label_4; the_field('bouwjaar'); ?><br>
                                        <?php echo $label_5; the_field('kenteken'); ?><br>
                                        <?php echo $label_6; the_field('prijs'); ?>€<br>
                                    </p>
                                </a>
                                <a href="<?php the_permalink(); ?>#content" class="single-button">Bekijk</a>
                            </div>
                            <div class="col-6">
<!--                                 Thumbnail-->
                                <a href="<?php the_permalink(); ?>#content"><div class="post-thumbnail"><?php the_post_thumbnail('medium_large'); ?></div></a>
<!--                                 Thumbnail End-->
                            </div>
                        </div>
<!--                        Post Content End-->
                    <?php else: ?>
                            <div class="row post-block" id="post-<?php the_ID(); ?>">
                                <div class="col-6">
<!--                                     Thumbnail-->
                                    <a href="<?php the_permalink(); ?>#content"><div class="post-thumbnail"><?php the_post_thumbnail('medium_large'); ?></div></a>
<!--                                     Thumbnail End-->
                                </div>
                                <div class="col-6">
<!--                                     Title-->
                                    <a href="<?php the_permalink(); ?>#content"><h4 class="post-title"><?php the_title(); ?></h4></a>
                                    <a href="<?php the_permalink(); ?>#content">
                                        <p class="post-subtitle">
                                            <?php echo $label_1; the_field('carrosserie'); ?><br>
                                            <?php echo $label_2; the_field('transmissie'); ?><br>
                                            <?php echo $label_3; the_field('kilometerstand'); ?><br>
                                            <?php echo $label_4; the_field('bouwjaar'); ?><br>
                                            <?php echo $label_5; the_field('kenteken'); ?><br>
                                            <?php echo $label_6; the_field('prijs'); ?>€<br>
                                        </p>
                                    </a>
                                    <a href="<?php the_permalink(); ?>#content" class="single-button">Bekijk</a>
                                </div>
                            </div>
<!--                            Post Content End-->

                            <?php

                            endif;?>
                <?php
                endwhile;?>
                <a href="<?php the_permalink(); echo $collection?>" class="more-posts"><?php echo $morecars; ?></a>
            <?php
            else:
                echo '<h4 id="results">' . $nocurrentresults . '</h4>';
            endif; ?>
            <?php wp_reset_query(); // reset the query ?>
        </div>
<!--Container End-->





    </div>




<?php get_footer(); ?>