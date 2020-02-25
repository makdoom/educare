<footer>
    <div class="footer_container">
        <div class="left_col">
            <div class="address">
                <a href="#">makshaikh99@gmail.com</a>
               
                <p>
                     <i class="fa fa-map-marker"></i>Edu-Care – Teacher’s Bureau 38 C, Beniatola St, Sovabazar, Beniatola, Mumbai, 400058.
                </p>
                <p>&copy;<script> document.write(new Date().getFullYear());</script> All Rights Reserved </p>

            </div>
        </div>
        <div class="right-col">
            <div class="news_letter">
                <input type="text" placeholder="Email"><br>                    <input type="submit" value="Submit">
            </div>
            <div class="social_icons">
                <i class="fa fa-youtube"></i>
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
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
        time: 3000
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