<div class="qt-parentcontainer">
    <!-- QT MENUBAR  ================================ -->
    <div class="qt-menubar-top  qt-content-primary hide-on-large-and-down">
        <ul>
            <li><a href="{{route('apropos')}}"><i class="dripicons-chevron-right"></i>à propos</a></li>
            <li><a href="{{route('equipe')}}"><i class="dripicons-chevron-right"></i>Équipe</a></li>


           @if(Auth::guest())
                <li><a href="{{route('login')}}"><i class="dripicons-chevron-right"></i>Connexion</a></li>
            @else
                {{route('login')}}
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif

            <li><a href="{{route('inscriptionhome')}}"><i class="dripicons-chevron-right"></i>Inscription</a></li>
        </ul>
    </div>
    <!-- QT MENUBAR  ================================ -->
    <nav class="qt-menubar nav-wrapper qt-content-primary ">
        <!-- desktop menu  HIDDEN IN MOBILE AND TABLETS -->
        <ul class="qt-desktopmenu hide-on-xl-and-down">
            <li class="qt-logo-link"><a href="./" class="brand-logo qt-logo-text"><img src="{{asset('utilisateur/imagestemplate/logo.png')}}" alt="Featured image" width="84" height="84"></a></li>
            <li><a href="#">Web Radio</a>
                <ul>
                    <li><a href="{{route('emission')}}">Emissions</a></li>
                    <li><a href="{{route('evenement')}}">Evénements</a></li>
                    <li><a href="{{route('programme')}}">Programmes</a></li>
                    <li><a href="{{route('podcast')}}">Podcasts</a></li>
                    <li><a href="{{route('galerie')}}">Galeries</a></li>


                </ul>
            </li>
            <li><a href="#">Web TV</a>
                <ul>
                    <li><a href="#">Emissions</a></li>
                    <li><a href="#">Evénements</a></li>
                    <li><a href="#">Programmes</a></li>
                    <li><a href="#">Podcasts</a></li>
                    <li><a href="#">Galeries</a></li>

                </ul>
            </li>
            <li><a href="{{route('actualite')}}">Actualités</a>
            <li><a href="{{route('jumpin')}}">Jump In Incubator</a></li>
            <li><a href="{{route('DigitalMediaLab')}}">Digital Media Lab</a></li>
            </li>
            <li><a href="{{route('contact')}}">Contact</a></li>


            <li class="right"><a href="#!" data-expandable="#qtsearchbar" class="qt-btn qt-btn-l qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
            <li class="right"><a href="{{route('popup')}}" class="qt-popupwindow" data-name="Music Player" data-width="320" data-height="500"><i class="icon dripicons-duplicate"></i> Popup</a></li>
            <li class="right"><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i>Live</a></li>
        </ul>
        <!-- mobile menu icon and logo VISIBLE ONLY TABLET AND MOBILE-->
        <ul class="qt-desktopmenu hide-on-xl-only ">
            <li><a href="#" data-activates="qt-mobile-menu" class="button-collapse qt-menu-switch qt-btn qt-btn-primary qt-btn-m"><i class="dripicons-menu"></i></a></li>
            <li><a href="#!" class="brand-logo qt-logo-text">EMC</a></li>
        </ul>
    </nav>
    <!-- mobile menu -->
    <div id="qt-mobile-menu" class="side-nav qt-content-primary">
        <ul class=" qt-side-nav">
            <li><a href="index.html">Accueil</a></li>
            <li class="menu-item-has-children"><a href="page-schedule.html">Web Radio</a>
                <ul>
                    <li><a href="archive.html">Emissions</a></li>
                    <li><a href="archive-events.html">Evénements</a></li>
                    <li><a href="page-schedule.html">Programmes</a></li>
                    <li><a href="archive-podcast.html">Podcasts</a></li>
                    <li><a href="galerie.html">Galeries</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="archive-podcast.html">Web TV</a>
                <ul>
                    <li><a href="archive-podcast.html">Archive</a></li>
                    <li><a href="archive.html">Emissions</a></li>
                    <li><a href="archive-events.html">Evénements</a></li>
                    <li><a href="page-schedule.html">Programmes</a></li>
                    <li><a href="archive-podcast.html">Podcasts</a></li>
                    <li><a href="galerie.html">Galeries</a></li>
                </ul>
            </li>

            <li><a href="archive-chart.html">Actualités</a></li>
            <li><a href="archive-chart.html">Jump In Incubator</a></li>
            <li><a href="jump-in-incubator.html">Jump In Incubator</a></li>
            <li><a href="digital-media-lab.html">Digital Media Lab</a></li>
        </ul>
    </div>
    <!-- mobile toolbar -->
    <ul class="qt-mobile-toolbar qt-content-primary-dark qt-content-aside hide-on-large-only">
        <li><a href="#!" data-expandable="#qtsearchbar" class="qt-scrolltop"><i class="icon dripicons-search"></i></a></li>
        <li><a href="page-popup.html" class="qt-popupwindow" data-name="Music Player" data-width="320" data-height="500"><i class="icon dripicons-duplicate"></i></a></li>
        <li><a href="#!" class="button-playlistswitch" data-activates="channelslist"><i class="icon dripicons-media-play"></i></a></li>
    </ul><!-- SEARCH FORM ========================= -->
    <div id="qtsearchbar"  class="qt-searchbar qt-content-primary qt-expandable">
        <div class="qt-expandable-inner">
            <form method="post" action="#search" class="qt-inline-form">
                <div class="row qt-nopadding">
                    <div class="col s12 m8 l9">
                        <input placeholder="Recherche" value="" id="searchtex" type="text" class="validate qt-input-l">
                    </div>
                    <div class="col s12 m3 l2">
                        <input type="button" value="Search" class="qt-btn qt-btn-primary qt-btn-l qt-fullwidth">
                    </div>
                    <div class="col s12 m1 l1">
                        <a href="#!" class="qt-btn qt-btn-l qt-btn-secondary qt-fullwidth aligncenter" data-expandable="#qtsearchbar"><i class="dripicons-cross"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- SEARCH FORM END ========================= -->
</div>
@section('headerSection')
@show
