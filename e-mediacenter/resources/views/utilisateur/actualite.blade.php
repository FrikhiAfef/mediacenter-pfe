@extends('utilisateur/app')
@section('contenu')

    <div id="maincontent" class="qt-main">

        <div class="qt-pageheader qt-negative">
            <div class="qt-container">

                <h1 class="qt-caption qt-spacer-s">
                    Actualités				</h1>
                <h4 class="qt-subtitle">
                    Elgazala Media Center
                </h4>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/actualites/actu.png')}}">
                <img src="{{asset('utilisateur/imagestemplate/actualites/actu.png')}}" alt="Featured image" width="690" height="302">
            </div>
        </div>

        <div class="qt-container qt-vertical-padding-l ">
            <div class="row">
                <div class="col s12 m12 l1 qt-pushpin-container">
                    <div class="qt-pushpin">

                        <ul class="qt-sharepage qt-content-primary">
                            <li class="hide-on-med-and-down">
                                <i class="qticon-share qt-shareicon qt-content-primary-dark"></i>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="facebook" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="twitter" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="google" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
                                    <i class="qticon-googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a class="qt-popupwindow qt-sharelink" data-sharetype="pinterest" data-name="Share" data-width="600" data-height="500" target="_blank" href="#">
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
                    @foreach($actualites as $actualite)


                        <div class="qt-part-archive-item qt-featured">
                            <div class="qt-item-header">
                                <div class="qt-header-top">
                                    <ul class="qt-tags">
                                        <li><a href="#">{{$actualite->titre}}</a></li>
                                    </ul>

                                </div>
                                <div class="qt-header-mid qt-vc">
                                    <div class="qt-vi">

                                        <h3 class="qt-title">
                                            <a href="#read" class="qt-text-shadow">	</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="qt-header-bottom">
                                    <div class="qt-item-metas">
                                        <a class="qt-author-thumb" href="#author-url">
                                            <img src="{{asset('storage/'.$actualite->image)}}" alt="" width="30" height="30">
                                        </a>
                                        <div class="qt-texts">
                                            <p class="qt-author"><a href="#author-url">EEN</a></p>
                                            <p class="qt-date"></p>
                                        </div>
                                    </div>
                                    <a href="#" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-align-justify"></i></a>
                                </div>
                                <div class="qt-header-bg" data-bgimage="{{asset('storage/'.$actualite->image)}}">
                                    <img src="{{asset('storage/'.$actualite->image)}}" alt="Featured image" width="690" height="302">
                                </div>
                            </div>
                            <div class="qt-item-content qt-card qt-the-content">
                                <p>{!! html_entity_decode($actualite->description) !!}</p>

                            </div>
                        </div>

                        <hr class="qt-spacer-m">

                    @endforeach
                </div>
                <div class="qt-sidebar col s12 m12 l3">

                    <div class="qt-widgets qt-sidebar-main qt-text-secondary row">
                        <div class="col s12 m3 l12">
                            <div class="qt-widget">
                                <h5 class="qt-caption-small"><span>Newsletter</span></h5>Abonnez-vous maintenant à la newsletter pour recevoir des mises à jour hebdomadaires.<hr class="qt-spacer-s">
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
                </div>

            </div>
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
    </div>

@endsection