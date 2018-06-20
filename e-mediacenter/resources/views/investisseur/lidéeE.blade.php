@extends('investisseur.layouts.app')

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Compte</a></li>
                <li class="active">Investisseur</li>

            </ol>
            <br>
            <br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> liste des Entreprises </h3>
                    <br>

                </div>
                <br>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Domaine</th>
            </tr>
            </thead>


<body>
            @foreach($entreprise as $entreprise)
                @if(($entreprise->statut ==1 ))

                    <tr>
                        <td> {{  $entreprise-> id }} </td>
                        <td> {{ $entreprise->domaine }}</td>

                    </tr>


                @endif
            @endforeach
          </body>
        </table>
    </div>
  </div>

        </section>

    </div>


@endsection
