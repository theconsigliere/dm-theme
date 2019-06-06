<?php get_header(); ?>
<!-- container -->
<div class="page-content">
    <!-- site-content -->
    <div class="site-content">
        <!-- Video hero -->
        <?php get_template_part('video-hero'); ?>

        <!-- Welcome Section -->
        <?php get_template_part('welcome'); ?>


        <!-- recent work -->
        <?php get_template_part('recent-work'); ?>



        <!-- new breed of agency -->
        <a class='anchor' id='welcome'></a>
        <section class='welcome-block'>

            <div class="work-container">
                <h2 class='intro-text'>Welcome to a new breed of agency</h2>


                <div class='welcome-text'>
                    <p>Everything we do centres around engagement with your customers... From websites and words to
                        social media, seo and brand. We create things that get seen, heard, shared and talked about.
                        We’re customer engagement specialists – creating highly relevant, people-first experiences and
                        interactions by fusing creativity, data and technology.
                    </p>

                    <p>In our agency, we have people who specialise in each area of marketing, so we know every single
                        time, that they know the latest trends. They know what works. And how it works.
                    </p>

                    <p>If we increased your website enquiries by 359%, what would that do for your business?</p>

                </div>

            </div>
        </section>



        <!-- Our Services -->
        <a class='anchor' id='our-services'></a>
        <section class='padding'>
            <div class='client-container'>

                <h4 class='recent-h4'>Marketing moves fast. This is what we do.</h4>

                <div class="text-area">
                    <p>You have to grab the attention of your audience to survive; you can’t do things the same as
                        everyone else. We founded Dirty Martini without massive agency experience defining us or
                        influencing our decisions. Our success (and therefore our clients’ success) comes from doing
                        things differently.
                        Good ideas are a dime a dozen. Great ideas are rarer.
                    </p>
                    <p>Here are some of our most in-demand services, making a difference to our clients.</p>
                </div>


                <div class='wrappergrid'>

                    <div class="box a">
                        <div class='boxtext ma4'>
                            <h3 class='pf'>Digital</h3>
                            <p class='lh-copy p-show'>Digital Marketing brings higher levels of visibility, brand
                                awareness and traffic to your website and therefore, your business. We make SEO, PPC and
                                everything in between manageable with our digital marketing packages.</p>
                        </div>

                        <div class='overlaygrid'>
                        </div>

                        <?php echo wp_get_attachment_image(100, 'full'); ?>
                    </div>

                    <div class="box b">
                        <div class='boxtext ma4'>
                            <h3 class='pf'>Photography & Videography</h3>
                            <p class='lh-copy p-show'>Two of of the key ingredients for a successful brand image. Our
                                visual experts help your brand get noticed in a world where eye-catching pictures and
                                videos dominate the conversation.</p>
                        </div>
                        <div class='overlaygrid'></div>
                        <?php echo wp_get_attachment_image(96, 'full'); ?>
                    </div>

                    <div class="box c">
                        <div class='boxtext ma4'>
                            <h3 class='pf'>Print Design</h3>
                            <p class='lh-copy p-show'>Daring design, creative copy and striking photography, you can’t
                                beat a well-crafted bit of print. Print makes your brand sing and brings your products
                                to life. Although challenged by the growth of digital, in our eyes it is absolutely
                                still a key ingredient of the marketing mix, and it’s one of our favourites. Menus,
                                posters, brochures, business cards, leaflets, banners, direct mail… the print list goes
                                on.</p>
                        </div>
                        <div class='overlaygrid'></div>
                        <?php echo wp_get_attachment_image(99, 'full'); ?>
                    </div>


                    <div class="box d">
                        <div class='boxtext ma4'>
                            <h3 class='pf'>Websites</h3>
                            <p class='lh-copy p-show'>Cutting edge website design and development.</p>
                        </div>
                        <div class='overlaygrid'></div>
                        <?php echo wp_get_attachment_image(107, 'full'); ?>
                    </div>

                    <div class="box e">
                        <div class='boxtext ma4'>
                            <h3 class='pf'>Social Media Marketing</h3>
                            <p class='lh-copy p-show'>It’s a no brainer. As a business, engaging with your desired
                                audience via social media channels is a critical part of your digital marketing
                                strategy. Through tactical targeting and creative campaigns, our social experts can
                                build you a loyal following, improve your social engagement and increase traffic to your
                                website.</p>
                        </div>
                        <div class='overlaygrid'></div>
                        <?php echo wp_get_attachment_image(102, 'full'); ?>
                    </div>

                    <div class="box f">
                        <div class='boxtext ma4'>
                            <h3 class='pf'>Strategy</h3>
                            <p class='lh-copy p-show'>We understand customer needs. Whether you need support in
                                improving brand awareness or driving a richer experience to existing customers, our
                                holistic approach will help you develop a highly effective strategy that will pack a
                                punch and stand out from the crowd.</p>
                        </div>
                        <div class='overlaygrid'></div>
                        <?php echo wp_get_attachment_image(104, 'full'); ?>
                    </div>



                </div>
            </div>
        </section><!-- our services -->

        <!-- client logos -->
        <a class="anchor" id="clients"></a>
        <section class='client-container padding'>
            <h4 class='recent-h4'>Who we work with</h4>

            <div class="text-area">
                <p>
                    In us they trust. These are some of the businesses we help.
                    We’re lucky enough to work with some incredible people and companies.

                </p>
                <p>
                    <b>“Over 70% of our clients come from recommendations.
                        Over 60% of our clients have been with us for more than 2 years.”</b></p>

                <p>Need we say more?
                    (sometimes you just have to blow your own trumpet!)</p>
            </div>
            <div class='flex client-logo'>
                <?php echo wp_get_attachment_image(147, 'full'); ?>
                <?php echo wp_get_attachment_image(148, 'full'); ?>
                <?php echo wp_get_attachment_image(140, 'full'); ?>
                <?php echo wp_get_attachment_image(152, 'full'); ?>
            </div>
            <div class='flex client-logo'>
                <?php echo wp_get_attachment_image(150, 'full'); ?>
                <?php echo wp_get_attachment_image(151, 'full'); ?>
                <?php echo wp_get_attachment_image(137, 'full'); ?>
                <?php echo wp_get_attachment_image(139, 'full'); ?>
            </div>
            <div class='flex client-logo'>
                <?php echo wp_get_attachment_image(145, 'full'); ?>
                <?php echo wp_get_attachment_image(138, 'full'); ?>
                <?php echo wp_get_attachment_image(136, 'full'); ?>
                <?php echo wp_get_attachment_image(146, 'full'); ?>
            </div>
            <div class='flex client-logo'>
                <?php echo wp_get_attachment_image(144, 'full'); ?>
                <?php echo wp_get_attachment_image(143, 'full'); ?>
                <?php echo wp_get_attachment_image(142, 'full'); ?>
                <?php echo wp_get_attachment_image(141, 'full'); ?>
            </div>
        </section><!-- client logos end -->


        <!-- Contact Section -->
        <?php get_template_part('contact'); ?>


        <!-- Contact explore Section -->
        <?php get_template_part('contact-explore'); ?>
    </div>
    <!-- /site-content -->
</div>
<!-- /container -->

<?php get_footer(); ?>