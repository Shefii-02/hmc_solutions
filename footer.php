</main>
<!--====== Client Area End ======-->
<div class="">
    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer" style="background-color: #2f3a47; color: #fff; font-family: 'Open Sans', sans-serif;">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="row">
                        <!-- Quick Links -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <h6 class="footer-heading">Quick Links</h6>
                            <ul class="footer-links">
                                <li><i class="fas fa-angle-right"></i> <a href="#">Services</a></li>
                                <li><i class="fas fa-angle-right"></i> <a href="#">Investors</a></li>
                                <li><i class="fas fa-angle-right"></i> <a href="#">About Us</a></li>
                                <li><i class="fas fa-angle-right"></i> <a href="#">Photo Gallery</a></li>
                                <li><i class="fas fa-angle-right"></i> <a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Global Presence -->
                        <div class="col-lg-6 col-md-6 mb-4">
                            <h6 class="footer-heading">Global Presence</h6>
                            <ul class="footer-links">
                                <li><i class="fas fa-angle-right"></i> India</li>
                                <li><i class="fas fa-angle-right"></i> UAE</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social Icons at Bottom -->
                    <div class="text-start mb-3">
                        <h6 class="mb-3">Connect With Us</h6>
                        <div class="d-flex justify-content-start gap-4 flex-wrap" style="gap: 10px;">
                            <a href="https://facebook.com/" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/" class="social-icon"><i class="bi bi-instagram"></i></a>
                            <a href="https://linkedin.com/" class="social-icon"><i class="bi bi-linkedin"></i></a>
                            <a href="https://x.com/" class="social-icon"><i class="bi bi-twitter"></i></a>
                            <a href="https://youtube.com/" class="social-icon"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                </div>

                <!-- Quick Contact Form -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <!-- Map Section -->
                    <div class="map-section mt-4 mb-4" style="border: 2px solid rgba(255,255,255,0.2); overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.970561939016!2d76.02932177412285!3d10.845632557915248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7b73c80314e33%3A0x49cf3b197f4eaa49!2sHayath%20Medicare%20Hospital!5e1!3m2!1sen!2sin!4v1765985107226!5m2!1sen!2sin"
                            width="100%" height="340" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>

        <!-- Full-width Registered Section -->
        <div class="footer-bottom text-center py-3"
            style="border-top: 2px solid rgba(255,255,255,0.3); background-color: #2f3a47; color: #fff;">
            &copy; <? date('Y') ?> Hayath Group of Companies. All Rights Reserved.
        </div>


    </footer>
</div>
<!-- End of .container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/countTo.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<script src="/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
    integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // Auto-close notification banner after 5 seconds (only if it exists)
    document.addEventListener('DOMContentLoaded', function() {
        const banner = document.querySelector('.agc-site-notification-banner');
        if (banner) {
            setTimeout(agcCloseNotificationBanner, 5000);
        }
    });

    AOS.init({
        duration: 1200,
    })

    // Fix mobile menu close button for touch devices
    $(document).ready(function() {
        // Remove existing event handlers and add new ones
        $('.site-mobile-menu-close, .site-mobile-menu-close span').off('click touchstart touchend');

        // Handle both click and touch events properly
        $('.site-mobile-menu-close, .site-mobile-menu-close span').on('click touchend', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            // Close the menu
            $('body').removeClass('offcanvas-menu');
            $('.js-menu-toggle').removeClass('active');
            $('.site-menu-toggle').removeClass('active');

            return false;
        });

        // Prevent touchstart from causing double-firing
        $('.site-mobile-menu-close, .site-mobile-menu-close span').on('touchstart', function(e) {
            e.preventDefault();
        });
    });
</script>



<script>
    // GSAP SplitText is now 100% FREE (as of April 30, 2025)!

    // Wait for GSAP to load before running animation
    function initGSAPAnimation() {
        if (typeof gsap === 'undefined' || typeof SplitText === 'undefined' || typeof ScrollTrigger === 'undefined') {
            // GSAP not loaded yet, wait a bit and try again
            setTimeout(initGSAPAnimation, 100);
            return;
        }

        // Register GSAP plugins (all now free!)
        gsap.registerPlugin(ScrollTrigger, SplitText);

        // Check if the element exists
        const element = document.querySelector('.split-text-heading');
        if (!element) return;

        // Initialize SplitText
        const splitText = new SplitText('.split-text-heading', {
            type: "chars"
        });

        // Create the animation
        gsap.from(splitText.chars, {
            scrollTrigger: {
                trigger: '.split-text-heading',
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse',
                markers: false // Set to true for debugging
            },
            x: 150,
            opacity: 0,
            duration: 0.7,
            ease: "power4",
            stagger: 0.04
        });
    }

    // Start checking for GSAP when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initGSAPAnimation);
    } else {
        initGSAPAnimation();
    }
</script>


</body>

</html>