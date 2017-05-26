$(document).ready(function () {
	alert("yaa");
    $('.btn-vertical-slider').on('click', function () {
        alert("yaa");
        if ($(this).attr('data-slide') == 'next') {
            $('#myCarousel').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#myCarousel').carousel('prev')
        }

    });
});