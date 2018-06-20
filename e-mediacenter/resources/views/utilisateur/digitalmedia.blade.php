@extends('utilisateur.app')
@section('contenu')
    <div id="maincontent" class="qt-main">

        <div class="qt-pageheader qt-negative">
            <div class="qt-container">
                <h1 class="qt-caption qt-spacer-s">
                    Digital Media Lab
                </h1>
                <h4 class="qt-subtitle">
                    Elgazala Media Center
                </h4>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/actualites/actu.png')}}">
                <img src="{{asset('utilisateur/imagestemplate/actualites/actu.png')}}" alt="Featured image" width="690" height="302">
            </div>
        </div>
    </div>

@endsection