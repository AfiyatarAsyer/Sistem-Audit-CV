//event pada saat di klik link nya
$('.page-scroll').on('click',function(){

    // ambil isi href
    var tujuan = $(this).attr('href');
    //tangkap elemen ybs
    var elemenTujuan = $(tujuan);

    // pindahkan scroll
    $('body').animate({
        scrollTop: elemenTujuan.offside().top-50
    },1250, 'easeInOutExpo');

    elemenTujuan.preventDefault();

});

// parallax
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();

    $('.header-title img').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    })
    $('.header-title h1').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    })
    $('.header-bottom p').css({
        'transform' : 'translate(0px, '+ wScroll/3 +'%)'
    })
    $('.social-media li').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    })
    $('.distancing-media div').css({
        'transform' : 'translate(0px, '+ wScroll/1 +'%)'
    })
    $('.distancing-media div').css({
        'transform' : 'translate(0px, '+ wScroll/1 +'%)'
    })
})