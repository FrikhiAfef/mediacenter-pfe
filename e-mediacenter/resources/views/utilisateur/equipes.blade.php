@extends('utilisateur.app')
@section('contenu')
    <div id="maincontent" class="qt-main">


        <div class="qt-pageheader qt-negative">
            <div class="qt-container">
                <h1 class="qt-caption qt-spacer-s">
                    L'Équipe
                </h1>
                <h4 class="qt-subtitle">
                    Elgazala Media Center
                </h4>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/equipe.png')}}">
                <img src="{{asset('utilisateur/imagestemplate/equipe.png')}}" width="1600" height="700" alt="Featured image">
            </div>
        </div>

        <!-- ======================= CONTENT SECTION ======================= -->
        <div class="qt-container qt-vertical-padding-l qt-archive-team">
            <div class="row">
                @foreach($equipes as $equipe)

                    <div class="col s12 m4 l3">
                        <!-- MEMBER ========================= -->
                        <div class="qt-part-archive-item qt-item-member">
                            <div class="qt-item-header">
                                <div class="qt-header-top">
                                    <ul class="qt-tags">
                                        <li><a href="#tag-link">{{$equipe->poste}} </a></li>
                                    </ul>
                                </div>
                                <div class="qt-header-mid qt-vc">
                                    <div class="qt-vi">
                                        <h4 class="qt-ellipsis qt-title">
                                            <a href="#" class="qt-text-shadow">{{$equipe->nom}}  {{$equipe->prenom}}</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="qt-header-bottom">
                                    <a href="single-member.php" class="qt-btn qt-btn-primary qt-readmore"><i class="dripicons-user"></i></a>
                                </div>
                                <div class="qt-header-bg" data-bgimage="{{asset('storage/'.$equipe->image)}}">
                                    <img src="{{asset('storage/'.$equipe->image)}}" alt="Featured image" width="690" height="690">
                                </div>
                            </div>

                        </div>
                        <!-- MEMBER END ========================= -->
                    </div>
                @endforeach


            </div>
        </div>

        <div class="qt-pagination qt-content-primary">
            <!-- PAGINATION ========================= -->
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
            <!-- PAGINATION END ========================= -->

        </div>

    </div>
    <!-- .qt-main end -->
    </div>
@endsection