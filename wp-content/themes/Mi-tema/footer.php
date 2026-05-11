    <!-- Footer -->
    <footer class="footer" style="padding: 4rem 0 3rem 0; background-color: var(--forest-green); color: var(--white);">
        <div class="container">
            <div class="footer-content" style="display: flex; flex-direction: column; align-items: center; gap: 1.5rem; text-align: center;">
                <div class="footer-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">EL PATIO <span>ANTIGUO</span></a>
                </div>
                <div class="social-links" style="display: flex; gap: 1.5rem;">
                    <a href="https://www.instagram.com/elpatioantiguo_/" target="_blank" style="width: 45px; height: 45px; border: 1px solid rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/elpatioantiguomarbella" target="_blank" style="width: 45px; height: 45px; border: 1px solid rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.tripadvisor.es/Restaurant_Review-g187439-d23825835-Reviews-El_Patio_Antiguo-Marbella_Costa_del_Sol_Province_of_Malaga_Andalusia.html" target="_blank" style="width: 45px; height: 45px; border: 1px solid rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;"><i class="fa-brands fa-tripadvisor"></i></a>
                </div>
                <div class="footer-credits" style="opacity: 0.8;">
                    <p>&copy; <?php echo date('Y'); ?> El Patio Antiguo. Marbella.</p>
                </div>
                <div class="footer-legal" style="font-size: 0.8rem; opacity: 0.6;">
                    <a href="<?php echo esc_url(home_url('/aviso-legal')); ?>" style="color: white; margin: 0 5px;">Aviso Legal</a> | 
                    <a href="<?php echo esc_url(home_url('/politica-de-privacidad')); ?>" style="color: white; margin: 0 5px;">Privacidad</a> | 
                    <a href="<?php echo esc_url(home_url('/politica-de-cookies')); ?>" style="color: white; margin: 0 5px;">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
