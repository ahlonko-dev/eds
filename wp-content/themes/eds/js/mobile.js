jQuery(document).ready(function($){
    $(".mobile-icon").click(function () {
        $(".main-menu").toggle();
        $(".mobile-icon").toggleClass("fa-bars fa-times");
        $(".para1").css("left");
        
    });
    $(".main-menu a").hover(function () {
        $("this").css('background-color','#F02A2A;');
        $("this").css('padding','1.2rem');
        $("this").css('color','#FFFFFF;');
        
    });
});
