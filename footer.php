<!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- FOR MENU TOGGLE -->
    <script>
        $(document).ready(function(){
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