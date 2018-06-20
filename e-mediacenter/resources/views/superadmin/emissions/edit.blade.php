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
                <li class="active">WEB RADIO</li>
                <li class="active">EMISSIONS</li>
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
                            <h3 class="box-title">Nouvelle Emission </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  enctype="multipart/form-data" action="{{route('emission.update',$emission->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomE')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Emission</label>
                                    <input type="text" name="nomE" class="form-control" value="{{$emission->nomE}}" >
                                    @if($errors->get('nomE'))
                                        @foreach($errors->get('nomE') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="type"> Nom animateur</label>
                                    <select name="nomAnim" id="for" class="form-control">
                                        <option selected disable>Selectionner le nom Animateur</option>
                                        @foreach($animateurs as $animateur)
                                            <option value=" {{$animateur->nomAnim}}">{{ $animateur->nomAnim}}</option>
                                        @endforeach

                                    </select>
                                </div>



                                <div class="form-group" @if($errors->get('date')) has-error @endif>
                                    <label for="date">Date</label>
                                    <input type="text" name="date" class="form-control" value="{{$emission->date}}" >
                                    @if($errors->get('date'))
                                        @foreach($errors->get('date') as $message)
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

                                            <textarea class="textarea" name="description"  placeholder=" {{$emission->description}}"></textarea>

                                    </div>
                                </div>





                                <div class="form-group"  >
                                    <label for="image">Image</label>
                                    <input name="image" type="file" >


                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> valider
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="form-control btn btn-danger">Modifier</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection