@extends('utilisateur.app')
@section('contenu')
    <style>
    .button-entreprise {
        width: 250px;
        margin-left: 30%;
        margin-right: 60%;
    }
    </style>
    <style>
        .button-investisseur{
            width: 250px;
            margin-left: 70%;
            margin-right: 80%;
        }
    </style>
    <style>
        .button-porteur{
            width: 250px;
            margin-left: -5%;
            margin-right: 80%;
        }
    </style>
    <div id="maincontent" class="qt-main">
        <!-- ======================= HEADER SECTION ======================= -->
        <!-- HEADER CONTACTS ========================= -->
        <div class="qt-pageheader qt-negative">
            <div class=" qt-container">
                <h1 class="qt-caption qt-spacer-s">
                    Inscrivez vous
                </h1>

                <ul class="qt-menu-social qt-spacer-s">
                    <li><a href="#"><i class="qticon-beatport"></i></a></li>
                    <li><a href="#"><i class="qticon-facebook"></i></a></li>
                    <li><a href="#"><i class="qticon-twitter"></i></a></li>
                    <li><a href="#"><i class="qticon-youtube"></i></a></li>
                    <li><a href="#"><i class="qticon-soundcloud"></i></a></li>
                </ul>
            </div>
            <div class="qt-header-bg" data-bgimage="{{asset('utilisateur/imagestemplate/contact/contact.jpg')}}">
                <img src="{{asset('utilisateur/imagestemplate/contact/contact.jpg')}}" alt="Featured image" width="690" height="302">
            </div>
        </div>
        <!-- HEADER CONTACTS END ========================= -->
        <div class="qt-container qt-vertical-padding-l">
            <div class="row">
                <div class="col s12 m8 push-m2">


                    <!-- ====================== SECTION BOOKING AND CONTACTS ================================================ -->
                    <div id="booking" class="section qt-section-booking qt-card">

                        <div class="qt-valign-wrapper">
                            <div class="qt-valign flow-text">
                                <div class="qt-booking-form" data-100p-top="opacity:0;" data-80p-top="opacity:0;" data-30p-top="opacity:1;">

                                        <ul class="tabs">
                                            <li class="tab col s4">
                                                <h5><a href="#Porteur" class="active">Porteur d'idée</a></h5></li>
                                            <li class="tab col s4">
                                                <h5><a href="#Entreprise">Entreprise</a></h5></li>
                                            <li class="tab col s4">
                                                <h5><a href="#Investisseur">Investisseur</a></h5></li>
                                        </ul>


                                    <div id="Porteur" class="input-field col s12" >

                                        <div class="button-porteur">

                                        <div class="row">
                                            <div class="input-field col s12">

                                                <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="button" onclick="window.location='{{ route("inscriptionP") }}'" >
                                                    <span class="lnr lnr-rocket"></span> formulaire d'inscription
                                                </button>
                                            </div>
                                        </div>
                                        </div>


                            </div>

                                        <div id="Entreprise" class="input-field col s12" >


<div class="button-entreprise">
                                            <div class="row">
                                                <div class="input-field col s12">

                                                    <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="button" onclick="window.location='{{ route("inscriptionEntreprise") }}'" >
                                                        <span class="lnr lnr-rocket"></span> formulaire d'inscription
                                                    </button>

                                                </div>
                                            </div>


                                        </div>
                                        </div>

                                        <div id="Investisseur" class="input-field col s12" >

                                            <div class="button-investisseur">

                                            <div class="row">
                                                <div class="input-field col s12">

                                                    <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light"type="button" onclick="window.location='{{ route("inscriptionInvestisseur") }}'" >
                                                        <span class="lnr lnr-rocket"></span> formulaire d'inscription
                                                    </button>

                                                </div>
                                            </div>

                                            </div>
                                        </div>
                        </div>
                    </div>
                    <!-- ====================== SECTION BOOKING AND CONTACTS END ================================================ -->
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection