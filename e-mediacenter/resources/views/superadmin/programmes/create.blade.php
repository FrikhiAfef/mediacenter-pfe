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
                <li class="active">PROGRAMMES</li>
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
                            <h3 class="box-title">Nouvelle Programme</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  action="{{route('programme.store')}}">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomE')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Programme</label>
                                    <input type="text" name="nomE" class="form-control"  placeholder="Enter le nom de programme">
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
                                        <textarea class="textarea" name="description" placeholder="ecrire le description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                    </div>
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

                                <div class="form-group" @if($errors->get('heure')) has-error @endif>
                                    <label for="heure">Heure</label>
                                    <input type="datetime-local" name="heure" class="form-control"  placeholder=" DE 12H00 À 14H00">
                                    @if($errors->get('heure'))
                                        @foreach($errors->get('heure') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('jours')) has-error @endif>
                                    <label for="jours">Jours</label>
                                    <input type="text" name="jours" class="form-control"  placeholder="DE LUNDI À VENDREDI ">
                                    @if($errors->get('jours'))
                                        @foreach($errors->get('jours') as $message)
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
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <a href="{{route('programme.index')}}"  class="btn btn-warning" >Annuler</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection