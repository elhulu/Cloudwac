$( function()
{
    $( 'audio' ).audioPlayer();
});

$( 'audio' ).audioPlayer(
    {
        classPrefix: 'audioplayer',
        strPlay: 'Play',
        strPause: 'Pause',
        strVolume: 'Volume'
    });