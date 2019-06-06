<footer class="footer">


    <div class='flex container'>

        <div class='footer-desc'>
            <div>
                <p class='footer-title'>Dirty Martini Marketing Ltd</p>
            </div>

            <div class='address'>
                <p class='rw'>5 Barnfield Crescent, Exeter, EX1 1QT | 01392 911 056 <br><a
                        href='mailto:hello@dirty-martini.com'>hello@dirty-martini.com</a></p>
            </div>

            <div class='flex social-top'>
                <!-- our social contact bottom component -->
                <?php get_template_part('social-contact'); ?>
            </div>
        </div>

        <div class='tweets'>
            <?php echo do_shortcode("[rotatingtweets screen_name='DirtyMartini_UK' official_format= '1' rotation_type = 'carousel' carousel_horizontal= '1' carousel_count = '3' show_follow ='1' profile_image_size = 'bigger' ]");?>
        </div>


    </div>


    <div class="container">
        <p>Dirty Martini Marketing Ltd is a registered company in England and Wales No. 11169592</p>
    </div>



</footer>
<?php wp_footer(); ?>
</body>

</html>