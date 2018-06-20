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
                <li class="active">Partenaire</li>
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
                            <h3 class="box-title">Nouvelle Partenaire </h3>
                        </div>

                        <form role="form" method="post"  action="{{route('partenaire.store')}}"  enctype="multipart/form-data">
                            {{csrf_field()}}


                            <div class="form-group" @if($errors->get('nom')) has-error @endif>
                                <label for="nom">Nom </label>
                                <input type="text" name="nom" class="form-control"  placeholder="Nom">
                                @if($errors->get('nom'))
                                    @foreach($errors->get('nom') as $message)
                                        <li>{{$message}}</li>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-group" @if($errors->get('logo')) has-error @endif>
                                <label for="logo">Logo</label>
                                <input name="logo" type="file" >
                                @if($errors->get('logo'))
                                    @foreach($errors->get('logo') as $message)
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

                                <a href="{{route('partenaire.index')}}" type="reset" class="btn btn-primary" value="Anuler">Annuler</a>
                            </div>
                    </form>

                    </div>
                </div>

            </div></section>


    </div>

@endsection