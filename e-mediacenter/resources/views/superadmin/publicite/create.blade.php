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
                <li class="active">Autre</li>
                <li class="active">Publicite</li>
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
                            <h3 class="box-title">Nouvelle Publicite </h3>
                        </div>

                        <form role="form" method="post"  action="{{route('publicite.store')}}"  enctype="multipart/form-data">
                            {{csrf_field()}}


                            <div class="form-group" @if($errors->get('nomSociete')) has-error @endif>
                                <label for="nomSociete">Nom Et Prenom</label>
                                <input type="text" name="nomSociete" class="form-control"  placeholder="Nom">
                                @if($errors->get('nomSociete'))
                                    @foreach($errors->get('nomSociete') as $message)
                                        <li>{{$message}}</li>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group" @if($errors->get('image')) has-error @endif>
                                <label for="image">Image</label>
                                <input name="image" type="file" >
                                @if($errors->get('image'))
                                    @foreach($errors->get('image') as $message)
                                        <li>{{$message}}</li>
                                    @endforeach
                                @endif

                            </div>


                           <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> valider
                                    </label>
                                </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <a href="{{route('publicite.index')}}" type="reset" class="btn btn-primary" value="Anuler">Annuler</a>
                            </div>
                    </form>

                    </div>
                </div>

            </div></section>


    </div>

@endsection