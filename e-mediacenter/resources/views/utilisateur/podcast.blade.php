@extends('utilisateur.app')
@section('contenu')
    <div id="maincontent" class="qt-main">
        <div class="qt-pageheader qt-negative">
            <div class="qt-container">

                <h1 class="qt-caption qt-spacer-s">
                    Podcasts
                </h1>
                <h4 class="qt-subtitle">
                    Elgazala Media Center						</h4>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/podcast.jpg')}}">
                <img src="{{asset('utilisateur/imagestemplate/podcast.jpg')}}" alt="Featured image" width="690" height="302">
            </div>
        </div>

        <div class="qt-container qt-archive-events qt-vertical-padding-l ">
            <div class="row">

                @foreach($podcasts as $podcast)
                    <div class="col s12 m6 l4">
                        <div class="qt-part-archive-item qt-item-podcast">
                            <div class="qt-item-header">
                                <div class="qt-header-top">
                                    <ul class="qt-tags">
                                        <li><a href="#tag-link"></a></li>
                                    </ul>

                                </div>
                                <div class="qt-header-mid qt-vc">
                                    <div class="qt-vi">
                                        <a href="single-podcast.html" class="qt-text-shadow"><i class="dripicons-media-play qt-text-neg"></i></a>
                                    </div>
                                </div>
                                <div class="qt-header-bottom">
                                    <a href="single-podcast.html" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-music"></i></a>
                                </div>
                                <div class="qt-header-bg" data-bgimage="{{asset('storage/'.$podcast->image)}}">
                                    <img src="{{asset('storage/'.$podcast->image)}}" alt="Featured image" width="690" height="690">
                                </div>
                            </div>
                            <div class="qt-item-content-s qt-card">
                                <h4 class="qt-ellipsis-2 qt-t">
                                    <a href="single-podcast.html">{{$podcast->titre}}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="qt-pagination qt-content-primary">

            <ul class="pagination qt-container">
                <li class="special"><span class="qt-pagination-label qt-content-primary-dark">PAGES</span></li>
                <li class="special disabled"><a href="#!" class="qt-btn qt-btn-l qt-btn-primary"><i class="dripicons-arrow-thin-left"></i></a></li>
                <li class="special waves-effect"><a href="#!" class="qt-btn qt-btn-l qt-btn-primary"><i class="dripicons-arrow-thin-right"></i></a></li>
                <li class="item active hide-on-large-and-down"><a href="#!">1</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">2</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">3</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">4</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">5</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">6</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">7</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">8</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">9</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">10</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">11</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">12</a></li>
                <li class="item waves-effect hide-on-large-and-down"><a href="#!">13</a></li>
            </ul>

        </div>
    </div>

@endsection