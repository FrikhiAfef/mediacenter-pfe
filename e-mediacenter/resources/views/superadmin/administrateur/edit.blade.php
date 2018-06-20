
@extends('superadmin.layouts.app')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('administrateur/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
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
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Editer Administrateurs</h3>
                    <br>
                </div>
                <br>
                <form role="form" method="post"  action="{{ route('administrateur.update',$user->id) }}">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}

                    <div class="box-body">
                        <div class="form-group"  @if($errors->get('nom')) has-error @endif >
                            <label for="exampleInputEmail1">Nom De L'administrateur</label>
                            <input type="text" name="nom" class="form-control"  placeholder="Enter le nom " value="@if (old('nom')){{ old('nom') }}@else{{ $user->nom }}@endif">
                            @if($errors->get('nom'))
                                @foreach($errors->get('nom') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-group"  @if($errors->get('email')) has-error @endif >
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" name="email" class="form-control"  placeholder="Enter l'email" value="@if (old('email')){{ old('email') }}@else{{ $user->email }}@endif">
                            @if($errors->get('email'))
                                @foreach($errors->get('email') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif
                        </div>


                        <div class="form-group"  @if($errors->get('tel')) has-error @endif >
                            <label for="exampleInputEmail1">Num telephone</label>
                            <input type="text" name="tel" class="form-control"  placeholder="Enter le num teléphone" value="@if (old('tel')){{ old('tel') }}@else{{ $user->tel }}@endif">
                            @if($errors->get('tel'))
                                @foreach($errors->get('tel') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="confirm_passowrd">Statut</label>
                            <div class="checkbox">
                                <label ><input type="checkbox" name="statut"
                                               @if (old('statut')==1 || $user->statut == 1)
                                               checked
                                               @endif value="1">Statut</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Modifier son role</label>
                            <div class="row">
                                @foreach ($roles as $role)
                                    <div class="col-lg-3">
                                        <div class="checkbox">
                                            <label ><input type="checkbox" name="role[]" value="{{ $role->id }}"
                                                           @foreach ($user->roles as $user_role)
                                                           @if ($user_role->id == $role->id)
                                                           checked
                                                        @endif
                                                        @endforeach> {{ $role->nomR }}</label>
                                        </div>
                                    </div>
                                @endforeach
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

                    </div>
                </form>

            </div>

        </section>


    </div>
    <!-- /.content-wrapper -->
@endsection

@section('footerSection')
    <script src="{{ asset('administrateur/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('administrateur/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection