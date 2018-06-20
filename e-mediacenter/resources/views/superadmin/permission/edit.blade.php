@extends('superadmin.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
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

            <!-- formulaire de creation de nouveau emission -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Modifier </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  enctype="multipart/form-data" action="{{route('permission.update',$permissions->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomP')) has-error @endif >
                                    <label for="exampleInputEmail1">Titre</label>
                                    <input type="text" name="nomP" class="form-control" value="{{$permissions->nomP}}" >
                                    @if($errors->get('nomP'))
                                        @foreach($errors->get('nomP') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group"  @if($errors->get('type')) has-error @endif >
                                    <label for="">Type</label>
                                    <input type="text" name="type" class="form-control" value="{{$permissions->type}}" >
                                    @if($errors->get('type'))
                                        @foreach($errors->get('type') as $message)
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

                                <a href="{{route('permission.index')}}"  class="btn btn-warning" >Annuler</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection