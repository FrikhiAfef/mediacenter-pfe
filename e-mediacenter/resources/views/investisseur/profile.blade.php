@extends('investisseur.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Profil {{$user->name}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Investisseur</a></li>
                <li class="active">profil</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-md-12">
                <div class="col-md-3">

                </div>
                <div class="col-md-5">

                    <!-- Profile Image -->
                    <div class="box box-primary">

                        <img class="profile-user-img img-responsive img-circle" <img  src="{{asset('storage/'.Auth::user()->image)}}" alt= "{{$user->name}}photo de profil">

                        <h3 class="profile-username text-center"> {{$user->name}}</h3>



                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <a>Nom</a> <b class="pull-right">{{$user->name}} </b>
                            </li>
                            <li class="list-group-item">
                                <a>Email</a> <b class="pull-right">{{$user->email }}</b>
                            </li>

                            <li class="list-group-item">
                                <a>Numéro de tel</a> <b class="pull-right">{{ $user -> tel }}</b>
                            </li>

                            <li class="list-group-item">
                                <a>Domaine</a> <b class="pull-right">{{$user->domaine }}</b>
                            </li>
                            <li class="list-group-item">
                                <a>Demande</a> <b class="pull-right">{{$user->demande }}</b>
                            </li>


                        </ul>

                        <a href="{{route('editI')}}" class="pull-right btn btn-primary"><b>Editer</b></a>

                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </section>
    </div>
    <!-- /.box -->


@endsection
