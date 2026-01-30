    <footer id="colophon" class="site-footer site-footer-centered">
        <div class="container">
            <!-- Logo -->
            <div class="footer-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/wecare-logo.png" alt="WeCare Logo">
                </a>
            </div>

            <!-- Services Links -->
            <nav class="footer-services-nav">
                <a href="<?php echo esc_url(home_url('/behavioral-health')); ?>">ARMHS</a>
                <span class="dot">•</span>
                <a href="<?php echo esc_url(home_url('/adult-day')); ?>">Adult Day</a>
                <span class="dot">•</span>
                <a href="<?php echo esc_url(home_url('/outpatient-therapy')); ?>">Therapy</a>
                <span class="dot">•</span>
                <a href="<?php echo esc_url(home_url('/cfss')); ?>">CFSS</a>
                <span class="dot">•</span>
                <a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>">MNSure</a>
            </nav>

            <!-- Contact Info -->
            <div class="footer-contact-line">
                <span>136 Division St, Waite Park, MN 56387</span>
                <span class="dot">•</span>
                <a href="tel:3202814449">(320) 281-4449</a>
                <span class="dot">•</span>
                <a href="mailto:info@wecaremn.com">info@wecaremn.com</a>
            </div>

            <!-- Social Icons -->
            <div class="footer-social">
                <a href="https://www.facebook.com/WeCareMinnesota/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                </a>
                <a href="https://www.instagram.com/wecare_mn/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </a>
                <a href="https://www.linkedin.com/company/wecareadultdaycareandbehavioralhealth/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                </a>
            </div>

            <!-- Divider -->
            <div class="footer-divider"></div>

            <!-- Bottom Links -->
            <div class="footer-bottom-centered">
                <a href="<?php echo esc_url(home_url('/privacy')); ?>">Privacy Notice</a>
                <span class="separator">|</span>
                <a href="<?php echo esc_url(home_url('/non-discrimination')); ?>">Non-Discrimination</a>
                <span class="separator">|</span>
                <span class="copyright">&copy; <?php echo date('Y'); ?> WeCare</span>
            </div>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
