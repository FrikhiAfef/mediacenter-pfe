
@extends('superadmin.layouts.app')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('administrateur/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Utilisateur</li>
                <li class="active">Role</li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">La liste des Role</h3>
                    <br>

                    <div class="col-md-12">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif
                        <br>

                        <div class="col-lg-offset-5">
                            <a href="{{route('role.create')}}" class="btn btn-success">Nouvelle Role</a>
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
                            <th>nom</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        @foreach($roles as $role)
                            <tr>
                                <td> {{ $role-> id }} </td>
                                <td>{{ $role-> nomR }}</td>

                                <td>
                                    <form action="{{ route('role.destroy',$role->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <a href="{{ route('role.show',$role->id) }}" class="btn btn-primary">Details</a>
                                        <a href="{{ route('role.edit',$role->id) }}" class="btn btn-default">Editer</a>
                                        <button type="submit" onclick="return confirm('Vraiment supprimer ce role?')"  class="btn btn-danger">Suprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </body>

                    </table>
                </div>

            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('footerSection')
    <script src="{{ asset('administrateur/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('administrateur/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endsection