<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nomadsun
 */
get_header('new');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main mt">

        <!-- hero image for post -->
        <div class='blog-header-image'>
            <?php if( get_field('blog-image') ): ?>
            <img src="<?php the_field('blog-image'); ?>" class='w-100' />
            <?php endif; ?>
        </div><!-- container mt7 -->


        <section class='blog-post-template container'>

            <div class='author'>
                <div class="author-pic-text">
                    <div class='author-pic'>
                        <?php if( get_field('author_picture') ): ?>
                        <img src="<?php the_field('author_picture'); ?>" class='author-picture' />
                        <?php endif; ?>

                    </div>


                    <div class='author-text'>
                        <p>Written by</p>
                        <h3><?php the_field('author_name'); ?></h3>
                        <p>Date</p>
                        <h5 class=''><?php the_field('date'); ?></h5>
                    </div>
                </div>

                <div class="author-quote">
                    <h5 class=''><?php the_field('quote'); ?></h5>
                </div>
            </div>


            <!-- text for blog post -->
            <div class=' blog-post-post'>
                <h2 class='pf mt0'><?php echo get_the_title( ); ?></h2>

                <p><?php the_field('text_field'); ?></p>


            </div>

        </section>


        <!-- here we include our explore component -->
        <?php get_template_part( 'contact-explore' ); ?>






    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();