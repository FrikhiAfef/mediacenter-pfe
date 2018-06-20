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
                        <form role="form" method="post"  action="{{route('emission.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomE')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Emission</label>
                                    <input type="text" name="nomE" class="form-control"  placeholder="Enter le nom de l'emission">
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
                                    <input type="text" name="date" class="form-control"  placeholder="DE LUNDI À VENDREDI DE 12H00 À 14H00">
                                    @if($errors->get('date'))
                                        @foreach($errors->get('date') as $message)
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
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> valider
                                </label>
                            </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <button type="reset" class="btn btn-warning" value="Anuler">Annuler</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection