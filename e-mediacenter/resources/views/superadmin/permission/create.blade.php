@extends('superadmin.layouts.app')

@section('main-content')
    <!-- contenu de l'entete de page -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Utilisateur</li>
                <li class="active">Permission</li>
            </ol>
            <br>
            <br>
            <!-- formulaire de creation de nouveau emission -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouvelle Permission </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  action="{{route('permission.store')}}">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomP')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Emission</label>
                                    <input type="text" name="nomP" class="form-control"  placeholder="Permission">
                                    @if($errors->get('nomP'))
                                        @foreach($errors->get('nomP') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="type">Type de permission</label>
                                    <select name="type" id="for" class="form-control">
                                        <option selected disable>Selectionner le type de permission</option>
                                        <option value="emission">Emission</option>
                                        <option value="actualite">Actualite</option>
                                        <option value="evenement">Evenement</option>
                                        <option value="galerie">Galerie</option>
                                        <option value="podcast">Podcast</option>
                                        <option value="programme">Programme</option>
                                        <option value="apropos">A propos</option>
                                        <option value="actualite">Actualité</option>
                                        <option value="partenaire">Partenaire</option>
                                        <option value="equipe">Equipe</option>
                                        <option value="jump">Jump in incubator</option>
                                        <option value="publicite">Publicité</option>
                                        <option value="digital">Digital</option>
                                        <option value="autre">Autre</option>
                              </select>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> valider
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <a href="{{route('permission.index')}}"  class="btn btn-warning" >Annuler</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection