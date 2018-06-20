@extends('superadmin.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                 <li class="active">JUMP IN INCUBATOR</li>

            </ol>
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Jump In Incubator</h3>
                    <br>

                    <div class="col-md-12">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif
                        <br>

                        <div class="col-lg-offset-5">
                            <a href="{{route('jumpin.create')}}" class="btn btn-success">Nouvelle </a>
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
                        @foreach($jumps as $jump)
                            <tr>
                                <td> {{ $jump -> id }} </td>
                                <td>{{ $jump -> titre }}</td>

                                <td>
                                    <form action="{{ route('jumpin.destroy',$jump->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <a href="{{ route('jumpin.show',$jump->id) }}" class="btn btn-primary">Details</a>
                                        <a href="{{ route('jumpin.edit',$jump->id) }}" class="btn btn-default">Editer</a>
                                        <button type="submit" onclick="return confirm('Voulez vous vraiment le supprimer ?')"  class="btn btn-danger">Suprimer</button>
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


@endsection