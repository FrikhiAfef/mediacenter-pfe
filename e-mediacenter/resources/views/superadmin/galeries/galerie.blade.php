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
                <li class="active">GALERIE</li>
            </ol>
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">La liste de  Galerie</h3>
                    <br>

                    <div class="col-md-12">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif
                        <br>

                        <div class="col-lg-offset-5">
                            <a href="{{route('galerie.create')}}" class="btn btn-success">Nouveau</a>
                        </div>
                    </div>
                </div>
                <br>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Video</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        @foreach($galeries as $galerie)
                            <tr>
                                <td> {{ $galerie-> id }} </td>
                                <td>{{ $galerie-> titre }}</td>
                                <td>{{ $galerie -> image  }}</td>
                                <td> {{ $galerie -> video }}</td>
                                <td>
                                    <form action="{{ route('galerie.destroy',$galerie->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <a href="{{ route('galerie.show',$galerie->id) }}" class="btn btn-primary">Details</a>
                                        <a href="{{ route('galerie.edit',$galerie->id) }}" class="btn btn-default">Editer</a>
                                        <button type="submit" onclick="return confirm('Vouler vous le supprimer ?')"  class="btn btn-danger">Suprimer</button>
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