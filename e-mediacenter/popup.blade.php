<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POPUP_EMC</title>
    <meta name="description" content="Radio station HTML template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- icons -->
    <link href='{{asset("utilisateur/fonts/dripicons/webfont.css")}}' rel='stylesheet' type='text/css'>
    <link href='{{asset("utilisateur/fonts/qticons/qticons.css")}}' rel='stylesheet' type='text/css'>

    <!-- slick slider -->
    <link href='{{asset("utilisateur/components/slick/slick.css")}}' rel='stylesheet' type='text/css'>

    <!-- swipebox -->
    <link href='{{asset("utilisateur/components/swipebox/src/css/swipebox.min.css")}}' rel='stylesheet' type='text/css'>

    <!-- countdown component -->
    <link rel="stylesheet" type="text/css" href="{{asset('utilisateur/components/countdown/css/jquery.classycountdown.css')}}" />

    <!-- QT 360 PLAYER component -->
    <link rel="stylesheet" type="text/css" href="{{asset('utilisateur/components/soundmanager/templates/qtradio-player/css/flashblock.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('utilisateur/components/soundmanager/templates/qtradio-player/css/qt-360player-volume.css')}}" />


    <!-- Main css file -->
    <link rel="stylesheet" href="{{asset('utilisateur/css/qt-main.css')}}"><!-- INCLUDES THE CHOSEN FRAMEWORK VIA #IMPORT AND SASS -->

    <!-- Custom typography settings and google fonts -->
    <link rel="stylesheet" href="{{asset('utilisateur/css/qt-typography.css')}}">
</head>
<body>
<!-- QT HEADER END ================================ -->
<div class="qt-parentcontainer">

    <!-- PLAYER ========================= -->
    <div id="qtplayercontainer" data-playervolume="true" data-accentcolor="#dd0e34" data-accentcolordark="#ff0442" data-textcolor="#ffffff" data-soundmanagerurl="./components/soundmanager/swf/" class="qt-playercontainer qt-playervolume qt-clearfix qt-content-primary">
        <div class="qt-playercontainer-content qt-vertical-padding-m">
            <div class="qt-playercontainer-header">
                <h5 class="qt-text-shadow small">Now on</h5>
                <h3 id="qtradiotitle" class="qt-text-shadow">STATION 1 RADIO</h3>
                <h4 id="qtradiosubtitle" class="qt-thin qt-text-shadow small">Subtitle of the radio</h4>
            </div>
            <div class="qt-playercontainer-musicplayer" id="qtmusicplayer">
                <div class="qt-musicplayer">
                    <div class="ui360 ui360-vis qt-ui360">
                        <a id="playerlink" href="http://41.231.36.126:8000/live"></a>
                    </div>
                </div>
            </div>
            <div class="qt-playercontainer-data qt-container qt-text-shadow small">
                <h6 class="qt-inline-textdeco">
                    <span>Current track</span>
                </h6>
                <div class="qt-t qt-current-track">
                    <h5 id="qtFeedPlayerTrack">TITLE</h5>
                    <h6 class="qt-small" id="qtFeedPlayerAuthor">ARTIST</h6>
                </div>
                <hr class="qt-inline-textdeco">
            </div>
        </div>
        <div id="playerimage" class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/full-1600-700.jpg')}}">
            <img src="{{asset('utilisateur/imagestemplate/full-1600-700.jpg')}}" alt="Featured image" width="690" height="302">
        </div>
    </div>
    <!-- this is for xml radio feed -->
    <div id="qtShoutcastFeedData" class="hidden" data-style="" data-channel="1" data-host="173.192.105.231" data-port="3540"></div>
    <!-- PLAYER END ========================= -->
    <!-- CHANNELS LIST ========================= -->
    <div class="qt-part-channels-list">
        <ul class="qt-content-aside qt-channelslist qt-negative qt-content-primary">
            <li class="qt-channel">
                <a href="#!" class="qt-ellipsis" data-title="06AM Ibiza" data-subtitle="Underground Radio" data-background="{{asset('utilisateur/imagestemplate/photo-squared-500-500.jpg')}}" data-logo="imagestemplate/radio-logo.png" data-playtrack="http://41.231.36.126:8000/live" data-host="173.192.105.231" data-port="3540" data-stats_path="" data-played_path="" data-channel="">
                    <img src="{{asset('utilisateur/imagestemplate/radio-logo.png')}}" alt="logo" class="qt-radiologo dripicons-media-play" width="80" height="80">
                    <i class="dripicons-media-play"></i> Station 1
                </a>
            </li>
            <li class="qt-channel">
                <a href="#!" class="qt-ellipsis" data-title="altradio" data-subtitle="The subtitle of radio 2" data-background="{{asset('utilisateur/imagestemplate/large-1170-512.jpg')}}" data-logo="imagestemplate/radio-logo.png" data-playtrack="http://41.231.36.126:8000/live" data-host="82.77.137.30" data-port="8557" data-stats_path="" data-played_path="" data-channel="">
                    <img src="{{asset('utilisateur/imagestemplate/radio-logo.png')}}" alt="logo" class="qt-radiologo" width="80" height="80">
                    <i class="dripicons-media-play"></i> altradio
                </a>
            </li>
        </ul>
    </div>
    <!-- CHANNELS LIST END ========================= -->

</div>
<!-- QT BODY END ================================ -->

<!-- QT FOOTER SCRIPTS ================================ -->
<script src="{{asset('utilisateur/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<script src="{{asset('utilisateur/js/jquery.js')}}"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->
<script src="{{asset('utilisateur/js/jquery-migrate.min.js')}}"></script><!--  JQUERY VERSION MUST MATCH WORDPRESS ACTUAL VERSION (NOW 1.12) -->

<!-- Framework -->
<script src="{{asset('utilisateur/js/materializecss/bin/materialize.min.js')}}"></script>

<!-- Cookies for player -->
<script src="{{asset('utilisateur/js/jquerycookie.js')}}"></script>

<!-- Slick carousel and skrollr -->
<script src="{{asset('utilisateur/components/slick/slick.min.js')}}"></script>
<script src="{{asset('utilisateur/components/skrollr/skrollr.min.js')}}"></script>

<!-- Swipebox -->
<script src="{{asset('utilisateur/components/swipebox/lib/ios-orientationchange-fix.js')}}"></script>
<script src="{{asset('utilisateur/components/swipebox/src/js/jquery.swipebox.min.js')}}"></script>

<!-- Countdown -->
<script src="{{asset('utilisateur/components/countdown/js/jquery.knob.js')}}"></script>
<script src="{{asset('utilisateur/components/countdown/js/jquery.throttle.js')}}"></script>
<script src="{{asset('utilisateur/components/countdown/js/jquery.classycountdown.min.js')}}"></script>

<!-- Soundmanager2 -->
<!--[if IE]><script src="{{asset('utilisateur/components/soundmanager/script/excanvas.js')}}"></script><![endif]-->
<script src="{{asset('utilisateur/components/soundmanager/script/berniecode-animator.js')}}"></script>
<script src="{{asset('utilisateur/components/soundmanager/script/soundmanager2-nodebug.js')}}"></script>
<script src="{{asset('utilisateur/components/soundmanager/script/shoutcast.js')}}"></script>
<script src="{{asset('utilisateur/components/soundmanager/templates/qtradio-player/script/qt-360player-volumecontroller.js')}}"></script>

<!-- Popup -->
<script src="{{asset('utilisateur/components/popup/popup.js')}}"></script>


<!-- MAIN JAVASCRIPT FILE ================================ -->
<script src="{{asset('utilisateur/js/qt-main.js')}}"></script>

</body>
</html>
