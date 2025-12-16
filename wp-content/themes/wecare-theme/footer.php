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
                        <li><a href="<?php echo esc_url(home_url('/services/behavioral-health')); ?>"><?php esc_html_e('Behavioral Health (ARMHS)', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/pca')); ?>"><?php esc_html_e('Personal Care Assistance', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/housing')); ?>"><?php esc_html_e('Housing Stabilization', 'wecare'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/services/outpatient-therapy')); ?>"><?php esc_html_e('Outpatient Therapy', 'wecare'); ?></a></li>
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
                    <p><?php esc_html_e('St. Cloud, Minnesota', 'wecare'); ?></p>
                    <div class="footer-contact-info">
                        <a href="tel:3202814449">📞 (320) 281-4449</a>
                        <a href="mailto:info@wecaremn.com">✉️ info@wecaremn.com</a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> WeCare Integrated Care. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
