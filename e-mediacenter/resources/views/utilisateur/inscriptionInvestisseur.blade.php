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
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{session()->get('success')}}
                                        </div>
                                    @endif


                                    <ul class="tabs">

                                        <li class="tab col s4">
                                            <h5><a href="#form" >Investisseur</a></h5></li>

                                    </ul>


                                    <div id="form" class="row">

                                        <form class="col s12" enctype="multipart/form-data" action="{{route('inscriptionInvestisseur.store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="antispam" value="x123">
                                            <h3 class="left-align qt-vertical-padding-m">Inscriver en utilisant le formulaire ci-dessous
                                            </h3>
                                            <div class="row">
                                                <div class="input-field col s6  ">
                                                    <label>Nom </label>
                                                    <input   type="text" name="nom"  value="{{old('nom')}}">
                                                    {!! $errors->first('nom', '<span class="help-block">:message</span>') !!}
                                                </div>


                                                <div class="input-field col s6 ">
                                                    <label>Prenom</label>
                                                    <input type="text" name="prenom" value="{{old('prenom')}}" >
                                                    {!! $errors->first('prenom', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12 ">
                                                    <label>Numéro de téléphone</label>
                                                    <input type="text" name="tel" value="{{old('tel')}}" >
                                                    {!! $errors->first('tel', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12  ">
                                                    <label>Image </label><br><br>
                                                    <input type="file" name="image" >
                                                    {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12 ">
                                                    <label>Domaine</label>
                                                    <input  type="text" name="domaine"  >
                                                    {!! $errors->first('domaine', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12 ">
                                                    <label>Demande</label>
                                                    <input   type="text" name="demande" >
                                                    {!! $errors->first('demande', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12 ">
                                                    <label>Email</label>
                                                    <input   type="text" name="email" >
                                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="input-field col s12 ">
                                                    <label>mot de passe</label>
                                                    <input   type="password" name="password"  >
                                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>



                                            <hr class="qt-spacer-s hide-on-med-and-up">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="qt-btn qt-btn-l qt-btn-primary qt-spacer-m waves-effect waves-light" type="submit" >
                                                        <span class="lnr lnr-rocket"></span> Confirmer
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                      <a href="{{ URL::previous() }}" class="btn btn-default"><center>Retour</center></a>
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