 <!-- JS
         ============================================ -->
    <!-- jQuery JS -->
    <script src="{{url('asset/js/jquery.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{url('asset/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{url('asset/js/bootstrap.min.js')}}"></script>
    <!-- jquery Waypoints JS -->
    <script src="{{url('asset/js/jquery.waypoints.min.js')}}"></script>
    <!-- jquery Appear JS -->
    <script src="{{url('asset/js/jquery.appear.js')}}"></script>
    <!-- Numinate JS -->
    <script src="{{url('asset/js/numinate.min.js')}}"></script>
    <!-- Slick JS -->
    <script src="{{url('asset/js/swiper.min.js')}}"></script>
    <!-- Magnific JS -->
    <script src="{{url('asset/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Circle Progress JS -->
    <script src="{{url('asset/js/circle-progress.js')}}"></script>
    <!-- countdown JS -->
    <script src="{{url('asset/js/jquery.countdown.min.js')}}"></script>
    <!-- AOS -->
    <script src="{{url('asset/js/aos.js')}}"></script>
    <!-- Scripts JS -->
    <script src="{{url('asset/js/scripts.js')}}"></script>
    <!-- Revolution JS -->
    <script src="{{url('asset/revolution/rslider.js')}}"></script>
    <script src="{{url('asset/revolution/rbtools.min.js')}}"></script>
    <script src="{{url('asset/revolution/rs6.min.js')}}"></script>
<script>
 
$(document).ready(function() {
    // Check if the user has scrolled down 300 pixels from the top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scroll-to-top').fadeIn(); // Show the button
        } else {
            $('.scroll-to-top').fadeOut(); // Hide the button
        }
    });

    // Scroll to the top when the button is clicked
    $('.scroll-to-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800); // 800 milliseconds for the scroll animation
        return false;
    });
});
    </script>