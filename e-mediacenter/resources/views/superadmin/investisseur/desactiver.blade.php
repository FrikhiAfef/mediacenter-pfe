
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
                <li class="active">INVESTISSEURS</li>

            </ol>
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> liste des Investisseurs Désactivés </h3>
                    <br>

                </div>
                <br>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom</th>
                            <th>DOMAINE</th>
                            <th>DEMANDE</th>

                        </tr>
                        </thead>
                        <body>
                        @foreach($investisseur as $investisseur)

                           <tr>

                               <td> {{ $investisseur-> id }} </td>
                               <td> {{ $investisseur-> nom }} </td>
                               <td> {{ $investisseur->domaine }}</td>
                               <td> {{ $investisseur->demande }}</td>


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