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
                <li class="active">EVENEMENT</li>
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
                            <h3 class="box-title">Editer Evenement </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post"  enctype="multipart/form-data" action="{{route('evenement.update',$evenements->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomEven')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom Evenement</label>
                                    <input type="text" name="nomEven" class="form-control" value="{{$evenements->nomEven}}">
                                    @if($errors->get('nomEven'))
                                        @foreach($errors->get('nomEven') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>



                                <div class="form-group" @if($errors->get('date')) has-error @endif>
                                    <label>DATE</label>
                                    <input type="datetime-local" class="form-control" name="date"   value="{{$evenements->date}}">


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
                                   <div class="form-group" @if($errors->get('afficheimage')) has-error @endif>
                                       <label for="afficheimage">Image</label>
                                       <input name="afficheimage" type="file" >
                                       @if($errors->get('afficheimage'))
                                           @foreach($errors->get('afficheimage') as $message)
                                               <li>{{$message}}</li>
                                           @endforeach
                                       @endif

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
                                <button type="submit" class="btn btn-danger">Modifier</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
