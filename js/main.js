var $header     = $('#header')
  , $header_navbar = $header.find('.navbar')

  , $content    = $('#content')

  , $colophon   = $('#colophon')

  , $footer     = $('#footer');




$(window).on('load hashchange', function (e) {
    var hash        = location.hash.split('/')
      , category    = hash[1]
      , page        = hash[2];

    $.ajax({
        url: 'pages/'+ (hash.length == 3 ? hash.slice(1,3).join('/') : 'index') +'.html'
    }).done(function (html, status, xhr) {
        $content.html(html);

        $header_navbar.find('.nav > li').removeClass('active');
        hash[1] && $header_navbar.find('.nav > li[data-category="'+ hash[1] +'"]').addClass('active');
    });
});
