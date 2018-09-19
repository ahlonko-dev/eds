jQuery(document).ready(function($){
    $(".mobile-icon").click(function () {
        $(".main-menu").toggle();
        $(".mobile-icon").toggleClass("fa-bars fa-times");
        $(".para1").css("left");
        
    });
});
