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
                <li class="active">WEB RADIO</li>
                <li class="active">PODCASTS</li>
            </ol>

    <!-- formulaire de creation de nouveau emission -->
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

                <form role="form" method="post"  enctype="multipart/form-data" action="{{route('podcast.update',$podcasts->id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">

                    <div class="box-body">
                        <div class="form-group"  @if($errors->get('titre')) has-error @endif >
                            <label for="exampleInputEmail1">Nom Emission</label>
                            <input type="text" name="titre" class="form-control" value="{{$podcasts->titre}}" >
                            @if($errors->get('titre'))
                                @foreach($errors->get('titre') as $message)
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

                        <div class="form-group" @if($errors->get('audio')) has-error @endif>
                            <label for="audio">Audio</label>
                            <input name="audio" type="file" >
                            @if($errors->get('audio'))
                                @foreach($errors->get('audio') as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            @endif

                        </div>



                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">
                                    Description
                                </h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fa fa-minus"></i></button>

                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">

                                <textarea class="textarea" name="description" placeholder="{{$podcasts->description}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                            </div>
                        </div>



                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> valider
                            </label>
                        </div>
                    </div>

                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <a href="{{route('podcast.index')}}"  class="btn btn-warning" >Annuler</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
        </section>
    </div>


@endsection