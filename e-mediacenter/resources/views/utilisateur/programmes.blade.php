@extends('utilisateur.app')
@section('contenu')
    <div id="maincontent" class="qt-main">
        <!-- ======================= HEADER SECTION ======================= -->
        <!-- HEADER CAPTION ========================= -->
        <div class="qt-pageheader qt-negative">
            <div class="qt-container">
                <ul class="qt-tags">
                    <li>
                        <a href="#">
                            Category name
                        </a>
                    </li>
                </ul>
                <h1 class="qt-caption qt-spacer-s">
                    Programmes
                </h1>
                <h4 class="qt-subtitle">
                    Elgazala Media Center
                </h4>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/emissions/slide.png')}}">
                <img src="{{asset('utilisateur/imagestemplate/emissions/slide.png')}}" alt="Featured image" width="690" height="302">
            </div>
        </div>
        <!-- HEADER CAPTION END ========================= -->
        <!-- ======================= ON AIR BANNER SECTION ======================= -->
        <div class="qt-container qt-spacer-l">
            <!-- ON AIR SHOW =========================
            <div class="qt-part-archive-item qt-part-schedule-onair-large qt-negative">
                <div class="qt-item-header">
                    <div class="qt-header-mid qt-vc">
                        <div class="qt-vi">
                            <h5 class="qt-caption-med"><span>Now on air</span></h5>
                            <hr class="qt-spacer-s">
                            <h1 class="qt-title">
                                <a href="#" class="qt-text-shadow">Detroit session</a>
                            </h1>
                            <h4>Presented by dj martin</h4>
                            <p class="qt-small">
                                08:00pm <i class="dripicons-arrow-thin-right"></i> 09:00pm
                            </p>
                            <hr class="qt-spacer-m hide-on-med-and-down">
                            <p class="hide-on-med-and-down"><a href="#" class="qt-btn qt-btn-l qt-btn-primary " tabindex="0"><i class="dripicons-align-justify"></i></a></p>
                        </div>
                    </div>
                    <div class="qt-header-bg" data-bgimage="imagestemplate/emissions/img01.png">
                        <img src="imagestemplate/emissions/img01.png" alt="Featured image" width="1170" height="512">
                    </div>
                </div>
            </div>
            <!-- ON AIR SHOW END ========================= -->
        </div>
        <!-- ======================= UPCOMING SHOWS  SECTION ======================= -->
        <div class="qt-container qt-spacer-m">
            <h5 class="qt-caption-small"><span>Nos Emissions</span></h5>
            <hr class="qt-spacer-s">
            <!-- SLIDESHOW UPCOMING SHOWS ================================================== -->
            <div class="qt-slickslider-container qt-slickslider-externalarrows">
                <div class="row">
                    <div class="qt-slickslider qt-slickslider-multiple qt-slickslider-podcast" data-slidestoshow="3" data-variablewidth="false" data-arrows="true" data-dots="false" data-infinite="true" data-centermode="false" data-pauseonhover="true" data-autoplay="false" data-arrowsmobile="false" data-centermodemobile="true" data-dotsmobile="false" data-slidestoshowmobile="1" data-variablewidthmobile="true" data-infinitemobile="false">
                    @foreach($programmes as $programme)

                        <!-- SLIDESHOW ITEM -->
                            <div class="qt-item">
                                <!-- SHOW UPCOMING ITEM ========================= -->
                                <div class="qt-part-archive-item qt-part-archive-item-show qt-negative">
                                    <div class="qt-item-header">
                                        <div class="qt-header-top">
                                            <ul class="qt-tags">
                                                <li><a href="#"></a></li>
                                            </ul>
                                        </div>
                                        <div class="qt-header-mid qt-vc">
                                            <div class="qt-vi">
                                                <h5 class="qt-time">{{$programme->jours}} À {{$programme->heure}}h</h5>
                                                <h3 class="qt-ellipsis qt-t qt-title">
                                                    <a href="#read" class="qt-text-shadow">{{$programme->nomE}}</a>
                                                </h3>
                                                <p class="qt-small qt-ellipsis">Animateur: {{$programme->nomAnim}} {{$programme->prenomAnim}}</p>
                                            </div>
                                        </div>
                                        <div class="qt-header-bottom">
                                            <a href="#read" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-headset"></i></a>
                                        </div>
                                        <div class="qt-header-bg" data-bgimage="{{asset('storage/'.$programme->image)}}">
                                            <img src="{{asset('storage/'.$programme->image)}}" alt="Featured image" width="690" height="302">
                                        </div>
                                    </div>
                                </div>
                                <!-- SHOW UPCOMING ITEM END ========================= -->
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
            <!-- SLIDESHOW UPCOMING SHOWS END ================================================== -->
        </div>
        <!-- ======================= SCHEDULE  SECTION ======================= -->
        <div class="qt-container qt-spacer-l">
            <h3 class="qt-caption-med"><span>Programmes</span></h3>
            <hr class="qt-spacer-s">
            <!-- SCHEDULE ================================================== -->
            <div class="qt-show-schedule">
                <!-- TAB MENU ==== -->
                <ul class="tabs">
                    <li class="tab"><a href="#daymonday">Lundi</a></li>
                    <li class="tab"><a href="#daytuesday">Mardi</a></li>
                    <li class="tab"><a href="#daywednesday">Mercredi</a></li>
                    <li class="tab"><a href="#daythursday">Jeudi</a></li>
                    <li class="tab"><a href="#dayfriday">Vendredi</a></li>
                    <li class="tab"><a href="#daysaturday">Samedi</a></li>
                    <li class="tab"><a href="#daysunday">Dimanche</a></li>
                </ul>
                <!-- TAB MENU END ==== -->
                <hr class="qt-spacer-s">
                <!-- TAB CONTENTS ======================================== -->
                <div id="daymonday" class="qt-show-schedule-day">
                    <!-- SCHEDULE DAY ================================================== -->
                    <div class="qt-show-schedule-day row">
                        @foreach($programmes as $programme)

                            <div class="col s12 m4 l4">
                                <!-- SCHEDULE SHOW ========================= -->
                                <div class="qt-part-archive-item qt-part-show-schedule-day-item">
                                    <div class="qt-item-header">
                                        <div class="qt-header-mid qt-vc">
                                            <div class="qt-vi">
                                                <h4 class="qt-item-title qt-title">
                                                    <a href="#read" class="qt-ellipsis  qt-t">{{$programme->nomE}}</a>
                                                </h4>
                                                <p class="qt-item-det">
                                                    <span class="qt-time">{{$programme->heure}}</span><span class="qt-day qt-capfont">{{$programme->jours}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <a href="#" class="qt-info bottom right"><i class="dripicons-information"></i></a>
                                        <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/programmes/1.png')}}">
                                            <img src="{{asset('utilisateur/imagestemplate/programmes/1.png')}}" alt="Featured image" width="690" height="302">
                                        </div>
                                    </div>
                                    <div class="qt-overinfo qt-paper">
                                        <p class="qt-item-det qt-accent">
                                            <span class="qt-time">{{$programme->nomAnim}}</span><span class="qt-am"></span><span class="qt-day qt-capfont">{{$programme->jours}}</span>
                                        </p>
                                        <div class="qt-more">
                                            <p class="qt-ellipsis-2">{!! html_entity_decode($programme->description) !!}</p>
                                        </div>

                                    </div>
                                </div>
                                <!-- SCHEDULE SHOW END ========================= -->
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr class="qt-spacer-l">
    </div>
@endsection