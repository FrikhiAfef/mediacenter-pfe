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
                <li class="active">Equipe</li>
            </ol>
            <br>
            <br>
            <!-- formulaire de creation de nouveau emission -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">

                        <form role="form" method="post"  enctype="multipart/form-data" action="{{route('equipe.update',$equipes->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nom')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom</label>
                                    <input type="text" name="nom" class="form-control" value="{{$equipes->nom}}" >
                                    @if($errors->get('nom'))
                                        @foreach($errors->get('nom') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group"  @if($errors->get('prenom')) has-error @endif>
                                    <label for="exampleInputPassword1">Prenom</label>
                                    <input type="text" name="prenom" class="form-control" value="{{$equipes->prenom}}">
                                    @if($errors->get('prenom'))
                                        @foreach($errors->get('prenom') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('poste')) has-error @endif>
                                    <label for="prenomAnim">Poste</label>
                                    <input type="text" name="poste" class="form-control" value="{{$equipes->poste}}"  >
                                    @if($errors->get('poste'))
                                        @foreach($errors->get('poste') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>


                                <div class="form-group" @if($errors->get('image')) has-error @endif >
                                    <label for="image">Image</label>
                                    <input name="image" type="file" value="{{$equipes->image}}" >
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
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                    <button type="submit" class="btn btn-danger">Modifier</button>
                                <a href="{{route('equipe.index')}}" type="reset" class="btn btn-primary" value="Anuler">Annuler</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection