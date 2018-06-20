@extends('entreprise.layouts.app')

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
                        <form role="form" method="get" enctype="multipart/form-data" action="{{route('updateE')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('domaine')) has-error @endif >
                                    <label for="exampleInputEmail1">DOMAINE</label>
                                    <input type="text" name="domaine" class="form-control" value="{{$user->domaine}}" >
                                    @if($errors->get('domaine'))
                                        @foreach($errors->get('domaine') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group"  @if($errors->get('demande')) has-error @endif>
                                    <label for="exampleInputPassword1">DEMANDE</label>
                                    <input type="text" name="demande" class="form-control" value="{{$user->demande}}">
                                    @if($errors->get('demande'))
                                        @foreach($errors->get('demande') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>



                                <div class="form-group" @if($errors->get('tel')) has-error @endif>
                                    <label for="date">TEL</label>
                                    <input type="text" name="tel" class="form-control" value="{{$user->tel}}" >
                                    @if($errors->get('tel'))
                                        @foreach($errors->get('tel') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
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
                                <button type="submit" class="form-control btn btn-danger">Modifier</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
