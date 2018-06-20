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
                <li class="active">PROGRAMMES</li>
            </ol>
            <br>
            <br>

            <div class="col-sm-offset-4 col-sm-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Fiche de Programme</div>
                    <div class="panel-body">
                        <p>Nom de Programme : {{ $programmes->nomE }}</p>
                        <p>Prenom de l'Animateur : {{ $programmes->nomAnim }}</p>
                        <p>Heure de programme: {{ $programmes->heure }}</p>
                        <p>Jours de programme : {{ $programmes->jours }}</p>


                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>
            </div>



        </section>
    </div>



@endsection

