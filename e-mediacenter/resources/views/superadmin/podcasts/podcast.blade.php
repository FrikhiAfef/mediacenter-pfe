@extends('superadmin.layouts.app')
@section('headSection')
    <link href="{{asset('administrateur/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
@endsection
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
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">La liste des Podcasts</h3>
                    <br>

                    <div class="col-md-12">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif
                        <br>

                        <div class="col-lg-offset-5">
                            <a href="{{route('podcast.create')}}" class="btn btn-success">Nouvelle Enregistrement</a>
                        </div>
                    </div>
                </div>
                <br>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        @foreach($podcasts as $podcast)
                            <tr>
                                <td> {{ $podcast -> id }} </td>
                                <td>{{ $podcast -> titre }}</td>
                                <td>
                                    <form action="{{ route('podcast.destroy',$podcast->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <a href="{{ route('podcast.show',$podcast->id) }}" class="btn btn-primary">Details</a>
                                        <a href="{{ route('podcast.edit',$podcast->id) }}" class="btn btn-default">Editer</a>
                                        <button type="submit" onclick="return confirm('Vraiment supprimer cette podcast ?')"  class="btn btn-danger">Suprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </body>

                    </table>
                </div>

            </div>

        </section>
    </div>

@section('footerSection')
    <script src="{{asset('administrateur/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('administrateur/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

@endsection


@endsection