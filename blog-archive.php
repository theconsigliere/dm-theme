<?php
/**
 * Template Name: Blog Archive
 */
get_header('new');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main mt">

        <div>

            <?php
				// organise our options into a data object
				$args = array(
					'orderby' => 'date',
					'posts_per_page' => 1
					
				);
				// a variable with our query and options
				$query = new WP_Query( $args );
				// do a loop with our new query code 
				if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
            <!-- code as we’re used to already! -->
            <div class='blog-relative'>
                <a href="<?php the_permalink(); ?>" class="">
                    <?php if( get_field('blog-image') ): ?>
                    <img src="<?php the_field('blog-image'); ?>" class='' />
                    <?php endif; ?>

                    <div class='info-box container'>
                        <h3 class=''><?php echo get_the_title( ); ?></h3>
                        <p class=''>Written by</p>
                        <h6 class=''><?php the_field('author_name'); ?></h6>

                    </div>
            </div>

            </a>
            <?php endwhile; endif; ?>


            <section>

                <div class="container">
                    <h4 class='recent-h4'>Our Blogs</h2>

                        <div class="blog-section">

                            <?php
		// organise our options into a data object
		$args = array(
		'posts_per_page' => -1,
		'orderby' => 'date',
		// here we make sure to exclude the current 
		// post we’re looking at
		'post__not_in' => array($post->ID)
		);
		// a variable with our query and options
		$query = new WP_Query( $args );
		// do a loop with our new query code 
		if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                            <!-- code as we’re used to already! -->
                            <a href="<?php the_permalink(); ?>" class="blog-archive-item">
                                <!-- here we create a 1x1 aspect ratio box -->
                                <div>
                                    <!-- our inner element takes up the full width and height -->
                                    <?php if( get_field('blog-image') ): ?>
                                    <img src="<?php the_field('blog-image'); ?>" class='w-100' />
                                    <?php endif; ?>

                                    <div class="blog-archive-item-group">
                                        <!-- our inner element takes up the full width and height -->
                                        <div><?php if( get_field('author_picture') ): ?>
                                            <img src="<?php the_field('author_picture'); ?>" class='author-blog' />
                                            <?php endif; ?></div>
                                        <div class='blog-archive-group'>
                                            <h5><?php the_title(); ?></h5>
                                            <p class='pf ma0'><?php the_field('author_name'); ?></p>
                                        </div>
                                    </div>

                                </div>

                            </a>
                            <?php endwhile; endif; ?>

                        </div>

                </div>
            </section>



        </div><!-- container mt7 -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();