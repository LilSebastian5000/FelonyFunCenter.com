$('[data-timeago]').each(function(){
    var $t = $(this);
    $t.text( moment( $t.text() ).fromNow() );
});
