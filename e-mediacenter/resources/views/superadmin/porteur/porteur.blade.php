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
                <li class="active">PORTEUR</li>

            </ol>
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">La liste des Inscrits</h3>
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
                           <th>Idée</th>
                            <th>Statut</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        @foreach($porteurs as $porteur)
                            <tr>
                                <td> {{ $porteur-> id }} </td>
                                <td> {{ $porteur-> nom}} </td>
                           <td> {{ $porteur->idee }}</td>
                                <td> {{ $porteur->statut }}</td>
                                <td>
                                    <form action="{{ route('porteur.destroy',$porteur->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <a href="{{route('porteur.edit',$porteur->id)}}" onclick="return confirm('Vraiment  voulez vous affecter  cette idée de porteur ?')"class="btn btn-default" >affecter</a>
                                        <button type="submit" onclick="return confirm('Vraiment supprimer cette porrteur dans liste des insrits ?')"  class="btn btn-danger">Suprimer</button>
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