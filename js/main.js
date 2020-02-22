
$(document).ready(function () {
    //  FOR MENU TOGGLE 
    $('.menuToggle').click(function () {
        $('nav').toggleClass('active');
    });
    $('ul li').hover(function () {
        $(this).find('ul').stop().slideToggle(400);
        $(this).toggleClass('active');
        // $(this).find('ul').stop().slideToggle(400);
        $(this).siblings().removeClass('active');
    });

  
   
});
// CHOOSE US SECTION

// $(document).on('click', '.toggle',function(){
//     $(".choose-content").toggleClass('active');
// });
