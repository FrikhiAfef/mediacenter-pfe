@extends('utilisateur/app')
@section('contenu')

    <div id="maincontent" class="qt-main">

        <div class="qt-pageheader qt-negative">
            <div class="qt-container">

                <h1 class="qt-caption qt-spacer-s">
                    Jump In Incubator				</h1>
                <h4 class="qt-subtitle">
                    Elgazala Media Center
                </h4>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/actualites/actu.png')}}">
                <img src="{{asset('utilisateur/imagestemplate/actualites/actu.png')}}" alt="Featured image" width="690" height="302">
            </div>
        </div>
        <div class="qt-container qt-spacer-l">
            <div class="row">
                <div class="col s12 m12 l1 qt-pushpin-container">
                    <div class="qt-pushpin">

                        <ul class="qt-sharepage qt-content-primary">
                            <li class="hide-on-med-and-down">
                                <i class="qticon-share qt-shareicon qt-content-primary-dark"></i>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-name="Music Player" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-name="Music Player" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-name="Music Player" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-name="Music Player" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="qt-btn-primary qt-sharelink"><i class="dripicons-heart"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <hr class="qt-spacer-m">
                </div>

                <div class="col s12 m12 l8">
                @foreach( $jumps as $jump )

                        <div class="qt-the-content">

                            <h1>{!! htmlspecialchars_decode($jump->titre) !!}</h1>

                            <dd><p>{!! html_entity_decode($jump->description) !!}</p></dd>
                            <br>

                        </div>
                @endforeach
                </div>

                <div class="qt-sidebar col s12 m12 l3">

                    <div class="qt-widgets qt-sidebar-main qt-text-secondary row">
                        <div class="col s12 m3 l12">
                            <div class="qt-widget">
                                <h5 class="qt-caption-small"><span>newsletter</span></h5> Abonnez-vous maintenant à la newsletter pour recevoir des mises à jour hebdomadaires.
                                <form method="post" action="#newsletter" class="qt-inline-form">
                                    <div class="row qt-nopadding">
                                        <div class="col s12 m8 l9">
                                            <input placeholder="Votre email" value="" type="text" class="validate qt-input-s">
                                        </div>
                                        <div class="col s12 m4 l3">
                                            <input type="button" value="Envoyer" class="qt-btn qt-btn-secondary qt-btn-s qt-fullwidth">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <hr class="qt-spacer-l">
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>

    <div class="qt-footer qt-footerwidgets">
        <div class="qt-section qt-footer-widgets qt-content-primary-light">
            <div class="qt-container">
                <h2 class="qt-footer-logo"><a href="./" class="brand-logo qt-logo-text">Elgazala Media Center<span></span></a></h2>
                <div class="qt-widgets qt-widgets-footer qt-negative qt-spacer-m row">
                    <div class="col s12 m3 l3">
                        <div class="qt-widget">
                            <h5 class="qt-caption-small"><span>Newsletter</span></h5> Abonnez-vous maintenant à la newsletter pour recevoir des mises à jour hebdomadaires.

                            <hr class="qt-spacer-s">
                            <form method="post" action="#newsletter" class="qt-inline-form">
                                <div class="row qt-nopadding">
                                    <div class="col s12 m8 l9">
                                        <input placeholder="Votre email" value="" type="text" class="validate qt-input-s">
                                    </div>
                                    <div class="col s12 m4 l3">
                                        <input type="button" value="submit" class="qt-btn qt-btn-secondary qt-btn-s qt-fullwidth">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col s12 m3 l3">
                        <div class="qt-widget">
                            <h5 class="qt-caption-small"><span>Contacts</span></h5>
                            <div class="qt-widget-contacts">
                                <p>
                                    <i class="qticon-home"></i><a href="">Elgazala Technopark, Raoued, Gouvernorat de l'Ariana, 2088 Ariana - Tunisie</a>
                                </p>
                                <p>
                                    <i class="qticon-at-sign"></i><a href="">contact@elgazala.tn
                                    </a>
                                </p>
                                <p>
                                    <i class="qticon-phone"></i><a href="tel:1-847-555-5555">(+216) 71 857 757										</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m3 l3">
                        <div class="qt-widget">
                            <h5 class="qt-caption-small"><span>LIENS PRINCIPAUX
							   </span></h5>
                            <ul class="qt-widget-menu qt-list-chevron">
                                <li>
                                    <a href="index.html">Accueil</a>
                                </li>
                                <li>
                                    <a href="archive.html">Emissions</a>
                                </li>
                                <li>
                                    <a href="archive-chart.html">Actualités</a>
                                </li>
                                <li>
                                    <a href="">Podcast</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/full-1600-700.jpg')}}">
                <img src="{{asset('utilisateur/imagestemplate/full-1600-700.jpg')}}" alt="Featured image" width="690" height="302">
            </div>
        </div>
        <div class="qt-footer-bottom qt-content-primary-dark">
            <div class="qt-container">
                <div class="row">
                    <div class="col s12 m12 l8">
                        Copyright 2018 Clever Technologies
                        <ul class="qt-menu-footer qt-small qt-list-chevron ">
                            <li><a href="#"><i class="dripicons-chevron-right"></i>à propos</a></li>
                            <li><a href="archive-members.html"><i class="dripicons-chevron-right"></i>Équipe</a></li>
                            <li><a href="login.html"><i class="dripicons-chevron-right"></i>Connexion</a></li>
                            <li><a href="login2.html"><i class="dripicons-chevron-right"></i>Inscription</a></li>

                        </ul>
                    </div>
                    <div class="col s12 m12 l4">
                        <ul class="qt-menu-social">
                            <li class="right"><a href="#"><i class="qticon-beatport"></i></a></li>
                            <li class="right"><a href="#"><i class="qticon-facebook"></i></a></li>
                            <li class="right"><a href="#"><i class="qticon-twitter"></i></a></li>
                            <li class="right"><a href="#"><i class="qticon-youtube"></i></a></li>
                            <li class="right"><a href="#"><i class="qticon-soundcloud"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="channelslist" class="side-nav qt-content-primary qt-right-sidebar">
        <a href="#" class="qt-btn qt-btn-secondary button-playlistswitch-close qt-close-sidebar-right" data-activates="channelslist"><i class="icon dripicons-cross"></i></a>

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
                            <a id="playerlink" href="http://freshly-ground.com/data/audio/sm2/Adrian%20Glynn%20-%20Blue%20Belle%20Lament.mp3"></a>
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

        <div id="qtShoutcastFeedData" class="hidden" data-style="" data-channel="1" data-host="173.192.105.231" data-port="3540"></div>

        <div class="qt-part-channels-list">
            <ul class="qt-content-aside qt-channelslist qt-negative">
                <li class="qt-channel">
                    <a href="#!" class="qt-ellipsis" data-title="06AM Ibiza" data-subtitle="Underground Radio" data-background="imagestemplate/photo-squared-500-500.jpg" data-logo="imagestemplate/radio-logo.png" data-playtrack="http://173.192.105.231:3540/stream.mp3" data-host="173.192.105.231" data-port="3540" data-stats_path="" data-played_path="" data-channel="">
                        <img src="{{asset('utilisateur/imagestemplate/radio-logo.png')}}" alt="logo" class="qt-radiologo dripicons-media-play" width="80" height="80">
                        <i class="dripicons-media-play"></i> Station 1
                    </a>
                </li>
                <li class="qt-channel">
                    <a href="#!" class="qt-ellipsis" data-title="altradio" data-subtitle="The subtitle of radio 2" data-background="imagestemplate/large-1170-512.jpg" data-logo="imagestemplate/radio-logo.png" data-playtrack="http://82.77.137.30:8557/;listen.mp3" data-host="82.77.137.30" data-port="8557" data-stats_path="" data-played_path="" data-channel="">
                        <img src="{{asset('utilisateur/imagestemplate/radio-logo.png')}}" alt="logo" class="qt-radiologo" width="80" height="80">
                        <i class="dripicons-media-play"></i> altradio
                    </a>
                </li>
            </ul>
        </div>

    </div>



@endsection