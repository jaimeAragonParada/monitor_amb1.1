$(document).ready(function () {
	//alert("yaa");
    $('.btn-vertical-slider').on('click', function () {
    	       
        if ($(this).attr('data-slide') == 'next') {
             // alert("next"); 
            var active=$('div.carousel-inner').children('div.active');
            // var hijos=$('.item');
            alert($('div.item').length());
            
            // alert(active.attr('data-slide'));
            // var prev=active.prev();
            var next=active.next();
            active.removeClass('active');
            active.addClass('prev');
            next.addClass('active');
            // alert(prev.attr('data-slide'));
            // alert(next.attr('data-slide'));
            $('#myCarousel').carousel('next');
            
        }
        if ($(this).attr('data-slide') == 'prev') {
            // alert("prev"); 
            var active=$('div.carousel-inner').children('div.active');
            // alert(active.attr('data-slide'));
            var prev=active.prev();
            // alert(prev.attr('data-slide'));
            // var next=active.next();
            active.removeClass('active'); 
            active.addClass('next');           
            prev.addClass('active');
            $('#myCarousel').carousel('prev');
        }

    });
});