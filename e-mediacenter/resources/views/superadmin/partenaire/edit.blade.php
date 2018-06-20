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

                        <form role="form" method="post"  enctype="multipart/form-data" action="{{route('partenaire.update',$partenaires->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nom')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Societe</label>
                                    <input type="text" name="nom" class="form-control" value="{{$partenaires->nom}}" >
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
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{route('partenaire.index')}}" type="reset" class="btn btn-primary" value="Anuler">Annuler</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection