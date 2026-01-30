    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section footer-about">
                    <h4><?php esc_html_e('About WeCare', 'wecare'); ?></h4>
                    <p><?php esc_html_e('WeCare provides compassionate, culturally responsive care services in the greater St. Cloud, Minnesota area. We are committed to helping individuals lead complete and independent lives.', 'wecare'); ?></p>
                </div>

                <div class="footer-section footer-services">
                    <h4><?php esc_html_e('Our Services', 'wecare'); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/behavioral-health')); ?>"><?php esc_html_e('ARMHS', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/adult-day')); ?>"><?php esc_html_e('Adult Day Services', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/outpatient-therapy')); ?>"><?php esc_html_e('Outpatient Therapy', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/cfss')); ?>"><?php esc_html_e('CFSS', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>"><?php esc_html_e('MNSure Navigator', 'wecare'); ?></a></li>
                    </ul>
                </div>

                <div class="footer-section footer-links">
                    <h4><?php esc_html_e('Quick Links', 'wecare'); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>"><?php esc_html_e('About Us', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/referrals')); ?>"><?php esc_html_e('Referrals', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/careers')); ?>"><?php esc_html_e('Careers', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact Us', 'wecare'); ?></a></li>
                    </ul>
                </div>

                <div class="footer-section footer-contact">
                    <h4><?php esc_html_e('Contact Info', 'wecare'); ?></h4>
                    <p><?php esc_html_e('136 Division Street', 'wecare'); ?><br>
                    <?php esc_html_e('Waite Park, MN 56387', 'wecare'); ?></p>
                    <div class="footer-contact-info">
                        <a href="tel:3202814449">📞 (320) 281-4449</a>
                        <a href="mailto:info@wecaremn.com">✉️ info@wecaremn.com</a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-links">
                <a href="<?php echo esc_url(home_url('/privacy')); ?>"><?php esc_html_e('Data Privacy Notice', 'wecare'); ?></a>
                <span class="separator">|</span>
                <a href="<?php echo esc_url(home_url('/non-discrimination')); ?>"><?php esc_html_e('Non-Discrimination Notice', 'wecare'); ?></a>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> WeCare. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
