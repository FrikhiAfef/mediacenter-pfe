@extends('utilisateur.app')
@section('contenu')
    <style >

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
    </style>
    <div id="maincontent" class="qt-main">
        <!-- ======================= HEADER SECTION ======================= -->
        <!-- HEADER CONTACTS ========================= -->
        <div class="qt-pageheader qt-negative">
            <div class="qt-container">
                <h1 class="qt-caption qt-spacer-s">
                    Contactez Nous
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
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{session()->get('success')}}
                                        </div>
                                    @endif
                                    <ul class="tabs">
                                        <li class="tab col s4">
                                            <h5><a href="#form" class="active">Envoyer un message</a></h5></li>
                                        <li class="tab col s4">
                                            <h5><a href="#contacts">Contacts</a></h5></li>
                                        <li class="tab col s4">
                                            <h5><a href="#map">Map</a></h5></li>
                                    </ul>



                                    <div id="form" class="row">

                                        <form class="col s12" method="post" action="{{route('contactstore')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="antispam" value="x123">
                                            <h3 class="left-align qt-vertical-padding-m">Envoyer un message en utilisant le formulaire ci-dessous
                                            </h3>
                                            <div class="row">
                                                <div class="input-field col s6  ">
                                                    <label>Prénom</label>
                                                    <input name="prenom" id="first_name" type="text"  value="{{old('prenom')}}">
                                                    {!! $errors->first('prenom', '<span class="help-block">:message</span>') !!}


                                                </div>
                                                <div class="input-field col s6 ">
                                                    <label>Nom</label>
                                                    <input name="nom" id="last_name" type="text" class="validate" value="{{old('nom')}}" >
                                                    {!! $errors->first('nom', '<span class="help-block">:message</span>') !!}


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12  ">
                                                    <label>Email</label>
                                                    <input name="email" id="formemail" type="email" class="validate" value="{{old('email')}}">
                                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}



                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 ">
                                                    <label>Message</label>

                                                    <textarea name="msg" id="message" class="materialize-textarea" maxlength="300"  >{{old('msg')}}</textarea>
                                                    {!! $errors->first('msg', '<span class="help-block">:message</span>') !!}


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input name="privacy" type="checkbox" id="privacy" value="1" />
                                                    <label>J'ai lu et j'accepte le <a href="#" target="_blank">terme de confidentialité
                                                        </a>.</label>
                                                </div>
                                            </div>
                                            <hr class="qt-spacer-s hide-on-med-and-up">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="submit" name="action">
                                                        <span class="lnr lnr-rocket"></span> Enyoyer
                                                    </button>
                                                    <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="reset" name="action">
                                                        <span class="lnr lnr-rocket"></span> Annuler
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="contacts" class="row qt-contacts">
                                        <div class="col s12">
                                            <h3 class="left-align qt-vertical-padding-m">Nos Contacts</h3>
                                            <p><i class="qt-bigicon dripicons-phone"></i><span>(+216) 71 857 757   </span></p>
                                            <p><i class="qt-bigicon dripicons-phone"></i><span>contact@elgazala.tn</span></p>
                                            <p><i class="qt-bigicon dripicons-phone"></i><span>Elgazala Technopark, Raoued, Gouvernorat de l'Ariana, 2088 Ariana - Tunisie</span></p>
                                        </div>
                                    </div>
                                    <div id="map" class="qt-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d797.7255539169165!2d10.187531371010174!3d36.892687472876226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb723a324c63%3A0x7bfbd7937d5c5136!2sClever+Media+Center!5e0!3m2!1sfr!2stn!4v1518521816517" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                            </div>
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