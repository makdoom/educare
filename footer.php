<!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script>
        $('.counter').counterUp({
        delay: 20,
        time: 3000
        });
    </script>
    <script>
        
        $(document).ready(function(){
            //  FOR MENU TOGGLE 
            $('.menuToggle').click(function(){
                $('nav').toggleClass('active');
            });
            $('ul li').hover(function(){
                $(this).find('ul').stop().slideToggle(400);
                $(this).toggleClass('active');
                // $(this).find('ul').stop().slideToggle(400);
                $(this).siblings().removeClass('active');
            });
        });
        
    </script>
</body>
</html>