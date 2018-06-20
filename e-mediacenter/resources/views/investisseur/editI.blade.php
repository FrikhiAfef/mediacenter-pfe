@extends('investisseur.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">

            <img src="/uplods/image/{{$user->image}}" style="width:150px;height:150px;float:left;border-radius: 50%;margin-right: 25px; ">
            <h1>
                Profil de {{$user->name}}
            </h1>


            <br>
            <br>
            <!-- formulaire de creation de nouveau emission -->
            <div class="row">

                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouveaux cordonnées</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="get" enctype="multipart/form-data" action="{{url('updateI')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="box-body">

                                <div class="box-body">
                                    <div class="form-group"  @if($errors->get('nom')) has-error @endif >
                                        <label for="exampleInputEmail1">Nom</label>
                                        <input type="text" name="nom" class="form-control" value="{{$user->name}}" >
                                        @if($errors->get('nom'))
                                            @foreach($errors->get('nom') as $message)
                                                <li>{{$message}}</li>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group"  @if($errors->get('email')) has-error @endif >
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" name="email" class="form-control" value="{{$user->email}}" >
                                            @if($errors->get('email'))
                                                @foreach($errors->get('email') as $message)
                                                    <li>{{$message}}</li>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="form-group" @if($errors->get('tel')) has-error @endif>
                                            <label for="date">Tel</label>
                                            <input type="text" name="tel" class="form-control" value="{{$user->tel}}" >
                                            @if($errors->get('tel'))
                                                @foreach($errors->get('tel') as $message)
                                                    <li>{{$message}}</li>
                                                @endforeach
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label for="domaine">Domaine</label>
                                            <select name="domaine" id="for" class="form-control">
                                                <option selected disable>Selectionner votre domaine</option>
                                                <option value="Cloud compting">Cloud compting</option>
                                                <option value="Développement embarqué">Développement embarqué</option>
                                                <option value="Développement logiciel">Développement logiciel</option>
                                                <option value="Développement mobile">Développement mobile</option>
                                                <option value="Développement web">Développement web</option>
                                                <option value="e-Commerce">e-Commerce</option>
                                                <option value="e-Health">e-Health</option>
                                                <option value="e-learning">e-learning</option>
                                                <option value="Etudes,Conseils et Formation">Etudes,Conseils et Formation</option>
                                                <option value="Gaming">Gaming</option>
                                                <option value="ioT">ioT</option>
                                                <option value=">Marketing Digital">Marketing Digital</option>
                                                <option value="Télécoms et réseaux">Télécoms et réseaux</option>
                                            </select>
                                        </div>
                                        <div class="box-body">
                                            <div class="form-group"  @if($errors->get('domaine')) has-error @endif >
                                                <label for="demande">Demande</label>
                                                <select name="demande" id="for" class="form-control">
                                                    <option selected disable>Selectionner votre demande</option>
                                                    <option value="chercher un porteur d'idée">chercher un porteur d'idée</option>
                                                    <option value="chercher un entreprise">chercher un entreprise </option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group" @if($errors->get('image')) has-error @endif >
                                            <label for="image">Image</label>
                                            <input name="image" type="file" value="{{$user->image}}" >
                                            @if($errors->get('image'))
                                                @foreach($errors->get('image') as $message)
                                                    <li>{{$message}}</li>
                                                @endforeach
                                            @endif

                                        </div>



                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-danger">Modifier</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
