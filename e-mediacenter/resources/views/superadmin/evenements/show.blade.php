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
                <li class="active">WEB RADIO</li>
                <li class="active">EVENEMENTS</li>
            </ol>
            <br>
            <br>

            <div class="col-sm-offset-4 col-sm-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Fiche de l'Evenement</div>
                    <div class="panel-body">
                        <p>Nom De L'EVENEMENT : {{ $evenements->nomEven }}</p>
                          <p>Description : {{ $evenements->description }}</p>
                            <p>Lieu : {{ $evenements->lieu }}</p>
                        <p>Nombre participants : {{ $evenements->nbParticipant }}</p>
                          <p>Date : {{ $evenements->date }}</p>
                            <p>Image : {{ $evenements->image }}</p>
                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>
            </div>



        </section>
    </div>



@endsection
