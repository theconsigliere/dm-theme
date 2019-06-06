<section>
    <div class="container">

        <h4 class="recent-h4">
            Check Out our Excellent Blogs
        </h4>

        <div class="contact-flex">



            <?php
// organise our options into a data object
$args = array(
'posts_per_page' => 3,
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
            <a href="<?php the_permalink(); ?>" class="blog-item">
                <!-- here we create a 1x1 aspect ratio box -->
                <div class='blog-item-group'>
                    <!-- our inner element takes up the full width and height -->
                    <div><?php if( get_field('author_picture') ): ?>
                        <img src="<?php the_field('author_picture'); ?>" class='author-blog scale' />
                        <?php endif; ?></div>
                    <div class='blog-desc'>
                        <h5><?php the_title(); ?></h5>
                        <p><?php the_field('author_name'); ?></p>
                    </div>
                </div>

            </a>
            <?php endwhile; endif; ?>

        </div>
    </div>
</section>