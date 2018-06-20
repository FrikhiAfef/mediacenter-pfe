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
                <li class="active">ENTREPRISE</li>

            </ol>
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">La liste des DEMANDES DE VALIDATIONS</h3>
                    <br>


                </div>
                <br>
                <!-- /.box-header -->
                <div >
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom</th>
                            <th>Domaine</th>
                            <th>Demande</th>
                            <th>Staut</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        @foreach($entreprises as $entreprise)
                            <tr>
                                <td> {{ $entreprise-> id }} </td>
                                <td> {{ $entreprise-> nom }} </td>
                                <td> {{ $entreprise->domaine }}</td>
                                <td> {{ $entreprise->demande }}</td>
                                <td> {{ $entreprise->statut}}</td>
                                <td>
                                    <form action="{{ route('entreprise.destroy',$entreprise->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <a href="{{route('entreprise.edit',$entreprise->id)}}" onclick="return confirm('Vraiment  voulez vous  valider cette entreprise ?')"class="btn btn-default" >valider</a>
                                        <button type="submit" onclick="return confirm('Vraiment voulez vous desactiver cette entreprise  ?')"  class="btn btn-danger">désactiver</button>
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
    <script src="{{asset('administrateur/bower_components/datatables.net/js/jquery.dataTables.min.js
')}}"></script>
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