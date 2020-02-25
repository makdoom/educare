<footer>
    <div class="footer_container">
        <div class="left_col">
            <div class="add">
                <i class="fa fa-map-marker"></i>
                    <p>
                        Edu-Care – Teacher’s Bureau 38 C, <br> Beniatola St, Sovabazar,  Beniatola, <br> Mumbai, 400058.
                    </p>
            </div>

            <div class="email">
                    <i class="fa fa-envelope"></i>
                    <a href="#">makshaikh99@gmail.com</a>
            </div>

             <div class="phone">
                    <i class="fa fa-phone"></i>
                    <span>9874561238</span>
            </div>
            <div class="phone">
                <i class="fa fa-phone"></i>
                <span>9874561238</span>
            </div>
 
             <p class="copy_right">&copy; <script> document.write(new Date().getFullYear());</script> All Rights Reserved </p>
           
        </div>



        <div class="right_col">
            <h2>our newsletter</h2>
            <div class="btm-border"></div>
            <p>Enter your email to get our news and updates</p>
            <form action="#" class="newsletter_form">
                <input class="txtb" type="text" placeholder=" Enter Your Email ">
                <input class="submit-btn" type="submit" value="Subscribe">

            </form>
            <div class="social_icons">
                <a href="#" ><i class="fa fa-youtube"></i></a>
                <a href="#" ><i class="fa fa-facebook"></i></a>
                <a href="#" ><i class="fa fa-instagram"></i></a>
            </div>
        </div>

        
    </div>
</footer>






<!-- JQUERY CDN -->
<script  src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
    $(".accordion_header").click(function () {
        $(".accordion_header").removeClass("active");
        $(this).addClass("active");
    });

    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });

    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,3],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        autoPlay:true
    });
    
});

</script>
</body>
</html>