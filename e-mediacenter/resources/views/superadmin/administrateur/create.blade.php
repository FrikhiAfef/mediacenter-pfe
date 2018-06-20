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
                <li class="active">Liste Des Administrateurs</li>
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
                            <h3 class="box-title">Nouvelle Administrateur </h3>
                        </div>
                        <br>
                        <form role="form" method="post"  action="{{route('administrateur.store')}}">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nom')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom De L'administrateur</label>
                                    <input type="text" name="nom" class="form-control"  placeholder="Enter le nom "value="{{ old('nom') }}">
                                    @if($errors->get('nom'))
                                        @foreach($errors->get('nom') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group"  @if($errors->get('email')) has-error @endif >
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" name="email" class="form-control"  placeholder="Enter l'email" value="{{ old('email') }}">
                                    @if($errors->get('email'))
                                        @foreach($errors->get('email') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ old('password') }}">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Passowrd</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm passowrd">
                                </div>

                                <div class="form-group"  @if($errors->get('tel')) has-error @endif >
                                    <label for="exampleInputEmail1">Num telephone</label>
                                    <input type="text" name="tel" class="form-control"  placeholder="Enter le nom "value="{{ old('tel') }}">
                                    @if($errors->get('tel'))
                                        @foreach($errors->get('tel') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Statut</label>
                                    <div class="checkbox">
                                        <label ><input type="checkbox" name="statut" @if (old('statut') == 1)
                                            checked
                                                       @endif value="1">Statut</label>
                                    </div>
                                </div>


                                <div class="row">

                                    <label>Choisir son role</label>

                                    <div>
                                        @foreach ($roles as $role)
                                            <div class="col-lg-3">
                                                <div class="checkbox">
                                                    <label ><input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->nomR }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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

                                <a href="{{route('administrateur.index')}}"  class="btn btn-warning" >Annuler</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection