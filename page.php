<?php get_header();?>

    <section id="page-title">
        <div class="container clearfix">
            <h1><?php single_post_title(); ?></h1>
            <span>
                <?php if(function_exists('the_subtitle')) : ?>
                    <?php the_subtitle(); ?>
                <?php endif; ?>
            </span>
        </div>
    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
          ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                        <?php while (have_posts()): the_post();?>

		                            <?php

                                    global $post;
                                    $author_ID = $post->post_author;
                                    $author_URL = get_author_posts_url($author_ID);

                                    ?>

		                            <div class="single-post nobottommargin">

		                                <!-- Single Post
		                            ============================================= -->
		                                <div class="entry clearfix">

		                                    <!-- Entry Image
                                            ============================================= -->
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="entry-image">
                                                    <a href="<?php the_permalink();?>">
                                                        <?php the_post_thumbnail('full');?>
                                                    </a>
                                                </div>
                                            <?php endif;?><!-- .entry-image end -->

                                    <!-- Entry Content
                                ============================================= -->
                                        <div class="entry-content notopmargin">

                                        <?php the_content();?>
                                        <?php

                                            $defaults = array(
                                                'before' => '<p class="text-center">' . __('Pages:', 'wp_dev_theme'),
                                                'after' => '</p>',
                                            );
                                            wp_link_pages($defaults);

                                            ?>
                                    </div><!-- Post Single - Content End -->
                                </div><!-- .entry end -->

                                </div>

                                <?php

                                if (comments_open() || get_comments_number()) {
                                    comments_template();
                                }

                                ?>

                            <?php endwhile;?>

                                </div><!-- .postcontent end -->

                                <?php get_sidebar();?>

                                </div>

                            </div>

                        </section><!-- #content end -->

                        <?php get_footer();?>