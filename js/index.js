$(document).ready(function() {
    $('.sf-nav a').on('mouseover',function(e) {
        var target = $(e.target).attr('data-target');
        var targetClass = '.sf-cta-'+target;
        $(targetClass).addClass('sf-cta-visible');
    });
    $('.sf-nav a').on('mouseleave',function(e) {
        var target = $(e.target).attr('data-target');
        var targetClass = '.sf-cta-'+target;
        $(targetClass).removeClass('sf-cta-visible');
    });
});
